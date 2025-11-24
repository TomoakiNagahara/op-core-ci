<?php
/**	op-core-ci:/OP/MetaPath.php
 *
 * @created    2025-11-24
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
$method = 'MetaPath';

//	Get app root
$app_root = _ROOT_APP_;

//	Meta to path
$args   = 'app:/';
$result = $app_root;
$ci->Set($method, $result, $args);

//	Meta to path - not exists
$args   = 'app:/hoge/';
$result = $app_root.'hoge/';
$ci->Set($method, $result, $args);

//	Meta to URL
$args   = ['doc:/', true];
$result = '/';
$ci->Set($method, $result, $args);

//	Meta to URL - not exists
$args   = ['doc:/hoge/', true];
$result = '/hoge/';
$ci->Set($method, $result, $args);
