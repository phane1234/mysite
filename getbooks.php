<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '/vendor/autoload.php';


$app = new \Slim\App;
$app->get('/',function($request,$response){
 echo"welcome to books";
 require_once('dbconnect.php');
$query="select *from books order by name";
$result=$mysql->query($query);
while($row=$result->fetch_assoc())
{
   $data[]=$row; 
}
if(isset($data)){
echo json_encode($data);}
}); 
$app->run();
