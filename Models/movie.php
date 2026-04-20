<?php

class Movie
{
    public $title;
    public $relase_year;
    public $autor;
    public $seen;
    public $description;
    private array $genres = [];
    

    use HauseProductor;
    public function __construct($_title,$_relase_year, $_autor,  $_seen)
    {
        $this->title = $_title;
        $this->relase_year=$_relase_year;
        $this->autor = $_autor;

        $this->seen  = $_seen;

    }
    public function addGenre(Genre $genre): void{
        $this->genres[] = $genre;
    }
    public function getGenre(): array
    {
        return $this->genres;
    }
    public function getSeen()
    {
        if ($this->seen) {
            return 'Nei preferiti';
        }
    }
}
