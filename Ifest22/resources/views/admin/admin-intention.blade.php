@extends('admin.admin')

@section('admin_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
@endsection

@section('admin_title', 'INTENTION')

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
                            <th scope="col">Nama Tim</th>
                            <th scope="col">Nama Ketua</th>
                            <th scope="col">Anggota 1</th>
                            <th scope="col">Anggota 2</th>
                            <th scope="col">Anggota 3</th>
                            <th scope="col">Anggota 4</th>
                            <th scope="col">Bukti Bayar</th>
                            <th scope="col">Status Konfirmasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($intention as $data)
                            <tr>
                                <form action="{{ route('admin-intention-change-status-pembayaran') }}" method="post">
                                    @method('put')
                                    @csrf
                                    <td><input name="intention_email" id="intention_email" value="{{ $data->email }}" hidden>{{ $data->email }}</td>
                                    <td>{{ $data->team_name }}</td>
                                    <td>
                                        {{ $data->team_leader }} - {{ $data->team_leader_institute }} -
                                        <a href="{{asset('storage/' . $data['team_leader_id_card'])}}"> Id Card</a>
                                    </td>
                                    <td>
                                        @if ($data->team_member_1 !== null)
                                            {{ $data->team_member_1 }} - {{ $data->team_member_1_institute }} -
                                            <a href="{{asset('storage/' . $data['team_member_1_id_card'])}}"> Id Card</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->team_member_2 !== null)
                                            {{ $data->team_member_2 }} - {{ $data->team_member_2_institute }} -
                                            <a href="{{asset('storage/' . $data['team_member_2_id_card'])}}"> Id Card</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->team_member_3 !== null)
                                            {{ $data->team_member_3 }} - {{ $data->team_member_3_institute }} -
                                            <a href="{{asset('storage/' . $data['team_member_3_id_card'])}}"> Id Card</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->team_member_4 !== null)
                                            {{ $data->team_member_4 }} - {{ $data->team_member_4_institute }} -
                                            <a href="{{asset('storage/' . $data['team_member_4_id_card'])}}"> Id Card</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td><a href="{{asset('storage/' . $data['proof_payment'])}}"> Proof Payment</a></td>
                                    <td>
                                        <div class="btn-group">
                                            <select name="intention_payment_status" id="intention_payment_status" 
                                            class="
                                                <?php if($data->status_pembayaran === '2'){echo('dd-green');}
                                                elseif($data->status_pembayaran === '1'){echo('dd-orange');} 
                                                elseif($data->status_pembayaran === '0'){echo('dd-red');} ?>
                                            "
                                            onchange="this.form.submit()">
                                                <option class="dd-green" value="2" <?php if($data->status_pembayaran === '2') {echo('selected');}?>>Confirmed</option>
                                                <option class="dd-orange" value="1" <?php if($data->status_pembayaran === '1') {echo('selected');}?>>Pending</option>
                                                <option class="dd-red" value="0" <?php if($data->status_pembayaran === '0') {echo('selected');}?>>Declined</option>
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
        <div class="row justify-content-center" style="padding-bottom: 10px;">
            <h1 class="text-table-title ">Data Lomba</h1>
        </div>
        <div class="row justify-content-center" style="padding-bottom: 30px;">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nama Tim</th>
                            <th scope="col">Nama Ketua</th>
                            <th scope="col">Status Tim</th>
                            <th scope="col">Link Proposal</th>
                            <th scope="col">Link Project</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($intention as $data)
                            <tr>
                                <form action="{{ route('admin-intention-change-status-finalist') }}" method="post">
                                    @method('put')
                                    @csrf
                                    <td hidden><input name="intention_email" id="intention_email" value="{{ $data->email }}" hidden>{{ $data->email }}</td>
                                    <td>{{ $data->team_name }}</td>
                                    <td>{{ $data->team_leader }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <select name="intention_finalist_status" id="intention_finalist_status"
                                            class="
                                                <?php if($data->status_finalist === '1'){echo('dd-blue');}
                                                elseif($data->status_finalist === '0'){echo('dd-yellow');} ?>
                                            "
                                            onchange="this.form.submit()">
                                                <option class="dd-blue" value="1" <?php if($data->status_finalist === '1') {echo('selected');}?>>Finalist</option>
                                                <option class="dd-yellow" value="0" <?php if($data->status_finalist === '0') {echo('selected');}?>>Participant</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        @if ($data->proposal_link !== null)
                                            <a href="{{ $data->proposal_link }}">Link Proposal</a>
                                        @else
                                            Not Uploaded
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->app_link !== null)
                                            <a href="{{ $data->app_link }}">Link Product</a>
                                        @else
                                            Not Uploaded
                                        @endif
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