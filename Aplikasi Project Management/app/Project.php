<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    use SoftDeletes;
    protected $table = 'project';
    protected $fillable = [
        'nama_instansi','nama_project','tgl_mulai','tgl_akhir','status_project'
       ];
    protected $dates = ['deleted_at'];
}
