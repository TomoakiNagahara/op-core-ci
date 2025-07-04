<?php
/**	op-core-ci:/OP/Content.php
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
$method = 'Content';

//	...
$args   = null;
$result = null;
$ci->Set($method, $result, $args);

//	...
$args    = null;
$result  = 'This is CI test string.';
$fixture = function(){
	echo "This is CI test string.";
};
$ci->Set($method, $result, $args, $fixture);
