<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports';

    protected $fillable = [
        'ticket',
        'nama',
        'email',
        'program_studi',
        'angkatan',
        'no_hp',
        'status_pelapor',
        'pesan',
        'lampiran',
        'jenis_pelaporan',
        'status_pelacakan',
    ];
}
