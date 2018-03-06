<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Credititems
 * @package App
 * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
 */
class CreditItems extends Model
{
    use Uuids;

    /**
     * Indicates if the IDs are auto-incrementing.
     * @var bool
     */
    public $incrementing = false;
}
