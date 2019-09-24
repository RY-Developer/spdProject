@extends('layout.master')

@section('content')
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- TABLE HOVER -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tabel SPD Rincian</h3>
                                <div class="right">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i
                                            class="lnr lnr-plus-circle"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-lg table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tahun</th>
                                        <th>No SPD</th>
                                        <th>No Id</th>
                                        <th>Kode Urusan</th>
                                        <th>Kode Bidang</th>
                                        <th>Kode Unit</th>
                                        <th>Kode Sub</th>
                                        <th>Kode Prog</th>
                                        <th>Id Prog</th>
                                        <th>Kode Keg</th>
                                        <th>R1</th>
                                        <th>R2</th>
                                        <th>R3</th>
                                        <th>R4</th>
                                        <th>R5</th>
                                        <th widht="200">Nilai</th>
                                        <th width="100">AKSI</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $no=1;
                                    @endphp
                                    @foreach ($data as $key =>$sr)
                                        {{-- <td>{{$loop->index+1}}</td> --}}
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$sr->tahun}}</td>
                                            <td>{{$sr->no_spd}}</td>
                                            <td>{{$sr->no_id}}</td>
                                            <td>{{$sr->kd_urusan}}</td>
                                            <td>{{$sr->kd_bidang}}</td>
                                            <td>{{$sr->kd_unit}}</td>
                                            <td>{{$sr->kd_sub}}</td>
                                            <td>{{$sr->kd_prog}}</td>
                                            <td>{{$sr->id_prog}}</td>
                                            <td>{{$sr->kd_keg}}</td>
                                            <td>{{$sr->kd_rek_1}}</td>
                                            <td>{{$sr->kd_rek_2}}</td>
                                            <td>{{$sr->kd_rek_3}}</td>
                                            <td>{{$sr->kd_rek_4}}</td>
                                            <td>{{$sr->kd_rek_5}}</td>
                                            <td>{{$sr->nilai}}</td>
                                            <td>
                                                <a href="/spdrincian/{{$sr->id}}/edit" <span
                                                    class="lnr lnr-pencil"> </span></a>
                                                <a href="/urusan/{{$sr->id}}/delete" <span class="lnr lnr-exit"
                                                                                                onclick="return confirm('Yakin Hapus Data!!')"> </span></a>
                                            
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $sr->paginate() }}
                            
                            </div>
                        </div>
                        <!-- END TABLE HOVER -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- END MAIN CONTENT -->
    
    <!-- MODAL CONTENT -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Tambah Data Urusan 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <form action="/urusan/create" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Urusan</label>
                            <input type="text" name="kd_urusan" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Kode Rekening 1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Urusan</label>
                            <input type="text" name="nm_urusan" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Kode Rekening 2">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- END MODAL CONTENT -->
@stop

