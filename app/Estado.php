<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\HasRelationships;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Estado extends Model
{
//   public function autorId(){
//   return $this->belongsTo(User::class);
// }
// public function autorIdList(){
//     return User::where('active', 1)->orderBy('created_at')->get();
// }
public function save(array $options = [])
{

    // If no author has been assigned, assign the current user's id as the author of the post
    if (!$this->author_id && Auth::user()) {
        $this->author_id = Auth::user()->id;

    }
    //solo permitira agregar solo un perfil por usuario a excepcion del Administrador


    parent::save();
}



}
