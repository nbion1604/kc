<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';
    protected $fillable = ['id','nama', 'lokasi', 'tgl_lahir', 'no_telpon', 'kelamin_id'];
    protected $guarder = ['id', 'created_at', 'updated_at'];

    public function kelamins(){
        return $this->belongsTo('App\Kelamin','kelamin_id','id');
    }

    // public function users(){
    //     return $this->belongsTo('App\User','user_id','id');
    // }

    public function gejala() {
    	return $this->belongsToMany('App\Gejala', 'tmp_gejala');
    }

    public function diagnosa() {
    	return $this->hasMany('App\Diagnosa');
    }

    public function attachGejala($gejala_id) {
        $gejala = Gejala::find($gejala_id);
        return $this->gejala()->attach($gejala);
    }

    public function detachGejala($gejala_id) {
        $gejala = Gejala::find($gejala_id);
        return $this->gejala()->detach($gejala);
    }
}
