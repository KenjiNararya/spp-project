<?php

// app/Models/Transaction.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'pembayaran_id',
        'transaction_date',
        'transaction_amount',
        'transaction_status',
    ];

    public function payment()
    {
        return $this->belongsTo(Pembayaran::class);
    }
}
