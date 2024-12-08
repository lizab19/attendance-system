<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // Specify the table associated with the model (optional if the table name matches the model name)
    protected $table = 'courses';

    // Specify the fields that are mass assignable
    protected $fillable = ['name', 'description', 'credits'];

    // Relationships, methods, and other model-specific code here...
}

