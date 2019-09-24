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
                                <h3 class="panel-title">Tabel Referensi Unit</h3>
                                <div class="right">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i
                                            class="lnr lnr-plus-circle"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-lg table-hover table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Urusan</th>
                                        <th>Kode Bidang</th>
                                        <th>Kode Unit</th>
                                        <th widht="200">Nama Unit</th>
                                        <th width="100" colspan="2">AKSI</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $no=1;
                                    @endphp
                                    @foreach ($data as $key =>$unit)
                                        <tr align="center">
                                            <td>{{$no++}}</td>
                                            <td>{{$unit->kd_urusan}}</td>
                                            <td>{{$unit->kd_bidang}}</td>
                                            <td>{{$unit->kd_unit}}</td>
                                            <td align="left">{{$unit->nm_unit}}</td>
                                            <td>
                                                <a href="/unit/{{$unit->id}}/edit" <span
                                                    class="lnr lnr-pencil"> </span></a>
                                            </td>
                                            <td>
                                                <a href="/unit/{{$unit->id}}/delete" <span class="lnr lnr-exit"
                                                                                                onclick="return confirm('Yakin Hapus Data!!')"> </span></a>
                                            
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $unit->paginate() }}
                            
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Data Unit 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <form action="/unit/create" method="post">
                        @csrf
                       
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Urusan</label>
                            <input type="text" name="kd_urusan" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Please Entry Kode Urusan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Bidang</label>
                            <input type="text" name="kd_bidang" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Please Entry Kode Bidang">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Unit</label>
                            <input type="text" name="kd_unit" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Please Entry Kode Unit">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Unit</label>
                            <input type="text" name="nm_unit" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Please Entry Nama Unit">
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
