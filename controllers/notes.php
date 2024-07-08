<?php
$config  = require "config.php";
$db = new Database($config['database']);

$header =   "Notes";

$query  =   'SELECT * FROM notes where user_id=9';

$notes   =   $db->query($query)->get();

include "views/notes.view.php";