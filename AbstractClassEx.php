<?php 

abstract class ExConstructor{
	abstract function b();
	public function c(){
		echo "Can be used as it is";
	}
}
class AbstractClassEx extends A
{
	function b()
	{
		echo "Defined function b<br/>";
	}
	function x()
	{
		echo "string";
	}
}

$ex=new AbstractClassEx();
$ex->x();
$ex->b();
$ex->c();




 ?>