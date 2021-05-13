<?php

class Circle{
    public int $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return int
     */
    public function getRadius(): int
    {
        return $this->radius;
    }
}
