<?php

namespace spec;

use Movie;
use MovieCollection;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MovieCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MovieCollection::class);
    }

    public function it_stores_a_collection_of_movies(Movie $movie)
    {
        $this->add($movie);
        $this->shouldHaveCount(1);
    }

    public function it_can_accept_more_movies_atonce(Movie $movie1, Movie $movie2)
    {
        $this->add([$movie1, $movie2]);
    }

    public function it_can_mark_all_movie_as_watched(Movie $movie1, MOvie $movie2)
    {
        $this->add([$movie1, $movie2]);
        $this->markAllAsWatched();

        $movie1->watch()->shouldBeCalled();
        $movie2->watch()->shouldBeCalled();
    }
}
