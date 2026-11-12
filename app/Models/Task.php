<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'task_title',
        'task_description',
        'assigned_person',
        'department',
        'category',
        'priority_level',
        'date_assigned',
        'start_date',
        'due_date',
        'status',
        'remarks',
    ];
}