<?php
require_once 'Author.php';
require_once 'DBBlackbox.php';

//prepare all data


$is_edit = !empty($_GET['id']);

if ($is_edit) {
    //select an author from the database
    //TODO
    $author = find($_GET['id'], 'Author');
} else{
    //prepare empty Author
    $author = new Author;
} 

// we definitely have a Author object!









// at the end 
include 'form.php';