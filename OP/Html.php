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
$method = 'Html';

//	...
$args   = 'test';
$result = '<div>test</div>'.PHP_EOL;
$ci->Set($method, $result, $args);

//	...
$args   = ['test','p'];
$result = '<p>test</p>'.PHP_EOL;
$ci->Set($method, $result, $args);

//	...
$args   = ['test','.class'];
$result = "<div class='class'>test</div>".PHP_EOL;
$ci->Set($method, $result, $args);

//	...
$args   = ['test','.a .b'];
$result = "<div class='a b'>test</div>".PHP_EOL;
$ci->Set($method, $result, $args);

//	...
$args   = ['test','p.class'];
$result = "<p class='class'>test</p>".PHP_EOL;
$ci->Set($method, $result, $args);

//	...
$args   = ['test','#id'];
$result = "<div id='id'>test</div>".PHP_EOL;
$ci->Set($method, $result, $args);

//	...
$args   = ['test','p#id'];
$result = "<p id='id'>test</p>".PHP_EOL;
$ci->Set($method, $result, $args);

//	...
$args   = ['test','p#id.class'];
$result = "<p id='id' class='class'>test</p>".PHP_EOL;
$ci->Set($method, $result, $args);
