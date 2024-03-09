<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maths extends Model
{
    use HasFactory;

    protected $table = 'maths';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'student_no',
        'subject',
        'group_work',
        'test1',
        'project_work',
        'test2',
        'raw_exams_score',
        'class_total',
        'SBA',
        'Exams',
        'Total_Score',
        'position_in_class',
        'deleted'
    ];
}
