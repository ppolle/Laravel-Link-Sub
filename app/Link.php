<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Conner\Tagging\Taggable;

class Link extends Model
{
    use Taggable;

    protected $table = 'links';
    protected $fillable = [
    	'title',
    	'url',
    	'description'
    ];

}
