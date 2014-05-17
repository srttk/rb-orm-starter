<?php
include 'connection.php';

#Load Single row
/*$contact=R::load('contacts',4);
var_dump($contact);*/

#To load a series of beans use: *Failed Doc
/* $contact=R::loadAll('contacts');
var_dump($contact); */

##Finding
#FindingAll (If you do not know the ID of a bean, you can search for beans like this:)
/*$contact=R::findAll('contacts');
var_dump($contact);*/

#findOne
$contact=R::findOne('contacts');
var_dump($contact);

