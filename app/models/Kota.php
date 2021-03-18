<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
  

    protected $table = 'kota';
    protected $primaryKey = 'id'; 
    protected $fillable = ['id','propinsi_id','nama_kota'];

    public function prop()
    {
        return $this->belongsTo('App\Models\Propinsi','propinsi_id');
    }
    public function getPropinsi()
    {
    return $this->belongsTo('App\models\Propinsi','id_propinsi');
    }

}
