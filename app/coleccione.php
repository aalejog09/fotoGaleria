<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\foto;
class coleccione extends Model
{
    //

    public function fotos(){

        return $this->hasMany(foto::class);
    }

    protected $fillable=["user_id","nombre","descripcion","fecha"];
    protected $table="colecciones";
}
