<?php

class Movie {
    public $title;
    public $autor;
    public $seen;
    private array $genres = [];

    function __construct($_title, $_autor, $_seen ){
        $this->title=$_title;
        $this->autor=$_autor;
        $this->seen=$_seen;
        
    }
    public function addGenre (Genre $genre): void{
         $this->genres[] = $genre;
    }
    public function getGenre(): array{
        return $this->genres;
    }
    public function getSeen(){
        if ($this->seen){
            return 'nei preferiti';
        }
    }
}