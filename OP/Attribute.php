<?php
/**	op-core-ci:/OP/Attribute.php
 *
 * @created    2025-07-04
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
$method = 'Attribute';

//	...
$args   = null;
$result = [];
$ci->Set($method, $result, $args);

//	...
$args   = 'span';
$result = [
	'tag' => 'span',
];
$ci->Set($method, $result, $args);

//	ID
$args   = '#hoge';
$result = [
	'id' => 'hoge',
];
$ci->Set($method, $result, $args);

//	Class
$args   = '.hoge';
$result = [
	'class' => 'hoge',
];
$ci->Set($method, $result, $args);

//	Class twice
$args   = '.foo.bar';
$result = [
	'class' => 'foo bar',
];
$ci->Set($method, $result, $args);

//	Tag and class
$args   = 'div.foo';
$result = [
	'tag'   => 'div',
	'class' => 'foo',
];
$ci->Set($method, $result, $args);

//	Tag and class
$args   = 'p.bar';
$result = [
	'tag'   => 'p',
	'class' => 'bar',
];
$ci->Set($method, $result, $args);

//	A tag href attribute
$args   = 'a?hoge';
$result = [
	'tag'  => 'a',
	'href' => '?hoge',
];
$ci->Set($method, $result, $args);
