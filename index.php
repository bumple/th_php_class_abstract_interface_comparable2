<?php
include_once 'CircleComparator.php';
include_once 'Circle.php';

$circleOne = new Circle(3);
$circleTwo = new Circle(4);
$circleComparator = new CircleComparator();
echo $circleComparator->compare($circleOne,$circleTwo);