<?php
require 'rb.phar';

//Connecting
R::setup('mysql:host=localhost;dbname=test','root',''); //mysql

//Creating beans
/*$b = R::dispense('book');
	//We can now add properties:
	$b->title = 'Learn RedBean';
    $b->rating = 10;
    $b['price'] = 19.99; //you can use array notation as well
  R::store($b);*/
 
//At this point, the bean will be stored in the database and all tables and columns have been created. The bean will now have an ID, which is also returned for your convenience.

//Loading beans

  /*$b=R::load('book',1);

  //var_dump($b);
  echo $b->title;*/

// Loading a Series of bean
  /*$b=R::loadAll('books',[1,4]);
  var_dump($b);*/

//Loading 
$b=R::findAll('book');
// var_dump($b);
foreach($b as $book){
	echo '<p><h3>'.$book->title.'</h3>'.$book->price.'</p>';
}