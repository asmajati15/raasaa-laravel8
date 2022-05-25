<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Type extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function slides()
    {
        return $this->hasMany(Slide::class);
    }

    public function filters()
    {
        return $this->belongsTo(Filter::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
}
