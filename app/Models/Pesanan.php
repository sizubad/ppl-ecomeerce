<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = ['nomor_pesanan', 'user_id', 'pengiriman_id','total_pembayaran','jumlah','metode_pembayaran','status_pembayaran','status','nama_lengkap','email','no_hp','kode_pos','alamat'];
}
