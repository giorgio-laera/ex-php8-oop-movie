<?php 
// class Genre {
//     public $genre;

//     function __construct ($_genre){
//         $this ->genre = $_genre;
//     }
// }
class Genre {
    public function __construct(public string $name) {}
}