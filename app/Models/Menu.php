<?php

namespace App\Models;



use Encore\Admin\Form\Field\HasMany;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';


    protected $fillable = [
        'parent_id',
        'menu',
        'menu_url',
        'status',
    ];

}
