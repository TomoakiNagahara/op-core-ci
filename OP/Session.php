<?php
/**	op-core-ci:/OP/Session.php
 *
 * @created    2025-08-11
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
$method = 'Session';

//	...
$message= 'Checks whether the returned value is a Session object.';
$result = 'OP\Session';
$args   = null;
$ci->Set($method, $result, $args, message: $message);
