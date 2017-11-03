<?php

namespace App;

use App\LaracastInterface;
use Illuminate\Database\Eloquent\Model;

class Epsido extends Model implements LaracastInterface
{
    protected $fillable = ['title', 'epcert'];

    public function getTitle()
    {
        return $this->title;
    }

    public function getBody()
    {
        return $this->epcert;
    }
}
