<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function exams(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Exam::class)->orderBy('created_at','DESC');
    }
}
