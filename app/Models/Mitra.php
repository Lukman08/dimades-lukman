<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    protected $table = 'mitras';
    protected $primarykey = 'id';

<<<<<<< HEAD
    protected $filelable = [
        'name',
        'namaAdminPt',
=======
    protected $fillable = [
        'name',
        'namaAdminPt',
        'jk',
>>>>>>> 053c729 (kedua-fixed)
        'notelp',
        'email',
    ];
}
