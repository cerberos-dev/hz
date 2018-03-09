<?php

namespace App;

/**
 * Class Quarter
 * @package App
 * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
 */
class Quarter
{
    protected $year;
    protected $order;

    /**
     * Quarter constructor.
     * Year
     * Year @param $year
     * Order @param $order
     */
    public function __construct($year, $order)
    {
        $this->year = $year;
        $this->order = $order;
    }

    /**
     * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
     * @return mixed
     */
    public function year()
    {
        return $this->year;
    }

    /**
     * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
     * @return mixed
     */
    public function order()
    {
        return $this->order;
    }
}
