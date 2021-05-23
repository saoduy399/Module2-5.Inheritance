<?php

    include_once "Shape01.php";
    include_once "Triangle.php";
    include_once "Square.php";
    include_once "Calculate.php";

    $triangle1 = new Triangle(5,4,3);
    $areaoftriangle = $triangle1->getArea();
    $perimeteroftriangle = $triangle1->getPerimeter();

    $square1 = new Square(5);
    $areaofsquare = $square1->getArea();
    $perimeterofsquare = $square1->getPerimeter();
    $volume = $square1->getvolume();

    echo "<h2>The triangle</h2>";
    echo "the are of the triangle is: $areaoftriangle";
    echo "<br>";
    echo "The perimeter of triangle is: $perimeteroftriangle";

    echo "<h2>The Square</h2>";
    echo "The area of square is: $areaofsquare";
    echo "<br>";
    echo "The perimeter of square is: $perimeterofsquare";
    echo "<br>";
    echo "The volume of square is: $volume";

