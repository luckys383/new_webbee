<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = 'menu_items';

    public function firstLevelChildren()
    {
        return $this->hasMany(MenuItem::class, 'parent_id');
    }

    public function children()
    {
        return $this->firstLevelChildren()->with(['children']);
    }
}
