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

    public function getData(){
        $movieInfo = "film: " . $this->title . " --- genere: " . $this->genre . " --- attore principale: " . $this->actors . " --- voto: " . $this->rating;

        return $movieInfo;
    }
}

$Prisoners = new Movie("Prisoners", "Thriller", "Jake Gyllenhaal", "4,2/5");
$Oldboy = new Movie("Old Boy", "Noir", "Choi Min-sik", "4,3/5");

echo($Prisoners -> getData());
echo($Oldboy->getData());
?>