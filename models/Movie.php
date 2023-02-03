<?php

    class Movie{
        public $title;
        public $category;
        public $description;
        public $rating;

        function __construct($_title, $_category, $_description, $_rating){
            $this-> title = $_title;
            $this-> category = $_category;
            $this-> description = $_description;
            $this-> rating = $_rating;
        }
        public function getTopFilm(){
            if($this->rating >= 4){
                return 'e\'\ un bel film';
            }else{
                return $this->rating;
            }
        }
    }

?>