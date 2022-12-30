<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    use HasFactory;

    public function subject(){
        return $this->belongsTo(subjectModel::class, 'subject_id', 'id');
    }
}
