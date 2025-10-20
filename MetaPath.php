<?php
/**	op-core-ci:/MetaPath.php
 *
 * @created    2022-10-12
 * @version    1.0
 * @package    op-core
 * @subpackage ci
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/**	Declare strict
 *
 */
declare(strict_types=1);

/**	namespace
 *
 */
namespace OP;

/* @var $ci \OP\UNIT\CI\CI_Config */
$ci = OP()->Unit()->CI()->Config();

//	Set - Not exists directory
$result = 'Exception: This directory not exists. (/foo/bar/)';
$args   = ['www', '/foo/bar/'];
$ci->Set('Set', $result, $args);

//	Set
$result = '/etc/';
$args   = ['etc', '//etc//'];
$ci->Set('Set', $result, $args);

//	Set - Duplicate entry
$result = 'Exception: This meta path already set. (etc, /etc/)';
$args   = ['etc', '/etc/'];
$ci->Set('Set', $result, $args);

//	Set - Not exists
$result = 'Exception: This directory not exists. (/hoge/)';
$args   = ['hoge', '/hoge/'];
$ci->Set('Set', $result, $args);

//	Set - Deny upper directory.
$result = 'Exception: Deny upper directory specify.';
$args   = ['upper', '../up'];
$ci->Set('Set', $result, $args);

//	Get
$result = '/etc/';
$args   = ['etc'];
$ci->Set('Get', $result, $args);

//	Get - Not registered.
$result =  false;
$args   = ['not'];
$ci->Set('Get', $result, $args);

//	List
$args   = [];
$result = RootPath();
$result['etc'] = '/etc/';
$ci->Set('List', $result, $args);

//	Encode
$args   = '/etc/';
$result = 'etc:/';
$ci->Set('Encode', $result, $args);

//	Encode - Not registered.
$args   = 'not:/';
$result = false;
$ci->Set('Encode', $result, $args);

//	Encode - Current directory
$method = 'Encode';
$args   = './README.md';
$result =  false;
$ci->Set($method, $result, $args);

//	Decode
$args   = 'etc://';
$result = '/etc/';
$ci->Set('Decode', $result, $args);

//	Decode - Current directory
$args   = './README.md';
$result = "Exception: Meta label not found. ({$args})";
$ci->Set('Decode', $result, $args);

//	Decode - Upper directory
$args   = '../index.php';
$result = 'Exception: Upper directory cannot be specified. (../index.php)';
$ci->Set('Decode', $result, $args);

//	Decode - Relative by current directory.
$args   = 'not_exist.php';
$result = "Exception: Meta label not found. ({$args})";
$ci->Set('Decode', $result, $args);

//	Decode - has query string
$args   = 'etc:/?foo=bar';
$result = '/etc/?foo=bar';
$ci->Set('Decode', $result, $args);

//	Decode - Does not exists --> Can convert does not exist file path.
$args   = 'etc:/foo/bar';
$result = '/etc/foo/bar';
$ci->Set('Decode', $result, $args);

//	URL
$doc    = rtrim(_ROOT_DOC_,'/');
$args   = 'etc:/';
$result = "Notice: This path is not the document root path. (doc={$doc}, full=/etc/)";
$ci->Set('URL', $result, $args);

//	...
return $ci->Get();
