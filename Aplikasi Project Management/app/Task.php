<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    use SoftDeletes;
    protected $table = 'task';
    protected $fillable = [
        'assign_to','judul','deskripsi','tgl_mulai','tgl_akhir','progress'
       ];
    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo('App\User', 'assign_to');
    }
}
