<?php 

class Movie{
    public $title;
    public $genre;
    public $actors;
    public $rating;

    public function __construct($_title, $_genre, $_actors, $_rating){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->actors = $_actors;
        $this->rating = $_rating;
    }
}


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP oop 1</title>
    </head>
    <body>
        
    </body>
</html>