<?php

// app/Models/Notification.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'message',
        'date',
        'read_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
