<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:17
 */
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');

$circle = new Circle('Circle 01', 3);

$cylinder = new Cylinder('Cylinder 01', 3, 4);

$rectangle = new Rectangle('Rectangle 01', 3, 4);

$square = new Square('Square 01', 4);

$arrayShape = [$circle, $rectangle, $square];

foreach ($arrayShape as $item) {
    echo $item->show() . ' area: ' . $item->calculateArea() . '<br />';
    echo $item->show() . ' perimeter: ' . $item->calculatePerimeter() . '<br />';
    if ($item instanceof Colorable){
        echo $item->howToColor();
    }
}
