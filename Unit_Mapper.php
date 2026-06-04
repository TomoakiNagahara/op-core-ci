<?php
/**	op-core-ci:/Unit_Mapper.php
 *
 * @created    2024-06-30
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

/* @var $ci UNIT\CI\CI_Config */

//	...
$method = '_Map';
$args   = 'App';
$result = 'OP\UNIT\App';
$ci->Set($method, $result, $args);

//	...
$method = 'Mapping';
$args   = 'App';
$result = 'App';
$ci->Set($method, $result, $args);

//	...
$_unit_config = Config::Get('unit');

//	...
$units = [
	'Html'     => null,
	'Bitcoin'  => null,
	'App'      => null,
	'Api'      => null,
	'Router'   => null,
	'Layout'   => null,
	'WebPack'  => '',
	'Form'     => null,
	'Validate' => null,
	'Database' => null,
	'ORM'      => null,
	'QQL'      => null,
	'Dump'     => null,
	'Notice'   => null,
	'CD'       => [],
	'Git'      => null,
	'Shell'    => '',
	'SQL'      => null,
	'Login'    => null,
];

//	...
foreach( $units as $unit => $args ){
	//	...
	$method = $unit;
	$args   = $args;

	//	Re:map
		$name = strtolower($unit);
	if( $name = $_unit_config['mapping'][$name] ?? null ){
		$instance = Unit::Instantiate($name);
		$result   = get_class($instance);
	}else

	//	...
	if( Unit::isInstalled($unit) ){
		$result = "OP\UNIT\\{$unit}";
	}else{
		$name   = strtolower($unit);
		$path   = OP()->Path("asset:/unit/{$name}/index.php");
		$result = "Exception: The `index.php` file does not exists: {$path}";
	}

	//	...
	$ci->Set($method, $result, $args);
}
