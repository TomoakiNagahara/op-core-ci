<?php
/**	op-core-ci:/OP/Request.php
 *
 * @created    2025-06-23
 * @version    1.0
 * @package    op-core
 * @subpackage ci
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/**	namespace
 *
 */
namespace OP;

/* @var $ci \OP\UNIT\CI\CI_Config */

//	...
$method = 'Request';

//	...
foreach( $_SERVER['argv'] as $arg ){
	//	...
	if( strpos($arg, '=') === false ){
		continue;
	}

	//	...
	list($key, $val) = explode('=', $arg);

	//	...
	$argv[$key] = $val;
}

//	...
$result = $argv ?? [];
$args   = null;
$ci->Set($method, $result, $args);
