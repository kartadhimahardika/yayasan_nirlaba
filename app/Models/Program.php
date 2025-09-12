<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
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

    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%');
        });

        $query->when($filters['categoryProgram'] ?? false, function ($query, $category) {
            return $query->whereHas(
                'categoryProgram',
                fn(Builder $query) =>
                $query->where('slug', $category)
            );
        });
    }
}
