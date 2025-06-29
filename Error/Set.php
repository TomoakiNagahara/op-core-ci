<?php
/**	op-core-ci:/Error/Set.php
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
$method = 'Set';

//	...
$result = 'Notice: (empty)';
$args   = '(empty)';
$ci->Set($method, $result, $args);

//	...
$result = 'Notice: This is error test.';
$args   = 'This is error test.';
$ci->Set($method, $result, $args);
