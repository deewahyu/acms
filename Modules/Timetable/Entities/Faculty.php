<?php

namespace Modules\Timetable\Entities;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = ['username', 'faculty_code','front_title','rear_title','first_name','last_name'];

    //protected $fillable = array('username', 'field_code', 'student_number', 'first_name', 'last_name');
    protected $table = 'timetable_faculty';

    // DEFINE RELATIONSHIPS --------------------------------------------------
    public function timetable_subject() {
        return $this->belongsTo('Timetable');
    }
}
