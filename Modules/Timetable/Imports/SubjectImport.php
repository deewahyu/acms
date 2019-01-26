<?php

namespace Modules\Timetable\Imports;

use Modules\Timetable\Entities\Subject;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class SubjectImport implements ToCollection
{
    private $temp;
    private $count;
    private $splitTeacherSum;
    public function collection(Collection $rows)
    {
       
        foreach ($rows as $row) 
        {
            

                

                Subject::create([
                    
                    'curriculum_year' => $row[0],
                    'study_field' => $row[1],
                    'subject_code' => $row[2],
                    'subject_desc' => $row[3],
                    'credit' => $row[4],
                    'semester' => $row[5],
                    //'category' => $row[6],
                    //'concern' => $row[7],
                ]);
            
        }
    }
}
