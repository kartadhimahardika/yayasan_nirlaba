<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'slug',
        'name',
        'phone',
        'email',
        'amount',
        'proof',
        'message',
        'status',
    ];

    const STATUS_PENDING = 'Tertunda';

    const STATUS_VERIFIED = 'Terverifikasi';

    const STATUS_REJECTED = 'Ditolak';

    // Ambil semua status (untuk dropdown)
    public static function getStatuses(): array
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_VERIFIED,
            self::STATUS_REJECTED,
        ];
    }

    public function scopeTerverifikasi($query)
    {
        return $query->where('status', self::STATUS_VERIFIED);
    }

    public function scopeTertunda($query)
    {
        return $query->where('status', self::STATUS_PENDING);
    }

    public function scopeDitolak($query)
    {
        return $query->where('status', self::STATUS_REJECTED);
    }

    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%'.$search.'%');
        });
    }
}
