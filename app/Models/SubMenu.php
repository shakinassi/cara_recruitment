<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SubMenu extends Model
{
    protected $table = 'sub_menu';
    protected $fillable = [
        'id', 'child_id','submenu_name', 'icon_name', 'status', 'route'
        ];


    public function menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }
}
