<?php
/**	op-core-ci:/Env/AppID.php
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

/* @var $ci UNIT\CI\CI_Config */

//	...
$method = 'AppID';

//	Positive: Get AppID
$result = 'CI';
$args   =  null;
$ci->Set($method, $result, $args);

//	Negative: Overwrite AppID
if( _OP_APP_BRANCH_ < 2030 ){
	$result = 'Exception: AppID is already set. (CI)';
}else{
	$result = 'Exception: AppID can no longer be assigned: hoge';
}
$args   = 'hoge';
$ci->Set($method, $result, $args);
