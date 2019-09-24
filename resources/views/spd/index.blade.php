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
                                        <th width="200">No SPD / Tgl Spd</th>
                                        <th>Kode Urusan</th>
                                        <th>Kode Bidang</th>
                                        <th>Kode Unit</th>
                                        <th>Kode Sub</th>
                                        <th width="">Uraian</th>
                                        <th width="100">AKSI</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $no=1;
                                    @endphp
                                    @foreach ($data as $key =>$spd)
                                        {{-- <td>{{$loop->index+1}}</td> --}}
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$spd->tahun}}</td>
                                            <td>{{$spd->no_spd}} {{$spd->tgl_spd}}</td>
                                            <td>{{$spd->kd_urusan}}</td>
                                            <td>{{$spd->kd_bidang}}</td>
                                            <td>{{$spd->kd_unit}}</td>
                                            <td>{{$spd->kd_sub}}</td>
                                            <td>{{$spd->uraian}}</td>
                                            <td>
                                                <a href="/spdrincian/{{$spd->id}}/edit" <span
                                                    class="lnr lnr-pencil"> </span></a>
                                                <a href="/urusan/{{$spd->id}}/delete" <span class="lnr lnr-exit"
                                                                                                onclick="return confirm('Yakin Hapus Data!!')"> </span></a>
                                            
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $spd->paginate() }}
                            
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

