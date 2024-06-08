<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiService extends Model
{
    use HasFactory;
    protected $guarded = [];

    // 
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    // 
    public function getAll()
    {
        return self::orderBy('id')->active()->get();
    }
}
