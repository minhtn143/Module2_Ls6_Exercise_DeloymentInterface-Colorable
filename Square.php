<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:16
 */
include_once ('Rectangle.php');
include_once ('Colorable.php');

class Square extends Rectangle implements Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }

    public function resize($percent)
    {
        $this->setWidth($percent*$this->getWidth());
    }

    public function getSize()
    {
        return $this->getWidth();
    }

    public function howToColor()
    {
        return 'Color all four sides.';
    }
}