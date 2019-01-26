<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice - #123</title>

    <style type="text/css">

#tablejadwal {
  font-family: "Times New Roman", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin: 15px 25px 10px 25px;
}

hr {
    display: block;
    height: 2px;
    border: 0;
    border-top: 1px solid #444;
    margin: 1em 0;
    padding: 0px 25px 0px 25px;
}

#kop {
  width: 100%;
  margin: 10px 25px 0px 25px;
  font-size: 20px;
  vertical-align: top;
}


#tablejadwal td, #tablejadwal th {
  border: 1px solid #666;
  padding: 4px;
  vertical-align: top;
}

#bodysurat {
  font-family: "Times New Roman", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin: 4px 25px 10px 25px;
  font-size: 13px;
}

#tablejadwal th {
  padding-top: 5px;
  padding-bottom: 5px;
  text-align: left;
  background-color: #ddd;
  color: #000;
}

        .page-break {
            page-break-after: always;
        }
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: times;
        }
      
        table {
            font-size: small;
            border-collapse: collapse;
        }

        h2 {
            margin: 0;
            font-size: 15px;
        }
        h5 {
            margin: 0;
            font-size: 10px;
        }
       
    </style>

</head>
<body>

@php ($counter=0)
                       

@foreach ($faculties as $faculty)
@if($faculty->status == "Lecture")
    <div id="kop">
        <table width="100%">
            <tr>
                <td align="right" style="width: 18%">
                <img src="{{ public_path().'/images/upi.png'}}" width="80" height="80"/>
                </td>
                <td align="right" style="width: 2%">
                
                </td>

                <td align="left" style="width: 80%">

                  <h2><b>KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI <br />
                        UNIVERSITAS PENDIDIKAN INDONESIA <br />
                        FAKULTAS PENDIDIKAN TEKNOLOGI DAN KEJURUAN </h2><br /></b>
                   Jl. Dr. Setiabudi No. 207 Bandung 40154 Telp. (022) 2011576 Ext. 34001 s.d 34008, 34017 Fax (022) 2011576
                </td>
            </tr>
        </table>
    </div>
    <div><hr/></div>
    <div id="bodysurat">
        <table width="100%">
            <tbody>
            <tr>
                <td align="center"><b>SURAT TUGAS</b><br />
                No: 0346/UN40.A5/PP/2019</td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
                <td>Dekan Fakultas Pendidikan Teknologi dan Kejuruan Universitas Pendidikan Indonesia menugaskan kepada:<br /></td>
            </tr>
           
            </tbody>
        </table>
    </div>
    <div id="bodysurat">
        <table width="100%">
            <tbody>
            <tr>
                <td width="10%">Nama</td>
                <td text-align="left">: {{$faculty->front_title}} {{$faculty->first_name}} {{$faculty->last_name}}, {{$faculty->rear_title}}</td>
            </tr>

            @if($faculty->nip == NULL)
            <tr>
                <td width="10%">Unit Kerja</td>
                <td text-align="left">: Departemen Pendidikan Teknik Elektro</td>
            </tr>
            @else
            <tr>
                <td width="10%">NIP</td>
                <td text-align="left">: {{$faculty->nip}}</td>
            </tr>
            
            @endif

            @if($faculty->upi_code == NULL)
            <tr>
                <td width="10%">Kode Dosen</td>
                <td text-align="left">: -</td>
            </tr>
            @else
            <tr>
                <td width="10%">Kode Dosen</td>
                <td text-align="left">: {{$faculty->upi_code}}</td>
            </tr>
            @endif
            </tbody>
        </table>
    </div>

    <div id="bodysurat">
        
        <table width="100%">
            <tbody>
            <tr>
                <td>
                @if($faculty->upi_code == NULL)
                Dosen luar biasa  Departemen Pendidikan Teknik Elektro FPTK UPI, 
                @else
                Dosen Departemen Pendidikan Teknik Elektro FPTK UPI, 
                @endif
                    untuk melaksanakan perkuliahan pada semester Genap Tahun 2018/2019 
                    yang dimulai pada tanggal 1 Februari 2019, yaitu:</td>
            </tr>
           
            </tbody>
        </table>
    </div>
    <div></div>
    <div id="tablejadwal">
        <table width="100%">
            <thead>
            <tr>
                <th width="2%">No</th>
                <th width="3%">Kode</th>
                <th width="25%">Mata Kuliah</th>
                <th width="3%">SKS</th>
                <th width="7%">Kelas</th>
                <th width="5%">Jenjang</th>
                <th width="7%">Ruang</th>
                <th width="5%">Hari</th>
                <th width="7%">Waktu</th>
                <th width="20%">Dosen</th>
            </tr>
            </thead>
            <tbody>
            @php ($alreadymorethensix = FALSE)
                                    @foreach ($timetable as $timetab)
                                        @if ($faculty->username == $timetab->teacher)
                                        
                                            @php ($counter = $counter+1)

                                                @if ($counter > 5)
                                                    
                                                    @if ($alreadymorethensix != TRUE)
                                                        @php ($alreadymorethensix = TRUE)
                                                        </tbody>
                                                        </table>
                                                        </div>

                                                        <div></div>
    <div id="bodysurat">
        <table width="100%">
            <tbody>
            <tr>
            <td width="100%">Demikian surat tugas ini untuk dilaksanakan dengan sebaik-baiknya dan penuh tanggung jawab. </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="bodysurat">
        <table width="100%">
            <tbody>
            <tr>
            <td width="70%"> </td>
            <td width="30%">Bandung, 25 Januari 2019 <br />
                            Dekan, <br /><br /><br /> <br /><br /><br />
                            Prof. Dr. M. Syaom Barliana, M.Pd., MT <br />
                            NIP 19630204 198803 1002
                            </td>
            </tr>
            </tbody>
        </table>
    </div>
                                                        <div class="page-break"></div>

                                                        <div id="kop">
        <table width="100%">
            <tr>
                <td align="right" style="width: 18%">
                <img src="{{ public_path().'/images/upi.png'}}" width="80" height="80"/>
                </td>
                <td align="right" style="width: 2%">
                
                </td>

                <td align="left" style="width: 80%">

                    <b><h2>KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI <br />
                        UNIVERSITAS PENDIDIKAN INDONESIA <br />
                        FAKULTAS PENDIDIKAN TEKNOLOGI DAN KEJURUAN</h2></b>
                        <br />
                        Jl. Dr. Setiabudi No. 207 Bandung 40154 Telp. (022) 2011576 Ext. 34001 s.d 34008, 34017 Fax (022) 2011576
                  
                </td>
            </tr>
        </table>
    </div>
    <div><hr/></div>
    <div id="bodysurat">
        <table width="100%">
            <tbody>
            <tr>
                <td align="center"><b>SURAT TUGAS<</b><br />
                No: 0346/UN40.A5/PP/2019<br /></td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
                <td>Dekan Fakultas Pendidikan Teknologi dan Kejuruan Universitas Pendidikan Indonesia menugaskan kepada:<br /></td>
            </tr>
           
            </tbody>
        </table>
    </div>
    <div id="bodysurat">
        <table width="100%">
            <tbody>
            <tr>
                <td width="10%">Nama</td>
                <td text-align="left">: {{$faculty->front_title}} {{$faculty->first_name}} {{$faculty->last_name}}, {{$faculty->rear_title}}</td>
            </tr>

            @if($faculty->nip == NULL)
            <tr>
                <td width="10%">Unit Kerja</td>
                <td text-align="left">: Departemen Pendidikan Teknik Elektro</td>
            </tr>
            @else
            <tr>
                <td width="10%">NIP</td>
                <td text-align="left">: {{$faculty->nip}}</td>
            </tr>
            
            @endif

            @if($faculty->upi_code == NULL)
            <tr>
                <td width="10%">Kode Dosen</td>
                <td text-align="left">: -</td>
            </tr>
            @else
            <tr>
                <td width="10%">Kode Dosen</td>
                <td text-align="left">: {{$faculty->upi_code}}</td>
            </tr>
            @endif
            </tbody>
        </table>
    </div>

    <div id="bodysurat">
        
        <table width="100%">
            <tbody>
            <tr>
                <td>
                @if($faculty->upi_code == NULL)
                Dosen luar biasa  Departemen Pendidikan Teknik Elektro FPTK UPI, 
                @else
                Dosen Departemen Pendidikan Teknik Elektro FPTK UPI, 
                @endif
                    untuk melaksanakan perkuliahan pada semester Genap Tahun 2018/2019 
                    yang dimulai pada tanggal 1 Februari 2019, yaitu:</td>
            </tr>
           
            </tbody>
        </table>
    </div>
    <div></div>

                                                        <div id="tablejadwal">
                                                        <table width="100%">
                                                        <thead>
                                                        <tr>
                                                            <th width="2%">No</th>
                                                            <th width="3%">Kode</th>
                                                            <th width="25%">Mata Kuliah</th>
                                                            <th width="3%">SKS</th>
                                                            <th width="7%">Kelas</th>
                                                            <th width="5%">Jenjang</th>
                                                            <th width="7%">Ruang</th>
                                                            <th width="5%">Hari</th>
                                                            <th width="7%">Waktu</th>
                                                            <th width="20%">Dosen</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                          
                                                    @endif
                                                @endif
                                                    <tr max-height="90">
                                                    <td align="center">{{$counter}}</td>
                                                    <td>{{$timetab->subject_code}}</td>
                                                    <td>{{$timetab->subject_desc}}</td>
                                                    <td align="center">{{$timetab->subject_credit}}</td>
                                                    <td>{{$timetab->student_sets}}</td>
                                                    <td>{{$timetab->academic_program}}</td>
                                                    <td>{{$timetab->room}}</td>
                                                    <td>{{$timetab->day}}</td>
                                                    <td>{{$timetab->hour}} - {{$timetab->end_hour}}</td>
                                                    <td>
                                                    @php ($teaching_group = explode('|',$timetab->teaching_team))
                                                        @foreach ($teaching_group as $teaching_personal)
                                                            {{$teaching_personal}}
                                                            @if ($loop->last)
                                                            @else <br />
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    </tr>

                                                
                                        @endif
                                    @endforeach
                                    @php($counter=0)
        
            </tbody>
        </table>
        
    </div>
    <div></div>
    <div id="bodysurat">
        <table width="100%">
            <tbody>
            <tr>
            <td width="100%">Demikian surat tugas ini untuk dilaksanakan dengan sebaik-baiknya dan penuh tanggung jawab. </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="bodysurat">
        <table width="100%">
            <tbody>
            <tr>
            <td width="70%"> </td>
            <td width="30%">Bandung, 25 Januari 2019 <br />
                            Dekan, <br /><br /><br /> <br /><br /><br />
                            Prof. Dr. M. Syaom Barliana, M.Pd., MT <br />
                            NIP 19630204 198803 1002
                            </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="kop" style="position: absolute; bottom: 0;">
        <table width="100%">
            <tr>
                <td text-align="left" style="width: 50%;">
                    &copy; deewahyu
                </td>
                
            </tr>

        </table>
    </div>
    <div class="page-break"></div>
