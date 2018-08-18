<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Perfile extends Model
{
  public function save(array $options = [])
  {

      // If no author has been assigned, assign the current user's id as the author of the post
      if (!$this->author_id && Auth::user()) {
          $this->author_id = Auth::user()->id;

      }
      //solo permitira agregar solo un perfil por usuario a excepcion del Administrador


      parent::save();
  }
  // protected $table = 'Perfiles';
}
