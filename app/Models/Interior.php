<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Interior extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false; 

    protected $fillable = [
        'name',
        'category_id',
        'type',
        'description',
        'price',
        'image'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = (string) Str::uuid();
            }
        });
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
