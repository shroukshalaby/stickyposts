<?php

use \Illuminate\Database\Eloquent\Model as Model;

class Post extends Model
{
    protected $connection = 'sticky_blog';
    protected $table = 'posts';


}
