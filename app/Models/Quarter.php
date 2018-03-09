<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Quarter
 * @package App
 * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
 */
class Quarter extends Model
{
    use Uuids;

    protected $fillable = [
        'year',
        'order'
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     * @var bool
     */
    public $incrementing = false;

    /**
     * Quarters can have many Credit Items
     * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function credit()
    {
        return $this->belongsToMany(CreditItems::class);
    }
}
