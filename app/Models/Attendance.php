<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    // Specify the table associated with the model (optional if the table name matches the model name)
    protected $table = 'attendances';

    // Specify the fields that are mass assignable
    protected $fillable = ['student_id', 'course_id', 'date', 'status'];

    // Relationships, methods, and other model-specific code here...
}
