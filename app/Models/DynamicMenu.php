<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DynamicMenu extends Model
{   
    public $table = 'dynamic_menus';
    public $timestamps = true;
 
    protected $fillable = [
        'icon',
        'title',
        'show_menu',
    ];
}
