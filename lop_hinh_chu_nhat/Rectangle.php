<?php


class Rectangle
{
public int $width;
public int $height;

    /**
     * Rectangle constructor.
     * @param int $width
     * @param int $height
     */
    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getArea(): int
    {
        return $this->width*$this->height;
    }

    /**
     * @return int
     */
    public function getPerimeter(): int
    {
        return ($this->width+$this->height)*2;
    }
    public function display():string{
        return "Rectangle{"."width".$this->width.", height=".$this->height."}";
    }


}
?>