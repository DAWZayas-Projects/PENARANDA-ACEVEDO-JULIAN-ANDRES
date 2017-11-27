<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function questions()
    {
        return $this->hasMany(Question::class)->approved();
    }

   public function addQuestion($category_id, $text)
   {
      $this->questions()->create(compact('category_id', 'text'));
   }
}
