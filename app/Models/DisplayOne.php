<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DisplayOne extends Model
{
    protected $table = 'display_one';


    protected $fillable = [
        'title',
        'description',
        'link_title',
        'link_url',
        'image',
        'display',
        'icon'
    ];

}
