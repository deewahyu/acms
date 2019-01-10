<?php

namespace Modules\Endproject\Entities;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [];

    //protected $fillable = array('username', 'field_code', 'student_number', 'first_name', 'last_name');
    protected $table = 'endproject_student';

    // DEFINE RELATIONSHIPS --------------------------------------------------
    public function endproject_research() {
        return $this->hasMany('Research');
    }
}
