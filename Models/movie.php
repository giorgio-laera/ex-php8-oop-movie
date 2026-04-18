<?php

class Movie {
    public $title;
    public $autor;
    public $seen;
    public $genre;

    function __construct($_title, $_autor, $_seen , Genre $_genre){
        $this->title=$_title;
        $this->autor=$_autor;
        $this->seen=$_seen;
        $this-> genre=$_genre;
    }

    public function getSeen(){
        if ($this->seen){
            return 'gia visto';
        }else{
            return 'da vedere';
        }
    }
}