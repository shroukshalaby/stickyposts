<?php

use \Illuminate\Database\Eloquent\Model as Model;

class sticky_compare extends Model
{

    protected $table = 'sticky_compare';

    public function provider()
    {

      return  $this->belongsTo(sticky_service_provider::class,'service_provider','id');
        
    }
}
