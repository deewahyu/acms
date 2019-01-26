<?php

namespace Modules\Timetable\Entities;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $fillable = ['academic_year','academic_program','activity_number', 'hour', 'end_hour','day', 'student_sets', 'subject_code','subject_desc', 'subject_credit','teacher', 'teaching_team','teaching_team_code','activity_tags', 'room'];

    //protected $fillable = array('username', 'field_code', 'student_number', 'first_name', 'last_name');
    protected $table = 'timetable_timetable';

    // DEFINE RELATIONSHIPS --------------------------------------------------
    public function endproject_research() {
        return $this->hasMany('Subject');
    }
}
