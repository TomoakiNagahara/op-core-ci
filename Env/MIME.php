<?php
/**	op-core-ci:/Env/MIME.php
 *
 * @created    2025-07-06
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
$method = 'MIME';

//	Default
$result = '';
$args   = null;
$ci->Set($method, $result, $args);

//	Set
$result = 'text/plain';
$args   = 'text/plain';
$ci->Set($method, $result, $args);

//	Get
$result = 'text/plain';
$args   =  null;
$ci->Set($method, $result, $args);
