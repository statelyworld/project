<?php 
class StudentStaticMethod
{
	 
   	static $college = "ITS"; 	
	static	function change()
	{
		 $college = "BBDIT"; 
		 echo $college; 
	}

	
}

 StudentStaticMethod::change();



?>