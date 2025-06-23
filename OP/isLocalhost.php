<?php
/**	op-core-ci:/OP/isLocalhost.php
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
$method = 'isLocalhost';

//	...
$result = true;
$args   = null;
$ci->Set($method, $result, $args);
