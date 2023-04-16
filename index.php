<?php

class Movie {
    public $title;
    public $gener;
    public $release_year;

    function __construct($title, $release_year, $gener = '')
    {
        $this->title = $title;
        $this->gener = $gener;
        $this->release_year = $release_year;
    }

    public function get_title(){
        return $this->title;
    }

    public function update_release($new_year){
        $this->release_year = $new_year;
    }

}

$ghost = new Movie('Ghost', 1980, 'dramatic');

$scream = new Movie('Scream', 1999, 'commedy');

var_dump($ghost);
?>

<br>


<?php
var_dump($scream);
?>