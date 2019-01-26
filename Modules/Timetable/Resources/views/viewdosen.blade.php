<style>
.page-break {
    page-break-after: always;
}

.font-face {
    font-family: OptimusPrinceps;
    src: url('{{ public_path('fonts/OptimusPrinceps.tff') }}');
}

.bottom {
    border-bottom: 1px solid #ccc;
}
.table-bordered td, .table-bordered th{
    border-color: black !important;
}

</style>

@extends('timetable::layouts.pure-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-16 offset-md-">
            

                    @php ($counter=0)
                       

                    @foreach ($faculties as $faculty)
                       
                        <!--<h2> Dosen Pengampu : {{$faculty->username}} </h2>

                            <!-- Formating Header !-->

                            <div class="row">
                                <div class="col-md-2 text-right ">{{ HTML::image('/images/upi.png', 'alt', array( 'width' => 100, 'height' => 100 )) }}</div>
                                <div class="col-md-10"><h5>KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI <br />
                                                                    UNIVERSITAS PENDIDIKAN INDONESIA <br />
                                                                    FAKULTAS PENDIDIKAN TEKNOLOGI DAN KEJURUAN
                                                                    </h5>
                                                                    <h6>Jl. Dr. SetiaBudi No. 207 Bandung 40154 Telp. (022) 2011576 Ext. 34001 s.d 34008, 34017 Fax (022) 2011576</h6></div>
                            </div>
                            <div class="row">
                            <div class="bottom"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center"><h5>SURAT TUGAS</h5> 
                                <h6>No: _______/UN40.A5/PP/2019</h6>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 font-size:11">Dekan Fakultas Pendidikan Teknologi dan Kejuruan Universitas Pendidikan Indonesia menugaskan kepada:</div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">Nama</div>
                                <div class="col-md-10">: {{$faculty->front_title}} {{$faculty->first_name}} {{$faculty->last_name}}, {{$faculty->rear_title}}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">NIP</div>
                                <div class="col-md-10">: {{$faculty->nip}}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">Kode Dosen</div>
                                <div class="col-md-9">: {{$faculty->upi_code}}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 line-height:1">Dosen Departemen Pendidikan Teknik Elektro FPTK UPI, 
                                                        untuk melaksanakan perkuliahan pada semester Genap Tahun 2018/2019 
                                                        yang dimulai pada tanggal 1 Februari 2019, yaitu:</div>
                            </div>
                            <br />


                            

                            
                    
                            <table class="table-sm table-bordered">
                                <thead class="thead-light">
                                <tr max-height="90">
                                    <th style="width: 1%"><h6>No.</h6></th>
                                <th style="width: 2%"><h6>Kode</h6></th>
                                <th style="width: 31%"><h6>Mata Kuliah</h6></th>
                                <th style="width: 1%"><h6>SKS</h6></th>
                                <th style="width: 7%"><h6>Kelas</h6></th>
                                <th style="width: 2%"><h6>Jenjang</h6></th>
                                <th style="width: 5%"><h6>Ruang</h6></th>
                                <th style="width: 5%"><h6>Hari</h6></th>
                                <th style="width: 10%"><h6>Waktu</h6></th>
                                <th style="width: 20%"><h6>Tim Dosen</h6></th>
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
                                                          
                                                    @endif
                                                @endif
                                                    <tr max-height="90">
                                                    <td style="width: 1%" class="align-top text-center line-height:1"><h6>{{$counter}}</h6></td>
                                                    <td style="width: 2%" class="align-top text-center line-height:1"><h6>{{$timetab->subject_code}}</h6></td>
                                                    <td style="width: 31%" class="align-top line-height:1"><h6>{{$timetab->subject_desc}}</h6></td>
                                                    <td style="width: 1%" class="align-top text-center line-height:1"><h6>{{$timetab->subject_credit}}</h6></td>
                                                    <td style="width: 7%" class="align-top line-height:1"><h6>{{$timetab->student_sets}}</h6></td>
                                                    <td style="width: 2%" class="align-top text-center line-height:1"><h6>{{$timetab->academic_program}}</h6></td>
                                                    <td style="width: 5%" class="align-top line-height:1"><h6>{{$timetab->room}}</h6></td>
                                                    <td style="width: 5%" class="align-top text-center line-height:1"><h6>{{$timetab->day}}</h6></td>
                                                    <td style="width: 10%" class="align-top text-center line-height:1"><h6>{{$timetab->hour}}</h6></td>
                                                    <td style="width: 20%" class="align-top line-height:1"><h6>
                                                    @php ($teaching_group = explode('|',$timetab->teaching_team))
                                                        @foreach ($teaching_group as $teaching_personal)
                                                            {{$teaching_personal}}
                                                            @if ($loop->last)
                                                            @else <br />
                                                            @endif
                                                        @endforeach
                                                    </h6>
                                                    </td>
                                                    </tr>

                                                
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            <br />

                            <div class="row">
                                <div class="col-md-12 font-weight:11"><h6>Demikian surat tugas ini untuk dilaksanakan dengan sebaik-baiknya dan penuh tanggung jawab.</h6></div>
                            </div>
                            <div class="row">
                                <div class="col-md-8"></div>
                                <div class="col-md-4"><h6>Bandung, 25 Januari 2019 <br />
                                                        Dekan, <br /><br /><br /> <br /><br /><br />
                                                        Prof. Dr. M. Syaom Barliana, M.Pd., MT <br />
                                                        NIP 19630204 198803 1002</h6>
                                 </div>
                            </div>
                            @php ($counter=0)
                            <div class="page-break"></div>
                    @endforeach
                </div>


        </div>
        
    </div>
</div>
@endsection