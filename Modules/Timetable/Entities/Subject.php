<?php

namespace Modules\Timetable\Entities;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['curriculum_year', 'study_field', 'subject_code','subject_desc','credit','semester', 'category', 'concern'];

    //protected $fillable = array('username', 'field_code', 'student_number', 'first_name', 'last_name');
    protected $table = 'timetable_subject';

    // DEFINE RELATIONSHIPS --------------------------------------------------
    public function timetable_subject() {
        return $this->belongsTo('Timetable');
    }
}
