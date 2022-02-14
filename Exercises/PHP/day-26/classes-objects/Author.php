<?php

// class name !
class Author
{
    // class properties.
    public $name = null;
    public $styles = null;
    public $country = null;
    public $image_url = null;




    //class contructor
    public function __construct()
    {
        
    }
    
    //class methods
    public function Display()
    {
        echo $this->Author_name;
        echo $this->Author_styles;
        echo $this->Author_country;
        echo $this->Author_image_url;


    }

}



// Author - declaration
// The page that you will be creating is meant to display information about a single author (a musician). It should show his name, picture, maybe a short biography and a list of his/her songs. It can also show his/her albums and have the songs categorized in them.

// Start by declaring a class Author. As all class declarations, it should go into a file of the same name: Author.php

// Use require_once to include the Author.php into index.php. Do it at the very top so that the class is available right from the start.

// Provide Author with all the properties and methods that you feel might be useful.

// class AudioPlayer
// {
//     public $song = null;
 
//     public function __construct() 
//     {
 
//     }
 
//     public function playSong()
//     {
 
//     }
// }