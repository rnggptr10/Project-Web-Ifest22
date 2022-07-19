@extends('admin.admin')

@section('admin_head')
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="stylesheet" href="{{ URL::asset('css/generalStyle.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
@endsection

@section('admin_title', 'Technopreneur Workshop')

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
                            <th scope="col">Bukti Bayar</th>
                            <th scope="col">Status Konfirmasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($techno_ws as $data)
                            <tr>
                                <form action="{{ route('admin-techno-ws-change-status-pembayaran') }}" method="post">
                                    @method('put')
                                    @csrf
                                    <td><input name="techno_ws_email" id="techno_ws_email" value="{{ $data->email }}" hidden>{{ $data->email }}</td>
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
                                    <td><a href="{{asset('storage/' . $data['proof_payment'])}}"> Proof Payment</a></td>
                                    <td>
                                        <div class="btn-group">
                                            <select name="techno_ws_payment_status" id="techno_ws_payment_status"
                                            class="
                                                <?php if($data->status_pembayaran === '2'){echo('dd-green');}
                                                elseif($data->status_pembayaran === '1'){echo('dd-orange');} 
                                                elseif($data->status_pembayaran === '0'){echo('dd-red');} ?>
                                            "
                                            onchange="this.form.submit()">
                                                <option class="dd-green" value="2" 
                                                <?php if ($data->status_pembayaran === '2') {echo ('selected');} ?>>Confirmed</option>
                                                <option class="dd-orange" value="1" 
                                                <?php if ($data->status_pembayaran === '1') {echo ('selected');} ?>>Pending</option>
                                                <option class="dd-red" value="0" 
                                                <?php if ($data->status_pembayaran === '0') {echo ('selected');} ?>>Declined</option>
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
            <h1 class="text-table-title ">Data Workshop</h1>
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
                            <th scope="col">Link Pitchdeck 1</th>
                            <th scope="col">Link Pitchdeck 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($techno_ws as $data)
                            <tr>
                                <form action="{{ route('admin-techno-ws-change-status-tim') }}" method="post">
                                    @method('put')
                                    @csrf
                                    <td hidden><input name="techno_ws_email" id="techno_ws_email" value="{{ $data->email }}" hidden>{{ $data->email }}</td>
                                    <td>{{ $data->team_name }}</td>
                                    <td>{{ $data->team_leader }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <select name="techno_ws_selected_status" id="techno_ws_selected_status"
                                            class="
                                                <?php if($data->selected_team === '2'){echo('dd-blue');}
                                                elseif($data->selected_team === '1'){echo('dd-yellow');} 
                                                elseif($data->selected_team === '0'){echo('dd-maroon');} ?>
                                            "
                                            onchange="this.form.submit()">
                                                <option class="dd-blue" value="2" 
                                                <?php if ($data->selected_team === '2') {echo ('selected');} ?>>Selected</option>
                                                <option class="dd-yellow" value="1" 
                                                <?php if ($data->selected_team === '1') {echo ('selected');} ?>>Pending</option>
                                                <option class="dd-maroon" value="0" 
                                                <?php if ($data->selected_team === '0') { echo ('selected');} ?>>Unselected</option>
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
                                        @if ($data->pitcdeck1_link !== null)
                                            <a href="{{ $data->pitcdeck1_link }}">Link Pitchdeck 1</a>
                                        @else
                                            Not Uploaded
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->pitcdeck2_link !== null)
                                            <a href="{{ $data->pitcdeck2_link }}">Link Pitchdeck 2</a>
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