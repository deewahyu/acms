<?php

namespace Modules\Endproject\Entities;

use Illuminate\Database\Eloquent\Model;

class Defense extends Model
{
    
    protected $fillable = ['defense_id','submission_time','academic_program','student_number','name','title','first_supervisor','second_supervisor', 'first_examiner','second_examiner','third_examiner','approval_doc','thesis_doc','article_doc'];

    //protected $fillable = array('username', 'field_code', 'student_number', 'first_name', 'last_name');
    protected $table = 'endproject_defense';

    // DEFINE RELATIONSHIPS --------------------------------------------------
    public function endproject_proposal() {
        return $this->belongsTo('Student');
    }
}
