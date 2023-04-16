<?php

class Movie {
    public string $title;
    public array $gener;
    public int $release_year;

    function __construct($title, $release_year, $gener = [])
    {
        $this->title = $title;

        foreach($gener as $value){
            if(!is_string($value) && count($gener) > 0){
                throw new InvalidArgumentException('The $gener parameter must be an array of strings');
            }
        }

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

$ghost = new Movie('Ghost', 1980, ['dramatic', 'thriller']);

$scream = new Movie('Scream', 1999, ['commedy']);

var_dump($ghost);
?>

<br>


<?php
var_dump($scream);
?>