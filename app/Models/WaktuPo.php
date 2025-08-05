<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaktuPo extends Model
{
    protected $fillable = [
        'nama_po',
        'open_po',
        'close_po',
    ];
}
