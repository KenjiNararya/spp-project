<?php

// app/Models/Bill.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'due_date',
        'description',
        'status',
    ];

    public function student()
    {
        return $this->belongsTo(User::class);
    }
}
