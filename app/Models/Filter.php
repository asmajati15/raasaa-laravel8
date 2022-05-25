<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function types()
    {
        return $this->hasMany(Type::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
