<?php
/**	op-core-ci:/Unit/Load.php
 *
 * @created    2026-01-27
 * @license    Apache-2.0
 * @package    op-core
 * @subpackage ci
 * @copyright  Tomoaki Nagahara
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP;

//	Get method name from file name.
$method = basename(__FILE__);
$method = explode('.', $method)[0];

/* @var $ci \OP\UNIT\CI\CI_Config */

//	Positive
$args   = 'CD';
$result = true;
$ci->Set($method, $result, $args);

//	Duplicate call
$args   = 'CD';
$result = true;
$ci->Set($method, $result, $args);
