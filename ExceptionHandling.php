<?php 

/**
 * 
 */
class DemoEx 
{
	
static function ex()
	{
		
		try
		{
			$a=5;
			$b=0;
			$c=$a/$b;
			echo $c;
		}
		catch(Exception $e)
		{
			echo "Exception Found";
		}
		
	}
}

DemoEx::ex();
 ?>