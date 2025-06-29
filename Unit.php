<?php
/**	op-core-ci:/Unit.php
 *
 * @created   2022-11-02
 * @version   1.0
 * @package   op-core
 * @author    Tomoaki Nagahara
 * @copyright Tomoaki Nagahara All right reserved.
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

//	...
require(__DIR__.'/Unit_Mapper.php');

//	Instantiate
$args   = 'Dump';
$result = 'OP\UNIT\Dump';
$ci->Set('Instantiate', $result, $args);

//	Instantiated
$args   = 'Dump';
$result = 'OP\UNIT\Dump';
$ci->Set('Instantiated', $result, $args);

//	Load
$args   = 'Dump';
$result =  true;
$ci->Set('Load', $result, $args);

//	Singleton
$args   = 'Dump';
$result = 'OP\UNIT\Dump';
$ci->Set('Singleton', $result, $args);

//	isInstall
$args   = 'Dump';
$result =  true;
$ci->Set('isInstall', $result, $args);

//	isInstall - fail
$args   = 'Failllll';
$result =  false;
$ci->Set('isInstall', $result, $args);

//	...
$method = 'isInstalled';
$args   = 'App';
$result =  true;
$ci->Set($method, $result, $args);

//	...
$method = 'isInstalled';
$args   = 'Core';
$result =  false;
$ci->Set($method, $result, $args);

//	_Map
$method = '_Map';
$args   = 'Dump';
$result = 'OP\UNIT\Dump';
$ci->Set($method, $result, $args);

//	Each unit
$unit = [
	'App',
	'Api',
	'Router',
	'Layout',
	'WebPack',
	'Form',
	'Validate',
	'Database',
	'ORM',
	'QQL',
];
foreach( $unit as $class ){
	$method = $class;
	$args   = $class;
	if( OP()->Unit()->isInstalled($class) ){
		$result = "OP\UNIT\\{$class}";
	}else{
		$result = "Exception: The `{$class}` unit is not installed.";
	}

	$ci->Set($method, $result, $args);
}

//	...
$method = 'Instantiated';
$args   = 'App';
$result = 'OP\UNIT\App';
$ci->Set($method, $result, $args);

//	...
return $ci->Get();
