<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $table = 'contact_form';


    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];

}
