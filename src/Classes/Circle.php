<?php

namespace src\Classes;

class Circle
{
    /**
     * $radius
     *
     * @var float
     */
    public float $radius;

    /**
     * __construct
     *
     * @param float $radius
     */
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    /**
     * getArea
     *
     * @return float
     */
    public function getArea(): float
    {
        return M_PI * pow($this->radius, 2);
    }

    /**
     * getPerimeter
     *
     * @return float
     */
    public function getPerimeter(): float
    {
        return 2 * M_PI * $this->radius;
    }
}
