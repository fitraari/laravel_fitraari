<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['hospital_id', 'nama', 'alamat', 'telepon'];
    protected $with = ['hospital'];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
