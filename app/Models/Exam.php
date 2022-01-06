<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this-> belongsTo(Category::class);
    }
    public function questions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Question::class)->orderBy('created_at','DESC');
    }
}
