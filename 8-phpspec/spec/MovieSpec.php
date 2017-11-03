<?php

namespace spec;

use Movie;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MovieSpec extends ObjectBehavior
{
    public function let()
    {
        // 调用构造函数
        $this->beConstructedWith('rick and morty');
        $this->shouldBeAnInstanceOf('Movie');
        $this->shouldHaveType(Movie::class);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Movie::class);
    }

    public function it_can_be_rated()
    {
        $this->setRating(5);
        $this->getRating()->shouldBe(5);
    }

    public function its_rating_should_not_exceed_five()
    {
        $this->shouldThrow('Exception')->duringSetRating(8);
    }

    public function it_can_be_mark_with_watched()
    {
        $this->watch();
        $this->shouldBeWatched();
    }

    public function it_can_fetch_movie_title()
    {
        $this->getTitle()->shouldBe('rick and morty');
    }
}
