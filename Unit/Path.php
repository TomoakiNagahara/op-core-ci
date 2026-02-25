<?php
/**	op-core-ci:/Unit/Path.php
 *
 * @created    2026-01-25
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

//	...
$method = basename(__FILE__);
$method = explode('.', $method)[0];

/* @var $ci \OP\UNIT\CI\CI_Config */

//	Positive
$args   = 'Notice';
$result = OP()->Path('asset:/unit/notice/');
$ci->Set($method, $result, $args);
