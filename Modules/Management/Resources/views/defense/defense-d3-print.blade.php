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

@php ($counter=0)
                       

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

        @foreach($listOfParticipants as $listOfParticipant)
            @php($counter=$counter+1)
                @if($counter==1)
                    <tr>
                        <td align="center">
                            {{ $counter}}
                        </td>
                        <td>
                            {{ $listOfParticipant->name}} <br />
                            {{ $listOfParticipant->student_number}}
                        </td>
                        <td>
                            {{ $listOfParticipant->title}}
                        </td>
                        <td>
                            {{ $listOfParticipant->first_supervisor}} <br />
                            {{ $listOfParticipant->second_supervisor}}
                        </td>
                        <td>
                            {{ $listOfParticipant->first_examiner}} <br />
                            {{ $listOfParticipant->second_examiner}} <br />
                            {{ $listOfParticipant->third_examiner}}
                        </td>
                        
                        <td rowspan="5" >

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
                @else
                <tr>
                        <td align="center">
                            {{ $counter}}
                        </td>
                        <td>
                            {{ $listOfParticipant->name}} <br />
                            {{ $listOfParticipant->student_number}}
                        </td>
                        <td>
                            {{ $listOfParticipant->title}}
                        </td>
                        <td>
                            {{ $listOfParticipant->first_supervisor}} <br />
                            {{ $listOfParticipant->second_supervisor}}
                        </td>
                        <td>
                            {{ $listOfParticipant->first_examiner}} <br />
                            {{ $listOfParticipant->second_examiner}} <br />
                            {{ $listOfParticipant->third_examiner}}
                        </td>
                       
                    </tr>
                    @if($counter>6 || $loop->last)
                    <div class="page-break"></div>
                    @endif
                @endif
        @endforeach
            
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



</body>
</html>