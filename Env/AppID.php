<?php

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
$result = 'Exception: AppID can no longer be assigned: hoge';
$args   = 'hoge';
$ci->Set($method, $result, $args);
