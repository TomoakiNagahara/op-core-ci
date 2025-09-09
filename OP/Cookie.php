<?php
/**	op-core-ci:/OP/Cookie.php
 *
 * @created    2025-08-21
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
$method = 'Cookie';

//	...
$message= 'Checks whether the returned value is a Cookie object.';
$result = 'OP\Cookie';
$args   = null;
$ci->Set($method, $result, $args, message: $message);
