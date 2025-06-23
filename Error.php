<?php
/**	op-core-ci:/Error.php
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
$ci = OP()->Unit()->CI()->Config();

//	...
foreach( glob(__DIR__.'/Error/*.php') as $path ){
	include($path);
}

//	...
return $ci->Get();
