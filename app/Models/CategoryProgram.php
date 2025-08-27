<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function programs()
    {
        return $this->hasMany(Program::class, 'category_program_id');
    }
}
