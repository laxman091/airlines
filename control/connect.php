<?php
$con = mysql_connect('localhost' , 'root' , 'mysql');
$db = mysql_select_db('airlines');

if(!$con)
{
echo "could not connected " . mysql_error();
}