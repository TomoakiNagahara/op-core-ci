<?php
/**	op-core-ci:/OP/ParseURL.php
 *
 * @created    2024-06-18
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

//	ParseURL - Full
$args   = 'https://username:password@localhost/foo/bar/index.html?foo=bar';
$result = [
	'scheme' => 'https',
	'host'   => 'localhost',
	'port'   =>  null,
	'path'   => '/foo/bar/index.html',
	'dir'    => '/foo/bar/',
	'file'   => 'index.html',
	'ext'    => 'html',
	'query'  => '?foo=bar',
	'user'   => 'username',
	'pass'   => 'password',
];
$ci->Set('ParseURL', $result, $args);

//	ParseURL - Empty file name
$args   = 'https://localhost/foo/bar?foo=bar';
$result = [
	'scheme' => 'https',
	'host'   => 'localhost',
	'port'   =>  null,
	'path'   => '/foo/bar',
	'dir'    =>  null,
	'file'   =>  null,
	'ext'    =>  null,
	'query'  => '?foo=bar',
];
$ci->Set('ParseURL', $result, $args);

//	ParseURL - Scheme less
$args   = '//localhost/index.html';
$result = [
	'scheme' =>  null,
	'host'   => 'localhost',
	'port'   =>  null,
	'path'   => '/index.html',
	'dir'    => '/',
	'file'   => 'index.html',
	'ext'    => 'html',
	'query'  =>  null,
];
$ci->Set('ParseURL', $result, $args);

//	ParseURL - Empty scheme
$args   = 'localhost/index.html';
$result = [
	'scheme' =>  null,
	'host'   => 'localhost',
	'port'   =>  null,
	'path'   => '/index.html',
	'dir'    => '/',
	'file'   => 'index.html',
	'ext'    => 'html',
	'query'  =>  null,
];
$ci->Set('ParseURL', $result, $args);

//	ParseURL - Empty domain name
$args   = '/foo/bar?foo=bar';
$result = [
	'scheme' =>  null,
	'host'   =>  null,
	'port'   =>  null,
	'path'   => '/foo/bar',
	'dir'    =>  null,
	'file'   =>  null,
	'ext'    =>  null,
	'query'  => '?foo=bar',
];
$ci->Set('ParseURL', $result, $args);
