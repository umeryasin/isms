<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\School;

class StudentType extends Model
{
    use HasFactory;
    protected $table = "student_types";
    protected $fillable = [
        'school_id',
        'name',
        'note',
        'status',
    ];
    public function schoolInfo()
    {
        return $this->belongsTo(School::class, "school_id", "id");
    }
}
