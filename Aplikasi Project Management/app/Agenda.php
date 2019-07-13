<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    //
    use SoftDeletes;

    protected $table = 'agenda';
    protected $fillable = [
        'judul','deskripsi','tanggal','jam_mulai','jam_selesai','peserta','lokasi'
       ];
    protected $dates = ['deleted_at'];

       
}
