<?php
include_once 'Comparator.php';

class CircleComparator implements Comparator
{
    public function compare(object $circleOne, object $circleTwo)
    {

        if ($circleOne->getRadius() > $circleTwo->getRadius()) {
            return 1;
        } elseif ($circleOne->getRadius() < $circleTwo->getRadius()) {
            return -1;
        } else {
            return 0;
        }
        // TODO: Implement compare() method.
    }
}