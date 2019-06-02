<?php 
/**
 * 
 */
class PersonEncapsulation 
{
	public $name;
	public $age;

	
	function __construct($n, $a)
	{
		$this->name=$n;
		$this->age=$a;
	}

	function setAge($ag)
	{
		$this->ag=$ag;
	}

	public function display()
	{
		echo  "welcome ".$this->name."<br/>";
	}

}


 ?>