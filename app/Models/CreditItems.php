<?php

namespace App\Models;

use App\Uuids;
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

    /**
     * Credit items belong to a single quarter
     * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function quarter()
    {
        return $this->belongsTo(Quarter::class);
    }
}
