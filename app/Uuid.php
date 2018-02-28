<?php

namespace App;

use Webpatser\Uuid\Uuid;

trait Uuids
{

    /**
     * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
     *  Trait that fixes UUID generation
     * @return UUID;
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }
}
