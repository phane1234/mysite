<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '/vendor/autoload.php';


$app = new \Slim\App;
$app->post('/',function($request){
	echo"Welcome to books";
	require_once('dbconnect.php');
	$query="INSERT INTO `books` (`name`, `author`, `url`) VALUES (?,?,?)";
	$stmnt=	$mysql->prepare($query);
	$stmnt->bind_param("sss",$a,$b,$c); 
    $a=$request->getParsedBody()['bookname'];
	$b=$request->getParsedBody()['author'];
	$c=$request->getParsedBody()['url'];
	
	$stmnt->execute();
	if(!$stmnt)
	echo"Data are not entered";
    else
	echo"Data entered successfully";
	
});
$app->run();

?>