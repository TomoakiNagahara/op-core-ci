<?php
/**	op-core-ci:/OP/Encrypt.php
 *
 * @created    2025-11-19
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
$method = 'Decrypt';

//	string
$args   = 'NSHclwfE2ra8/MGEkSPpBQ==';
$result = 'test';
$ci->Set($method, $result, $args);

//	array
$args   = '7zTVlwkodllT1p4bERS/A4fKIAvDiPiLqDbtndlTeSuVb3COzbWXIbffBuF7w86U';
$result = ['test', true, false];
$ci->Set($method, $result, $args);
