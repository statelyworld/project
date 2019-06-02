<?php 

class ExConstructor
{
	var $b=5;//instance variable
	
	function __construct($name)
	{
		echo $name;
	}

}

$harpreet=new ExConstructor("Harpreet");
$gaurav=new ExConstructor("Gaurav");
echo $gaurav->b;

?>



