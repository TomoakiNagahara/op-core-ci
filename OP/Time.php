<?php
/**	op-core-ci:/OP/Time.php
 *
 * @created    2025-11-19
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

//	Time - Happy
$args   = null;
$result = strtotime('2024-01-01 23:45:60'); // op-unit-ci:/cicd3.php
$ci->Set('Time', $result, $args);

//	Time - Happy
$args   = null;
$result = \OP\Time();
$ci->Set('Time', $result, $args);

//	Time - Unhappy
$args   = [true, \time()];
$result = 'Notice: Frozen time has already set.';
$ci->Set('Time', $result, $args);
