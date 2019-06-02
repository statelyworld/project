<?php 
class Organisation {
	static  $name="harpreet";
	static function  getStrength() {
	$strength="MyStrength";
	return $strength;
	} 
}
// $org=new Organisation();
// echo $org->getStrength();

echo Organisation::getStrength();
echo Organisation::$name;
 ?>