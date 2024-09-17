<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TableBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'meal',
        'comment',
        'dish_id',
        'tableNumber',
    ];

    public function dish()
    {
        return $this->belongsTo(Dish::class, 'dish_id');
    }
}
