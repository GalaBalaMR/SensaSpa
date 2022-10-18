<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Content extends Model
{
    use HasFactory;

    protected $fillable = ['name','content'];

    public static function boot()
    {
        parent::boot();

        // After updating content delete cache
        static::updating(function(Content $content){
            Cache::forget('contents');
        });
    }
}
