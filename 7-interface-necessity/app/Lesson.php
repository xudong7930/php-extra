<?php

namespace App;

use App\LaracastInterface;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model implements LaracastInterface
{
    protected $fillable = ['title', 'body'];

    public function getTitle()
    {
        return $this->title;
    }

    public function getBody()
    {
        return $this->body;
    }
}
