<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'hrjobs';
    protected $fillable = [
        'job_title',
        'min_salary',
        'max_salary'
    ];
    public function employees()
    {
        return $this->hasMany(Employee::class, 'job_id');
    }
}
