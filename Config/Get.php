<?php
/**	op-core-ci:/Config/Get.php
 *
 * @created    2025-07-09
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

/* @var $ci UNIT\CI\CI_Config */

//	...
$method = 'Get';

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
