<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2019-01-25
 * Time: 16:30
 */


include_once ('point2d.php');
class point3d extends point2d
{
    public $z;
    public function __construct($x,$y,$z)
    {
        parent::__construct($x, $y);
        $this->z=$z;
    }
    function setxyz($x,$y,$z)
    {
        parent::setxy($x,$y);
        $this->z=$z;
    }
    function getxyz()
    {
//        parent::getxy();
        $arr[]=$this->x;
        $arr[]=$this->y;
        $arr[]=$this->z;
        return json_encode($arr);
    }
    public function __toString()
    {
        return $this->getxyz();
    }

}
?>