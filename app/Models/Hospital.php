<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function scopeSearch($query, $keywords)
    {
        $query->when(
            $keywords ?? false,
            fn () =>
            $query->where('nama', 'like', "%$keywords%")
        );
    }
}
