<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    
        use Hasfactory;

        //Allow mass assignment
        protected$fillable=[
            'task_name',
            'description',
            'status',
            'due_date'
        ];
    }

