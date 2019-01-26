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

        td{
            vertical-align: top;
        }

        th{
            vertical-align: top;
        }
       
    </style>

</head>
<body>
@php ($newpage = TRUE)
@php ($counter=0)
@php ($number = 0)
    @foreach($listOfParticipants as $listOfParticipant)
       
        @if ($newpage == TRUE)
            @php ($newpage = FALSE)
            <div id="kop">
                <table width="100%">
                    <tr>
                        <td align="right" style="width: 18%">
                        LAMPIRAN: 
                        </td>
                        <td align="right" style="width: 2%">
                        
                        </td>

                        <td align="left" style="width: 80%">

                        <b>SURAT KEPUTUSAN DEKAN FPTK UNIVERSITAS PENDIDIKAN INDONESIA <br />
                                TENTANG PENETAPAN PANITIA, PENGUJI, DAN PESERTA UJIAN SIDANG SARJANA TEKNIK PADA <br />
                                PROGRAM STUDI PENDIDIKAN TEKNIK ELEKTRO – S1 FPTK UPI PERIODE BULAN AGUSTUS 2018<br /></b>
                                SK NO.      /UN40.A5/A/2019 – 25 JANUARI 2019
                        </td>
                    </tr>
                </table>
            </div>
            <div><hr/></div>
            <div id="tablejadwal">
                <table width="100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="12%">Nama dan NIM</th>
                        <th width="25%">Judul</th>
                        <th width="18%">Pembimbing</th>
                        <th width="18%">Penguji</th>
                        <th >Panitia</th>
                    </tr>
                </thead>
            <tbody>
        @else
            
            
            @php($number = $number+1)
            @if($counter==1)
                
                <tr>
                    <td width="5%" align="center">
                                {{ $number}}
                            </td>
                            <td width="12%"">
                                {{ $listOfParticipant->name}} <br />
                                {{ $listOfParticipant->student_number}}
                            </td>
                            <td width="25%">
                                {{ $listOfParticipant->title}}
                            </td>
                            <td width="18%"> 
                                {{ $listOfParticipant->first_supervisor}} <br />
                                {{ $listOfParticipant->second_supervisor}}
                            </td>
                            <td width="18%">
                                {{ $listOfParticipant->first_examiner}} <br />
                                {{ $listOfParticipant->second_examiner}} <br />
                                {{ $listOfParticipant->third_examiner}}
                            </td>

                            @if($listOfParticipant->length > 8)
                                <td rowspan="8" >
                            @elseif($listOfParticipant->length = 7)
                                <td rowspan="7" >
                            @else
                                <td rowspan="6" >
                            @endif
                            
                            <b>Penanggung Jawab:</b><br />
                            <i>Rektor UPI</i><br />
                            Prof. Dr. H. R Asep Kadarohman, M.Si.<br /><br />
                            <b>Ketua:</b><br />
                            <i>Dekan FPTK UPI</i><br />
                            Prof. Dr. M. Syaom Barliana, M.Pd., MT<br /><br />
                            <b>Sekretaris:</b><br />
                            <i>Ketua DPTE</i><br />
                            Prof. Dr. Budi Mulyanti, M.Si.<br /><br />
                            <b>Anggota:</b><br />
                            <i>Wakil Dekan I FPTK UPI</i><br />
                            Dr. Iwa Kuntadi, M.Pd.<br /><br />
                            <i>Ketua Prodi TE</i><br />
                            Dr. Aip Saripudin, MT.<br /><br />
                            <i>Sekretaris DPTE</i><br />
                            Didin Wahyudin, Ph.D<br />
                            </td>
                        </tr>
            
            @elseif($counter < 9)


                    <tr>
                        <td width="5%" align="center">
                            {{ $number}}
                        </td>
                        <td  width="12%">
                            {{ $listOfParticipant->name}} <br />
                            {{ $listOfParticipant->student_number}}
                        </td>
                        <td width="25%">
                            {{ $listOfParticipant->title}}
                        </td>
                        <td width="18%">
                            {{ $listOfParticipant->first_supervisor}} <br />
                            {{ $listOfParticipant->second_supervisor}}
                        </td>
                        <td width="18%">
                            {{ $listOfParticipant->first_examiner}} <br />
                            {{ $listOfParticipant->second_examiner}} <br />
                            {{ $listOfParticipant->third_examiner}}
                        </td>
                       
                    </tr>
            @else
                @php($counter = 0)
                @php($newpage = TRUE)
                
                </tbody>
                </table>
                </div>
                <div class="page-break"></div>

            @endif
    @endif

    
    @php($counter = $counter+1)

    @endforeach
    <div class="kop" style="position: absolute; bottom: 0;">
        <table width="100%">
            <tr>
                <td text-align="left" style="width: 50%;">
                    &copy; deewahyu
                </td>
                
            </tr>

        </table>
    </div>
</body>
</html>