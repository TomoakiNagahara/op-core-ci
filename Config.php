<?php
/**	op-core-ci:/Config.php
 *
 * @created    2022-10-12
 * @version    1.0
 * @package    op-core
 * @subpackage ci
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/**	Declare strict
 *
 */
declare(strict_types=1);

/**	namespace
 *
 */
namespace OP;

/*
//	...
$config = [];

//	...
$app_id = 'self-check';

//	...
$config['_Init'][]  = ['result' => 'ci', 'args' => 'CI'];
$config['_Fetch'][] = ['result' => null, 'args' => 'ci'];
$config['Get'][]    = [
	'args'   => 'app_id',
	'result' => [
		'app_id' => $app_id,
	],
];

$config['Set'][]    = [
	'args'   => ['app_id', ['execute'=>false]],
	'result' => [
		'app_id'  => $app_id,
		'execute' => false,
	],
];
*/

/* @var $ci \OP\UNIT\CI\CI_Config */
$ci = OP()->Unit()->CI()->Config();

//	...
$key = md5(__FILE__);

//	...
$method = '_Init';
$result = 'ci';
$args   = 'CI';
$ci->Set($method, $result, $args);

//	...
$method = '_Fetch';
$result =  null;
$args   = 'ci';
$ci->Set($method, $result, $args);

/*
//	...
$method = 'Get';
$result = ['app_id' => 'CI'];
$args   = 'app_id';
$ci->Set($method, $result, $args);
*/

/*
//	Get - Key name is empty.
$method = 'Get';
$core   = realpath( _ROOT_CORE_ );
$line   = 136;
$file   = $core.'/class/Config.class.php';
$message= " null given, called in {$file} on line {$line}";
switch( PHP_MAJOR_VERSION.PHP_MINOR_VERSION ){
	case '74':
		$result = 'Argument 1 passed to OP\Config::_Init() must be of the type string,' . $message;
		break;
	default:
		$result = 'OP\Config::_Init(): Argument #1 ($name) must be of type string,' . $message;
}
$args   = null;
$ci->Set($method, 'Exception: '.$result, $args);
*/

//	Get
$result = "Notice: This config file does not exists: {$key}";
$args   = $key;
$ci->Set('Get', $result, $args);

//	Set - Init
$method = 'Set';
$args   = [$key, ['a' => 'A', 'b' => 'B']];
$result = ['a' => 'A', 'b' => 'B'];
$ci->Set($method, $result, $args);

//	Set - Add
$method = 'Set';
$result = ['a' => 'A', 'b' => 'B', 'c' => 'C'];
$args   = [$key, ['c' => 'C']];
$ci->Set($method, $result, $args);

//	...
return $ci->Get();
