<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Barcode</title>
    <style>
        .text-center{
            text-align: center;
        }
    </style>
</head>
<body>
    <table width="100%">
        <tr>
            @foreach ($data_kd_laptop as $key => $i)
            
                <td class="text-center" style="border: 1px solid">
                    <p>{{ $i->Nama }}</p>
                    <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($i->id_laptop,'C39',3,33) }}" alt="barcode" width="180" height="60"  />
                    <br>
                    <p>{{ $i->kelas }}</p>
                    <p>{{ $i->id_laptop }}</p>
                </td>
                @if (($key+1) % 3   == 0)
                    </tr>
                
                       
                    <tr>
                @endif
            @endforeach
        </tr>
    </table>
</body>
</html>