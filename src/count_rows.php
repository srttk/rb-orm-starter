<?php
require 'connection.php';

$num_rows=R::count('contacts');
echo $num_rows;