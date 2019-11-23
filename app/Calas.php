<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calas extends Model
{
    protected $table='calas';
    protected $fillable = ['npm', 'nama', 'kelas','jurusan','fakultas','alamat','nomor_telepon','krs','avatar','user_id','status_kelulusan'];

    
}
