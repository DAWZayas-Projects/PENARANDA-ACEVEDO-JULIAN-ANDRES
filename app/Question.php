<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
   public function isAccepted() {
      return false;
   }
   public function isPending() {
      return static::where('state', 'pending')->get();
   }
}
