<?php

namespace Modules\Management\Imports;

use Modules\Endproject\Entities\Defense;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Str;

class GFormImport implements ToCollection
{

    public function collection(Collection $rows)
    {
       
        foreach ($rows as $row) 
        {
                Defense::create([
                    'defense_id' => $row[0],
                    'submission_time' => $row[1],
                    'academic_program' => $row[2],
                    'student_number' => $row[3],
                    'name' => $row[4],
                    'title' => $row[5],
                    'first_supervisor' => $row[6],
                    'second_supervisor' => $row[7],
                    'first_examiner' => $row[8],
                    'second_examiner' => $row[9],
                    'third_examiner' => $row[10],
                    'approval_doc' => $row[11],
                    'thesis_doc' => $row[12],
                    'article_doc' => $row[13],
                ]);
            
        }
    }
}
