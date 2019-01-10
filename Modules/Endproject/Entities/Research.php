<?php

namespace Modules\Endproject\Entities;

use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    protected $fillable = [];

    //protected $fillable = array('username', 'field_code', 'student_number', 'first_name', 'last_name');
    protected $table = 'endproject_research';

    // DEFINE RELATIONSHIPS --------------------------------------------------
    public function endproject_proposal() {
        return $this->belongsTo('Student');
    }
}
