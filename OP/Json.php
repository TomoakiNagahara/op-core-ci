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
$method = 'Json';

//	...
$json = [
	'string' => 'test',
	'array'  => [
		'apple',
		'google',
	],
	'object' => [
		'apple'  => 'macOS',
		'google' => 'Android',
	],
];

//	...
$json   = json_encode($json);
$args   = [$json,'class'];
$result = '<div class=\'class\'>"{\"string\":\"test\",\"array\":[\"apple\",\"google\"],\"object\":{\"apple\":\"macOS\",\"google\":\"Android\"}}"</div>'.PHP_EOL;
$ci->Set($method, $result, $args);
