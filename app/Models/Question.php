<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class Question extends Model
{

    public function category()
    {
      return $this->belongsTo(Category::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function scopeApproved(Builder $query)
    {
        return $query->where('state', 'APPROVED');
    }

    public function scopePending(Builder $query)
    {
        return $query->where('state', 'PENDING');
    }
}
