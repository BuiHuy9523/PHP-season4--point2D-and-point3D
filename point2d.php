<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2019-01-25
 * Time: 16:16
 */

class point2d
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function setx($x)
    {
        $this->x = $x;
    }

    function getx()
    {
        return $this->x;
    }

    function sety($y)
    {
        $this->y = $y;
    }

    function gety()
    {
        return $this->y;
    }

    public function setxy($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getxy()
    {
        $arr[]=$this->x;
        $arr[]=$this->y;
        return json_encode($arr) ;
    }
    public function __toString()
    {
        return $this->getxy();
    }
}
?>