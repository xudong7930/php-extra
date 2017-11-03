<?php

class Movie
{
    protected $rating;
    protected $watched = false;
    protected $title;

    public function __construct ($title = '')
    {
        $this->title = $title;
    }

    public function watch()
    {
        $this->watched = true;
    }

    public function setRating($rating)
    {
        $this->validateRatingRange($rating);
        $this->rating = $rating;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function validateRatingRange($rating)
    {
        if ($rating > 5) {
            throw new Exception;
        }
    }

    public function isWatched()
    {
        return $this->watched;
    }

    public function getTitle()
    {
        return $this->title;
    }
    
}
