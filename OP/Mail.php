<?php
/**	op-core-ci:/OP/Mail.php
 *
 * @created    2025-07-27
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
$method = 'Mail';

//	...
$to      =  Config::Get('admin')[OP::_ADMIN_MAIL_];
$subject = 'CI of OP::Mail()';
$message = 'This is CI test mail.';
$headers = [];

//	plain text mail
$args   = [$to, $subject, $message, $headers];
$result = true;
$ci->Set($method, $result, $args);
