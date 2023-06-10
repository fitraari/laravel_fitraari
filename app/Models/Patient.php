<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['hospital'];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
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
