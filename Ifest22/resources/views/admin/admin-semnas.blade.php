@extends('admin.admin')

@section('admin_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
@endsection

@section('admin_title', 'Seminar Nasional')

@section('admin_detail')
<div class="row align-items-center justify-content-center" align="center" id="tableDataStartup" style="padding-top: 10px;padding-bottom: 10px;">
    <div class="col" style="padding: 10px 0 10px 0;">
        <div class="row justify-content-center" style="padding-bottom: 10px;">
            <h1 class="text-table-title ">Data Peserta</h1>
        </div>
        <div class="row justify-content-center" style="padding-bottom: 30px;">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Nama Peserta</th>
                            <th scope="col">Instansi</th>
                            <th scope="col">Bukti Pembayaran</th>
                            <th scope="col">Status Konfirmasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($semnas as $data)
                        <tr>
                            <form action="{{ route('admin-semnas-change-status-pembayaran') }}" method="post">
                                @method('put')
                                @csrf
                                <td><input name="semnas_email" id="semnas_email" value="{{ $data->email }}" hidden>{{ $data->email }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->institute }}</td>
                                <td><a href="{{asset('storage/' . $data['proof_payment'])}}"> Proof Payment</a></td>
                                <td>
                                    <div class="btn-group">
                                        <select name="semnas_payment_status" id="semnas_payment_status"
                                        class="
                                            <?php if($data->status_pembayaran === '2'){echo('dd-green');}
                                            elseif($data->status_pembayaran === '1'){echo('dd-orange');} 
                                            elseif($data->status_pembayaran === '0'){echo('dd-red');} ?>
                                        "
                                        onchange="this.form.submit()">
                                            <option class="dd-green" value="2" 
                                                <?php if ($data->status_pembayaran === '2') { echo ('selected'); } ?>>
                                                Confirmed
                                            </option>
                                            <option class="dd-orange" value="1" 
                                                <?php if ($data->status_pembayaran === '1') { echo ('selected'); } ?>>
                                                Pending
                                            </option>
                                            <option class="dd-red" value="0" 
                                                <?php if ($data->status_pembayaran === '0') { echo ('selected'); } ?>>
                                                Declined
                                            </option>
                                        </select>
                                    </div>
                                </td>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection