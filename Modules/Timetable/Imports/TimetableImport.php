<?php

namespace Modules\Timetable\Imports;

use Modules\Timetable\Entities\Timetable;
use Modules\Timetable\Entities\Faculty;
use Modules\Timetable\Entities\Subject;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Str;

class TimetableImport implements ToCollection
{
    private $temp;
    private $allTeacher;
    private $individualTeacher;
    private $startOfActivity;
    private $temphour;
    private $splitTeacher;
    public function collection(Collection $rows)
    {
        $filters = [
            //'$subject_desc'    =>  'trim|escape|ucwords'
            
        ];
        foreach ($rows as $row) 
        {
            if ($row[0] != $this->temp){
                $this->temp = $row[0];
                $this->allTeacher ='';
                $this->individualTeacher='';
                $this->startOfActivity='';
                $this->temphour;
                $this->splitTeacher='';


                //split Subject data to obtain the code only
                $splitSubject = explode(' ', $row[4]);


                //format room
                if ($row[1] == "Monday"){
                    $day = 'Senin';
                } else if ($row[1] == "Tuesday"){
                    $day = 'Selasa';
                } else if ($row[1] == "Wednesday"){
                    $day = 'Rabu';
                } else if ($row[1] == "Thursday"){
                    $day = 'Kamis';
                } 
                
                //format room
                $room = explode(' ', $row[7]);

                //format time
                $hourSplit = explode('|', $row[2], 2);
                
                $startOfActivity = $hourSplit[0].':'.$hourSplit[1];
                
                if ( ($hourSplit[0] == "13") && ($hourSplit[1] == "50")){
                    $hourSplit[1] = 00;
                   // dd($hourSplit[1]);
                }
                //dd('here');
                /*foreach ($hourSplit as $hour){
                    $this->startOfActivity = $this->startOfActivity.$this->temphour.':'.$this->temphour;
                }*/
                
                $subject = Subject::wheresubject_code($splitSubject[0])->get();

                foreach ($subject as $subject){
                    $minuteOfActivity = (intval($hourSplit[0]) * 60) + ((intval($hourSplit[1])) + (intval($subject->credit) * 50 ));
                    $subject_desc = $subject->subject_desc;
                    if ($subject->study_field == "PTE"){
                        $academic_program = "S1 PTE";
                    } else if ($subject->study_field == "TE"){ 
                        $academic_program = "S1 TE";
                    }else if ($subject->study_field == "D3"){
                        $academic_program = "D3 TE";
                    }

                    $subject_credit = $subject->credit;
                } 
                $minute = $minuteOfActivity % 60;
                $hour = intdiv($minuteOfActivity,60);
                if ($minute < 10){
                    $minute = '0'.$minute;
                }

                if ($hour < 10){
                    $hour = '0'.$hour;
                }
                $endOfActivity = $hour.':'.$minute;
                
              
                //split and combine teacher data
                $splitTeacher = explode('+', $row[5]);
                $allTeacherCode ='';
                foreach ($splitTeacher as $teaching_team){
                    $teaching_team=explode('/',$teaching_team);
                    $faculty = Faculty::whereusername($teaching_team[0])->get();
                    foreach($faculty as $faculty){
                        $faculty_detail = $faculty->front_title.' '.$faculty->first_name.' '.$faculty->last_name.', '.$faculty->rear_title;
                        

                    }
                    $this->allTeacher = $this->allTeacher.$faculty_detail.'|';
                    $allTeacherCode = $allTeacherCode.$faculty->upi_code.'|';

                    
                    $this->individualTeacher = $this->individualTeacher.$teaching_team[0].' ';
                    //dd($this->allTeacher);
                } 



                //dd($this->allTeacher);
                    $this->splitTeacher = explode(' ', $this->individualTeacher);
                    foreach ($this->splitTeacher as $teacher){
                        

                        if ($teacher != null){
                            Timetable::create([
                                
                            'activity_number' => $row[0],
                            'day' => $day,
                            'hour' => $startOfActivity,
                            'end_hour' => $endOfActivity,
                            'student_sets' => $row[3],
                            'subject_code' => $splitSubject[0],
                            'subject_desc' => $subject_desc,
                            'subject_credit' => $subject_credit,
                            'teacher' => $teacher,
                            'teaching_team' => $this->allTeacher,
                            'teaching_team_code' => $allTeacherCode,
                            'activity_tags' => $row[6],
                            'room' => $room[0],
                            'academic_year' => '2018/2019-2',
                            'academic_program' => $academic_program,

                        ]);

                        
                    }
                    
                }

                //dd($this->allTeacher);
                

            }

            
            
        }
    }
}
