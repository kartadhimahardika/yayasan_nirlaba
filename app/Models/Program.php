<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_program_id',
        'title',
        'slug',
        'photo',
        'description',
    ];

    public function categoryProgram()
    {
        return $this->belongsTo(CategoryProgram::class);
    }
}
