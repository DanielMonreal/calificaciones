<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['name', 'type', 'score', 'date', 'subject_id'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
