<?php
include '../rb.phar';

#Step 1 :Configure the redbean 

R::setup('mysql:host=localhost;dbname=test','root','');
//R::freeze( TRUE ); Stop chnageing
$contact=R::dispense('contacts');
$contact->name="Sarath";
$contact->email="sarath@in.com";

if(R::store($contact))
{
	echo "Contatc added success fully";
}

#Deleting 
//R::trash($contact);
$entry=R::load('contacts',200);
echo var_dump($entry);
