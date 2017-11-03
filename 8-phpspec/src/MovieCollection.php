<?php

class MovieCollection implements Countable
{
    protected $collection;

    public function add($collect)
    {
        if (is_array($collect)) {
            return array_map([$this, "add"], $collect);
        }

        $this->collection[] = $collect;
    }

    public function hasCount($argument1)
    {
        
    }

    public function count()
    {
        return count($this->collection);
    }

    public function markAllAsWatched()
    {
        foreach ($this->collection as $collect) {
            $collect->watch();
        }
    }
}
