<?php
/**	op-core-ci:/OP/ServerName.php
 *
 * @created    2026-06-04
 * @version    1.0
 * @package    op-core
 * @subpackage ci
 * @author     Codex CLI
 * @copyright  Tomoaki Nagahara
 */

/**	namespace
 *
 */
namespace OP;

/* @var $ci \OP\UNIT\CI\CI_Config */

//	...
$method = 'ServerName';

//	Generate isolated SERVER_NAME mutation hooks for each CI case.
$server_name_hooks = function(?string $server_name, bool $unset=false) : array {
	//	...
	$exists = null;
	$origin = null;

	//	Preserve the original process value so each test case cannot leak into the next one.
	$prepare = function() use (&$exists, &$origin, $server_name, $unset) {
		$exists = array_key_exists('SERVER_NAME', $_SERVER);
		$origin = $_SERVER['SERVER_NAME'] ?? null;

		if( $unset ){
			unset($_SERVER['SERVER_NAME']);
		}else{
			$_SERVER['SERVER_NAME'] = $server_name;
		}
	};

	//	Restore the original process value because $_SERVER is shared global state.
	$cleanup = function() use (&$exists, &$origin) {
		if( $exists ){
			$_SERVER['SERVER_NAME'] = $origin;
		}else{
			unset($_SERVER['SERVER_NAME']);
		}
	};

	//	...
	return [$prepare, $cleanup];
};

//	Undefined SERVER_NAME should be safe in CLI or incomplete server environments.
[$prepare, $cleanup] = $server_name_hooks(null, true);
$result  = null;
$args    = null;
$message = "SERVER_NAME is undefined, so ServerName() must return null.";
$ci->Set($method, $result, $args, $prepare, $cleanup, $message);

//	A valid server name should be returned as-is.
[$prepare, $cleanup] = $server_name_hooks('example.com');
$result  = 'example.com';
$args    = null;
$message = "Valid SERVER_NAME should be returned as-is.";
$ci->Set($method, $result, $args, $prepare, $cleanup, $message);

//	Surrounding whitespace is trimmed before validation by the current implementation.
[$prepare, $cleanup] = $server_name_hooks(' example.com ');
$result  = 'example.com';
$args    = null;
$message = "SERVER_NAME is trimmed before validation.";
$ci->Set($method, $result, $args, $prepare, $cleanup, $message);

//	Empty SERVER_NAME is not a usable server name.
[$prepare, $cleanup] = $server_name_hooks('');
$result  = null;
$args    = null;
$message = "Empty SERVER_NAME must return null.";
$ci->Set($method, $result, $args, $prepare, $cleanup, $message);

//	Whitespace-only SERVER_NAME becomes empty after trim.
[$prepare, $cleanup] = $server_name_hooks(" \t ");
$result  = null;
$args    = null;
$message = "Whitespace-only SERVER_NAME must return null.";
$ci->Set($method, $result, $args, $prepare, $cleanup, $message);

//	A slash means the value is not just a server name.
[$prepare, $cleanup] = $server_name_hooks('example.com/path');
$result  = null;
$args    = null;
$message = "SERVER_NAME containing slash must be rejected.";
$ci->Set($method, $result, $args, $prepare, $cleanup, $message);

//	Embedded control characters are rejected even when surrounding whitespace can be trimmed.
[$prepare, $cleanup] = $server_name_hooks("example\n.com");
$result  = null;
$args    = null;
$message = "SERVER_NAME containing an embedded newline must be rejected.";
$ci->Set($method, $result, $args, $prepare, $cleanup, $message);
