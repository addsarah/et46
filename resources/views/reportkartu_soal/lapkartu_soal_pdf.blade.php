<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Data User</title>
</head>

<body>
    <h3>Report Data User</h3>
    </hr>
    <table style="width:100%">
        <thead>
            <tr>
                <td bgcolor="cyan" width="5%">No</td>
                <td bgcolor="cyan">Deskripsi Soal</td>
                <td bgcolor="cyan">Kunci Jawab</td>
            </tr>
        </thead>
        <tbody>
            @foreach($R_kartu_soal as $row)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $row->desk_soal }}</td>  
                <td>{{ $row->kj }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p align="right">
        Date : {{$row->created_at}} </br>
        Personal In Charge</br>

        </br>
        </br>
        @if(Auth::check())
        <span class="hidden-xs">({{ auth::user()->name}})</span>
        @endif
</body>

</html>