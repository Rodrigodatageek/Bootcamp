<?php

require_once 'Author.php';
require_once 'DBBlackbox.php';
// handle form's submission

$is_edit = !empty($_GET['id']);

if ($is_edit) {
    //select an author from the database
    //TODO
    $author = find($_GET['id'], 'Author');
} else{
    //prepare empty Author
    $author = new Author;
} 


// we definitelly have an Author object!
// var_dump($_POST['name']);
$author->name = $_POST['name'];
$author->country = $_POST['country'];







//save the Author

if ($is_edit) 
{
    update($autor->id,$author);

} else {
    $author->id = insert($author); 

}


header("Location: display-form.php?id=" . $author->id);





























// at the end
// redirect! (to display-form.php) 