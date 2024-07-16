<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<style>
    body {
        margin: 0px;
        display: flex;
        flex-direction: column;
        gap: 35px;
    }

    .container {
        margin: 0px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        background-color: #fff8dc;
        height: fit-content;
    }

    ul {
        list-style-type: none;
        display: flex;
        flex-direction: row;
        margin-top: 0px;
        gap: 30px;
        padding: 40px 40px 0 0;
    }

    a {
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        color: #764c01;

    }

    .background-hover {
        background-color: #d9ba87;
        width: 70px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 15px;
    }

    .background-hover-2 {
        background-color: #d9ba87;
        width: 70px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 15px;
    }

    .background-hover-3 {
        background-color: #d9ba87;
        width: 110px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 15px;
    }

    .icon {
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 15px;
        height: 25px;
        padding-top:10px;
    }
</style>

<div class="container">
    <img src="\assets\horison-hotel.png" alt="logo">
    <ul>
        <li>
            <div class="background-hover">
                <a href="/">Home</a>
            </div>
        </li>
        <li>
            <div class="background-hover-2">
                <a href="/pegawai">Form</a>
            </div>
        </li>
        <li>
            <div class="background-hover-3">
                <a href="/lihatData">Lihat Data</a>
            </div>
        </li>
    </ul>

</div>

@php
    $departemen = [
        1 => 'Departemen Keuangan',
        2 => 'Departemen HR',
        3 => 'Departemen IT'
    ];
@endphp

<style>
    table,
    th,
    td {
        border: 1px solid black;
    }

    td {
        text-align: center;
    }
</style>

<table style="width:100%">
    <tr>
        <th>Nama</th>
        <th>NIK</th>
        <th>ID Departemen</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($Pegawai as $data)
        <tr>
            <td>{{$data->Nama}}</td>
            <td>{{$data->NIK}}</td>
            <td>{{ $departemen[$data->id_departemen] ?? 'Departemen tidak diketahui' }}</td>
            <td>{{$data->tgl_lahir}}</td>
            <td>{{$data->alamat}}</td>
            <td class="icon">
                <a href="/editData/{{$data->ID}}"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="/hapusData/{{$data->ID}}"><i class="fa-solid fa-trash"></i></a>
            </td>

        </tr>
    @endforeach
</table>