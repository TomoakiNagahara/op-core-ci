<?php
/**	op-core-ci:/OP/Path.php
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
$method = 'Path';

//	Get app root
$app_root = OP::MetaPath('app:/');

//	Meta path
$args   = 'app:/foo/bar/';
$result = $app_root.'foo/bar/';
$ci->Set($method, $result, $args);

//	Full path
$args   = $app_root.'/foo/bar/';
$result = 'app:/foo/bar/';
$ci->Set($method, $result, $args);

//	git root
$args   = 'git:/';
$result = _ROOT_GIT_;
$ci->Set($method, $result, $args);

//	real root
$args   = 'real:/';
$result = realpath(_ROOT_GIT_).'/';
$ci->Set($method, $result, $args);
