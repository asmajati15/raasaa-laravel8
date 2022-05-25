<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Menu extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    // protected $fillable = ['types_id', 'availabilities_id', 'nama', 'slug', 'deskripsi', 'gambar', 'harga', 'stok', 'hari' => 'array', 'mulai', 'sampai', 'created_at', 'updated_at'];

    public function types()
    {
        return $this->belongsTo(Type::class);
    }

    public function availabilities()
    {
        return $this->belongsTo(Availability::class);
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
