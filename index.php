<?php
$settings = simplexml_load_file("./settings.xml");


try
{
	
}
catch (Exception $e)
{
 	throw new Exception( 'Something really gone wrong', 0, $e);
}