@endif
@endforeach

<!--

PLP Processing
-->


@php ($counter=0)
                       
@php($counterlab=0)
@foreach ($faculties as $faculty)
@if ($faculty->status == "PLP")
    @php($counterlab = $counterlab+1)
    @if($counterlab == 1)
        @php($lab="Lab-TTE")
    @elseif($counterlab==2)
        @php($lab="Lab-TELKOM")
    @elseif($counterlab==3)
        @php($lab="Lab-ELIND")
    @endif
    <div id="kop">
        <table width="100%">
            <tr>
                <td align="right" style="width: 18%">
                <img src="{{ public_path().'/images/upi.png'}}" width="80" height="80"/>
                </td>
                <td align="right" style="width: 2%">
                
                </td>

                <td align="left" style="width: 80%">

                  <b>KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI <br />
                        UNIVERSITAS PENDIDIKAN INDONESIA <br />
                        FAKULTAS PENDIDIKAN TEKNOLOGI DAN KEJURUAN <br /></b>
                    Jl. Dr. Setiabudi No. 207 Bandung 40154 Telp. (022) 2011576 Ext. 34001 s.d 34008, 34017 Fax (022) 2011576
                </td>
            </tr>
        </table>
    </div>
    <div><hr/></div>
    <div id="bodysurat">
        <table width="100%">
            <tbody>
            <tr>
                <td align="center"><b>SURAT TUGAS</b><br />
                No: 0346/UN40.A5/PP/2019</td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
                <td>Dekan Fakultas Pendidikan Teknologi dan Kejuruan Universitas Pendidikan Indonesia menugaskan kepada:<br /></td>
            </tr>
           
            </tbody>
        </table>
    </div>
    <div id="bodysurat">
        <table width="100%">
            <tbody>
            <tr>
                <td width="10%">Nama</td>
                <td text-align="left">: {{$faculty->front_title}} {{$faculty->first_name}} {{$faculty->last_name}}, {{$faculty->rear_title}}</td>
            </tr>

            
            <tr>
                <td width="10%">NIP</td>
                <td text-align="left">: {{$faculty->nip}}</td>
            </tr>
            
           
            <tr>
                <td width="10%">Unit Kerja</td>
                <td text-align="left">

                @if($lab == "lab-TTE")
                    : Laboratorium Listrik Tenaga FPTK UPI
                @elseif($lab == "Lab-TELKOM")
                    : Laboratorium Telekomunikasi FPTK UPI
                @elseif($lab == "Lab-ELIND")
                    : Laboratorium Elektronika Industri FPTK UPI
                @endif
                </td>
            </tr>
            </tbody>
        </table>
    </div

    <div id="bodysurat">
        
        <table width="100%">
            <tbody>
            <tr>
                <td>Pranata Laboratorium Pendidikan Departemen Pendidikan Teknik Elektro FPTK UPI, 
                    untuk melaksanakan perkuliahan pada semester Genap Tahun 2018/2019 
                    yang dimulai pada tanggal 1 Februari 2019, yaitu:</td>
            </tr>
           
            </tbody>
        </table>
    </div>
    <div></div>
    <div id="tablejadwal">
        <table width="100%">
            <thead>
            <tr>
                <th width="2%">No</th>
                <th width="3%">Kode</th>
                <th width="25%">Mata Kuliah</th>
                <th width="3%">SKS</th>
                <th width="7%">Kelas</th>
                <th width="5%">Jenjang</th>
                <th width="7%">Ruang</th>
                <th width="5%">Hari</th>
                <th width="7%">Waktu</th>
                <th width="20%">Dosen</th>
            </tr>
            </thead>
            <tbody>
           
            @php ($alreadymorethensix = FALSE)
                                    @php($kodematkul ="")
                                    @foreach ($timetable as $timetab)
                                    @if(($lab == $timetab->room) && ($timetab->activity_tags == "PRAKTIKUM"))
                                        @if($kodematkul != $timetab->subject_code)
                                            @php($kodematkul = $timetab->subject_code)
                                        
                                            @php ($counter = $counter+1)

                                                @if ($counter > 5)
                                                    
                                                    @if ($alreadymorethensix != TRUE)
                                                        @php ($alreadymorethensix = TRUE)
                                                        </tbody>
                                                        </table>
                                                        </div>

                                                        <div></div>
    <div id="bodysurat">
        <table width="100%">
            <tbody>
            <tr>
            <td width="100%">Demikian surat tugas ini untuk dilaksanakan dengan sebaik-baiknya dan penuh tanggung jawab. </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="bodysurat">
        <table width="100%">
            <tbody>
            <tr>
            <td width="70%"> </td>
            <td width="30%">Bandung, 25 Januari 2019 <br />
                            Dekan, <br /><br /><br /> <br /><br /><br />
                            Prof. Dr. M. Syaom Barliana, M.Pd., MT <br />
                            NIP 19630204 198803 1002
                            </td>
            </tr>
            </tbody>
        </table>
    </div>
                                                        <div class="page-break"></div>

                                                        <div id="kop">
        <table width="100%">
            <tr>
                <td align="right" style="width: 18%">
                <img src="{{ public_path().'/images/upi.png'}}" width="80" height="80"/>
                </td>
                <td align="right" style="width: 2%">
                
                </td>

                <td align="left" style="width: 80%">

                    <b>KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI <br />
                        UNIVERSITAS PENDIDIKAN INDONESIA <br />
                        FAKULTAS PENDIDIKAN TEKNOLOGI DAN KEJURUAN</b>
                        <br />
                        Jl. Dr. Setiabudi No. 207 Bandung 40154 Telp. (022) 2011576 Ext. 34001 s.d 34008, 34017 Fax (022) 2011576
                  
                </td>
            </tr>
        </table>
    </div>
    <div><hr/></div>
    <div id="bodysurat">
        <table width="100%">
            <tbody>
            <tr>
                <td align="center"><b>SURAT TUGAS<</b><br />
                No: 0346/UN40.A5/PP/2019<br /></td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
                <td>Dekan Fakultas Pendidikan Teknologi dan Kejuruan Universitas Pendidikan Indonesia menugaskan kepada:<br /></td>
            </tr>
           
            </tbody>
        </table>
    </div>
    <div id="bodysurat">
        <table width="100%">
            <tbody>
            <tr>
                <td width="10%">Nama</td>
                <td text-align="left">: {{$faculty->front_title}} {{$faculty->first_name}} {{$faculty->last_name}}, {{$faculty->rear_title}}</td>
            </tr>

            
            <tr>
                <td width="10%">NIP</td>
                <td text-align="left">: {{$faculty->nip}}</td>
            </tr>
            
           
            <tr>
                <td width="10%">Unit Kerja</td>
                <td text-align="left">

                @if($lab == "lab-TTE")
                    : Laboratorium Listrik Tenaga FPTK UPI
                @elseif($lab == "Lab-TELKOM")
                    : Laboratorium Telekomunikasi FPTK UPI
                @elseif($lab == "Lab-ELIND")
                    : Laboratorium Elektronika Industri FPTK UPI
                @endif
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div id="bodysurat">
        
        <table width="100%">
            <tbody>
            <tr>
                <td>Pranata Laboratorium Pendidikan Departemen Pendidikan Teknik Elektro FPTK UPI, 
                    untuk melaksanakan perkuliahan pada semester Genap Tahun 2018/2019 
                    yang dimulai pada tanggal 1 Februari 2019, yaitu:</td>
            </tr>
           
            </tbody>
        </table>
    </div>
    <div></div>

                                                        <div id="tablejadwal">
                                                        <table width="100%">
                                                        <thead>
                                                        <tr>
                                                            <th width="2%">No</th>
                                                            <th width="3%">Kode</th>
                                                            <th width="25%">Mata Kuliah</th>
                                                            <th width="3%">SKS</th>
                                                            <th width="7%">Kelas</th>
                                                            <th width="5%">Jenjang</th>
                                                            <th width="7%">Ruang</th>
                                                            <th width="5%">Hari</th>
                                                            <th width="7%">Waktu</th>
                                                            <th width="20%">Dosen</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                          
                                                    @endif
                                                @endif
                                               
                                                

                                                    <tr max-height="90">
                                                    <td align="center">{{$counter}}</td>
                                                    <td>{{$timetab->subject_code}}</td>
                                                    <td>{{$timetab->subject_desc}}</td>
                                                    <td align="center">{{$timetab->subject_credit}}</td>
                                                    <td>{{$timetab->student_sets}}</td>
                                                    <td>{{$timetab->academic_program}}</td>
                                                    <td>{{$timetab->room}}</td>
                                                    <td>{{$timetab->day}}</td>
                                                    <td>{{$timetab->hour}} - {{$timetab->end_hour}}</td>
                                                    <td>
                                                    @php ($teaching_group = explode('|',$timetab->teaching_team))
                                                        @foreach ($teaching_group as $teaching_personal)
                                                            {{$teaching_personal}}
                                                            @if ($loop->last)
                                                            @else <br />
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    </tr>
                                                @endif
                                            @endif

                                                
                                    @endforeach
                                    @php($counter=0)
        
            </tbody>
        </table>
        
    </div>
    <div></div>
    <div id="bodysurat">
        <table width="100%">
            <tbody>
            <tr>
            <td width="100%">Demikian surat tugas ini untuk dilaksanakan dengan sebaik-baiknya dan penuh tanggung jawab. </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="bodysurat">
        <table width="100%">
            <tbody>
            <tr>
            <td width="70%"> </td>
            <td width="30%">Bandung, 25 Januari 2019 <br />
                            Dekan, <br /><br /><br /> <br /><br /><br />
                            Prof. Dr. M. Syaom Barliana, M.Pd., MT <br />
                            NIP 19630204 198803 1002
                            </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="kop" style="position: absolute; bottom: 0;">
        <table width="100%">
            <tr>
                <td text-align="left" style="width: 50%;">
                    &copy; deewahyu
                </td>
                
            </tr>

        </table>
    </div>
    <div class="page-break"></div>
@endif
@endforeach



</body>
</html>