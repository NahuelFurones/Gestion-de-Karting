<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Karting extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'capacity',
        'price_per_hour',
        'open_time',
        'close_time',
        'is_active',
        'description'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'price_per_hour' => 'decimal:2'
    ];
}
