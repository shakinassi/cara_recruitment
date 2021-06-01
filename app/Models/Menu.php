<?php

namespace App\Models;

// namespace App\Menu;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $fillable = [
        'id', 'parent_id','menu_name', 'icon_name', 'status', 'route'
        ];

    public function submenu()   
    {
        return $this->hasMany('App\Models\SubMenu');
    }

}

