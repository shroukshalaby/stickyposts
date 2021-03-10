<?php

use \Illuminate\Database\Eloquent\Model as Model;

class Package extends Model
{
    protected $table = 'sp_package_manager';
    public $timestamps=false;
    protected $fillable =
        [
            'ids',
            'name',
            'description',
            'type',
            'price_monthly',
            'price_annually',
            'number_accounts',
            'trial_day',
            'popular',
            'position',
            'permissions',
            'data',
            'status',
            'slug',
            'changed',
            'created',
        ];


}
