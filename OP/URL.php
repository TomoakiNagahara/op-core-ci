<?php
/**	op-core-ci:/OP/isCI.php
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
$method = 'URL';

//	Get root
$doc_root = _ROOT_DOC_;
$app_root = _ROOT_APP_;

//	Meta path
$args   = 'app:/foo/bar/';
$result = '/foo/bar/';
$ci->Set($method, $result, $args);

//	Full path
$args   = $app_root.'/foo/bar/';
$result = '/foo/bar/';
$ci->Set($method, $result, $args);

//	Not document root path.
$args   = '/etc/';
$result = "Notice: This full path is not document root path: doc={$doc_root}, path={$args}";
$ci->Set($method, $result, $args);

//	Does not exists path.
$args   = '/foo/bar/hoge/';
$result = "Notice: This full path is not document root path: doc={$doc_root}, path={$args}";
$ci->Set($method, $result, $args);
