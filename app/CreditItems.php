<?php

namespace App;

/**
 * Class CreditItems
 * @package App
 * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
 */
class CreditItems
{
    protected $abbrev;
    protected $name;
    protected $credits;
    protected $type;
    protected $status;

    /**
     * CreditItems constructor.
     * Abbrev
     *
     * Abbrev @param $abbrev
     * Name @param $name
     * Credits @param $credits
     * Type @param $type
     * Status @param $status
     */
    public function __construct($abbrev, $name, $credits, $type, $status)
    {
        $this->abbrev = $abbrev;
        $this->name = $name;
        $this->credits = $credits;
        $this->type = $type;
        $this->status = $status;
    }

    /**
     * Returns the Abbreviation tied to the credit item.
     * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
     * @return mixed
     */
    public function abbrev()
    {
        return $this->abbrev;
    }

    /**
     * Returns the name of a credit item.
     * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
     * @return mixed
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * Returns the credits of a credit item
     * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
     * @return mixed
     */
    public function credits()
    {
        return $this->credits;
    }

    /**
     * Returns the type of a credit item
     * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
     * @return mixed
     */
    public function type()
    {
        return $this->type;
    }

    /**
     * Returns the status of a credit item
     * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
     * @return mixed
     */
    public function status()
    {
        return $this->status;
    }
}