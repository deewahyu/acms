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
            
                    
                            <table class="table-sm table-bordered">
                                <thead class="thead-light">
                                <tr max-height="90">
                                <th style="width: 1%"><h6>No. Act</h6></th>
                                <th style="width: 2%"><h6>Kode</h6></th>
                                <th style="width: 2%"><h6>SKS</h6></th>
                                <th style="width: 2%"><h6>Team</h6></th>
                                <th style="width: 7%"><h6>Kelas</h6></th>
                                <th style="width: 5%"><h6>Ruang</h6></th>
                                <th style="width: 5%"><h6>Hari</h6></th>
                                <th style="width: 5%"><h6>Waktu Mulai</h6></th>
                                <th style="width: 5%"><h6>Waktu Akhir</h6></th>
                                
                                <th style="width: 20%"><h6>Tim Dosen</h6></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php($counterpart = 0)
                                    @php($act_number = 0)
                                    @foreach ($timetable as $timetab)
                                        @if($timetab->academic_program == "S1 PTE")
                                            @if ($act_number != $timetab->activity_number)
                                                @php($act_number = $timetab->activity_number)
                                                    <tr >
                                                    <td style="width: 1%" class="align-top text-center line-height:1"><h6>{{$timetab->activity_number}}</h6></td>
                                                    <td style="width: 2%" class="align-top text-center line-height:1"><h6>{{$timetab->subject_code}}</h6></td>
                                                    <td style="width: 2%" class="align-top text-center line-height:1"><h6>{{$timetab->subject_credit}}</h6></td>
                                                    <td style="width: 2%" class="align-top line-height:1">
                                                    @php ($teaching_group_code = explode('|',$timetab->teaching_team_code))
                                                        @foreach ($teaching_group_code as $teaching_code)
                                                            {{$teaching_code}}
                                                            @if ($loop->last)
                                                            @else <br />
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td style="width: 7%" class="align-top line-height:1"><h6>{{$timetab->student_sets}}</h6></td>
                                                    <td style="width: 5%" class="align-top line-height:1"><h6>{{$timetab->room}}</h6></td>
                                                    <td style="width: 5%" class="align-top text-center line-height:1"><h6>{{$timetab->day}}</h6></td>
                                                    <td style="width: 5%" class="align-top text-center line-height:1"><h6>{{$timetab->hour}}</h6></td>
                                                    <td style="width: 5%" class="align-top text-center line-height:1"><h6>{{$timetab->end_hour}}</h6></td>
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
                                            @php($counterpart = $counterpart+1)
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>

                            <br />

                            <table class="table-sm table-bordered">
                                <thead class="thead-light">
                                <tr max-height="90">
                                <th style="width: 1%"><h6>No. Act</h6></th>
                                <th style="width: 2%"><h6>Kode</h6></th>
                                <th style="width: 2%"><h6>SKS</h6></th>
                                <th style="width: 2%"><h6>Team</h6></th>
                                <th style="width: 7%"><h6>Kelas</h6></th>
                                <th style="width: 5%"><h6>Ruang</h6></th>
                                <th style="width: 5%"><h6>Hari</h6></th>
                                <th style="width: 5%"><h6>Waktu Mulai</h6></th>
                                <th style="width: 5%"><h6>Waktu Akhir</h6></th>
                                
                                <th style="width: 20%"><h6>Tim Dosen</h6></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php($counterpart = 0)
                                    @php($act_number = 0)
                                    @foreach ($timetable as $timetab)
                                        @if ($timetab->academic_program == "S1 TE")
                                            @if ($act_number != $timetab->activity_number)
                                                @php($act_number = $timetab->activity_number)
                                                    <tr >
                                                    <td style="width: 1%" class="align-top text-center line-height:1"><h6>{{$timetab->activity_number}}</h6></td>
                                                    <td style="width: 2%" class="align-top text-center line-height:1"><h6>{{$timetab->subject_code}}</h6></td>
                                                    <td style="width: 2%" class="align-top text-center line-height:1"><h6>{{$timetab->subject_credit}}</h6></td>
                                                    <td style="width: 2%" class="align-top line-height:1">
                                                    @php ($teaching_group_code = explode('|',$timetab->teaching_team_code))
                                                        @foreach ($teaching_group_code as $teaching_code)
                                                            {{$teaching_code}}
                                                            @if ($loop->last)
                                                            @else <br />
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td style="width: 7%" class="align-top line-height:1"><h6>{{$timetab->student_sets}}</h6></td>
                                                    <td style="width: 5%" class="align-top line-height:1"><h6>{{$timetab->room}}</h6></td>
                                                    <td style="width: 5%" class="align-top text-center line-height:1"><h6>{{$timetab->day}}</h6></td>
                                                    <td style="width: 5%" class="align-top text-center line-height:1"><h6>{{$timetab->hour}}</h6></td>
                                                    <td style="width: 5%" class="align-top text-center line-height:1"><h6>{{$timetab->end_hour}}</h6></td>
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
                                            @php($counterpart = $counterpart+1)
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>

                            <br />

                            <table class="table-sm table-bordered">
                                <thead class="thead-light">
                                <tr max-height="90">
                                <th style="width: 1%"><h6>No. Act</h6></th>
                                <th style="width: 2%"><h6>Kode</h6></th>
                                <th style="width: 2%"><h6>SKS</h6></th>
                                <th style="width: 2%"><h6>Team</h6></th>
                                <th style="width: 7%"><h6>Kelas</h6></th>
                                <th style="width: 5%"><h6>Ruang</h6></th>
                                <th style="width: 5%"><h6>Hari</h6></th>
                                <th style="width: 5%"><h6>Waktu Mulai</h6></th>
                                <th style="width: 5%"><h6>Waktu Akhir</h6></th>
                                
                                <th style="width: 20%"><h6>Tim Dosen</h6></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php($counterpart = 0)
                                    @php($act_number = 0)
                                    @foreach ($timetable as $timetab)
                                        @if ($timetab->academic_program == "D3 TE")
                                            @if ($act_number != $timetab->activity_number)
                                                @php($act_number = $timetab->activity_number)
                                                    <tr >
                                                    <td style="width: 1%" class="align-top text-center line-height:1"><h6>{{$timetab->activity_number}}</h6></td>
                                                    <td style="width: 2%" class="align-top text-center line-height:1"><h6>{{$timetab->subject_code}}</h6></td>
                                                    <td style="width: 2%" class="align-top text-center line-height:1"><h6>{{$timetab->subject_credit}}</h6></td>
                                                    <td style="width: 2%" class="align-top line-height:1">
                                                    @php ($teaching_group_code = explode('|',$timetab->teaching_team_code))
                                                        @foreach ($teaching_group_code as $teaching_code)
                                                            {{$teaching_code}}
                                                            @if ($loop->last)
                                                            @else <br />
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td style="width: 7%" class="align-top line-height:1"><h6>{{$timetab->student_sets}}</h6></td>
                                                    <td style="width: 5%" class="align-top line-height:1"><h6>{{$timetab->room}}</h6></td>
                                                    <td style="width: 5%" class="align-top text-center line-height:1"><h6>{{$timetab->day}}</h6></td>
                                                    <td style="width: 5%" class="align-top text-center line-height:1"><h6>{{$timetab->hour}}</h6></td>
                                                    <td style="width: 5%" class="align-top text-center line-height:1"><h6>{{$timetab->end_hour}}</h6></td>
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
                                            @php($counterpart = $counterpart+1)
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            
                </div>


        </div>
        
    </div>
    
</div>
@endsection