@extends('admin.admin')

@section('admin_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
@endsection

@section('admin_title', 'Users')

@section('admin_detail')
<div class="row align-items-center justify-content-center" align="center" id="tableDataStartup" style="padding-top: 10px;padding-bottom: 10px;">
    <div class="col" style="padding: 10px 0 10px 0;">
        <div class="row justify-content-center" style="padding-bottom: 10px;">
            <h1 class="text-table-title ">Data Users</h1>
        </div>
        <div class="row justify-content-center" style="padding-bottom: 30px;">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Instansi</th>
                            <th scope="col">Image</th>
                            <th scope="col">Akun</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->institute }}</td>
                                <td><a href="{{asset('storage/' . $data['image'])}}"> Profpic</a></td>
                                @if($data->is_admin === '1')
                                    <td style="background-color: green; color:white;">
                                        Admin
                                    </td>
                                @else
                                    <td>
                                        Peserta
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection