<?php
/**	op-core-ci:/Env/AdminMail.php
 *
 * @created    2025-07-14
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
$method = 'AdminMail';

//	...
$result = Config::Get('admin')[Env::_ADMIN_MAIL_];
$args   =  null;
$ci->Set($method, $result, $args);
