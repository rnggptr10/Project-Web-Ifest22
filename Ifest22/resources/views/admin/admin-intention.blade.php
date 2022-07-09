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
                        <tr>
                            <td>testes123@gmail.com</td>
                            <td>Mbut Geng</td>
                            <td>Jujuk Margono - Universitas Gajah Duduk - Id Card</td>
                            <td>Jujuk Margono - Universitas Gajah Duduk - Id Card</td>
                            <td>Jujuk Margono - Universitas Gajah Duduk - Id Card</td>
                            <td>Jujuk Margono - Universitas Gajah Duduk - Id Card</td>
                            <td>Jujuk Margono - Universitas Gajah Duduk - Id Card</td>
                            <td>Proof Payment</td>
                            <td>
                                <div class="btn-group">
                                    <!-- <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Confirmed
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div> -->
                                    <select name="confirm-status" id="confirm-status" style="color:black">
                                        <option value="Confirmed">Confirmed</option>
                                        <option value="Pending" active>Pending</option>
                                        <option value="Declined">Declined</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>testes123@gmail.com</td>
                            <td>Mbut Geng</td>
                            <td>Jujuk Margono - Universitas Gajah Duduk - Id Card</td>
                            <td>Jujuk Margono - Universitas Gajah Duduk - Id Card</td>
                            <td>Jujuk Margono - Universitas Gajah Duduk - Id Card</td>
                            <td>Jujuk Margono - Universitas Gajah Duduk - Id Card</td>
                            <td>Jujuk Margono - Universitas Gajah Duduk - Id Card</td>
                            <td>Proof Payment</td>
                            <td>
                                <select name="confirm-status" id="confirm-status" style="color:black">
                                    <option value="Confirmed">Confirmed</option>
                                    <option value="Pending" active>Pending</option>
                                    <option value="Declined">Declined</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>testes123@gmail.com</td>
                            <td>Mbut Geng</td>
                            <td>Jujuk Margono - Universitas Gajah Duduk - Id Card</td>
                            <td>Jujuk Margono - Universitas Gajah Duduk - Id Card</td>
                            <td>Jujuk Margono - Universitas Gajah Duduk - Id Card</td>
                            <td>Jujuk Margono - Universitas Gajah Duduk - Id Card</td>
                            <td>Jujuk Margono - Universitas Gajah Duduk - Id Card</td>
                            <td>Proof Payment</td>
                            <td>
                                <select name="confirm-status" id="confirm-status" style="color:black">
                                    <option value="Confirmed">Confirmed</option>
                                    <option value="Pending" active>Pending</option>
                                    <option value="Declined">Declined</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center" style="padding-bottom: 10px;">
            <h1 class="text-table-title ">Data Project Lomba</h1>
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
                        <tr>
                            <td>Mbut Geng</td>
                            <td>Jujuk Margono</td>
                            <td>
                                <div class="btn-group">
                                    <!-- <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Confirmed
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div> -->
                                    <select name="confirm-status" id="confirm-status" style="color:black">
                                        <option value="Confirmed">Confirmed</option>
                                        <option value="Pending" active>Pending</option>
                                        <option value="Declined">Declined</option>
                                    </select>
                                </div>
                            </td>
                            <td>Link</td>
                            <td>Link</td>
                        </tr>
                        <tr>
                        <td>Mbut Geng</td>
                            <td>Jujuk Margono</td>
                            <td>
                                <div class="btn-group">
                                    <select name="confirm-status" id="confirm-status" style="color:black">
                                        <option value="Confirmed">Confirmed</option>
                                        <option value="Pending" active>Pending</option>
                                        <option value="Declined">Declined</option>
                                    </select>
                                </div>
                            </td>
                            <td>Link</td>
                            <td>Link</td>
                        </tr>
                        <tr>
                            <td>Mbut Geng</td>
                            <td>Jujuk Margono</td>
                            <td>
                                <div class="btn-group">
                                    <select name="confirm-status" id="confirm-status" style="color:black">
                                        <option value="Confirmed">Confirmed</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Declined">Declined</option>
                                    </select>
                                </div>
                            </td>
                            <td>Link</td>
                            <td>Link</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection