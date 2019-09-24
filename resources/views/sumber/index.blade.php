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
                                <h3 class="panel-title">Tabel Referensi Sumber Dana</h3>
                                <div class="right">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i
                                            class="lnr lnr-plus-circle"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-lg table-hover">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode sumber</th>
                                        <th widht="200">Nama Sumber Dana</th>
                                        <th width="100">AKSI</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $no=1;
                                    @endphp
                                    @foreach ($data as $key =>$sumber)
                                        {{-- <td>{{$loop->index+1}}</td> --}}
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$sumber->kd_sumber}}</td>
                                            <td>{{$sumber->nm_sumber}}</td>
                                            <td>
                                                <a href="/sumber/{{$sumber->kd_sumber}}/edit" <span
                                                    class="lnr lnr-pencil"> </span></a>
                                                <a href="/sumber/{{$sumber->kd_sumber}}/delete" <span class="lnr lnr-exit"
                                                                                                onclick="return confirm('Yakin Hapus Data!!')"> </span></a>
                                            
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $sumber->paginate() }}
                            
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
                    <h5 class="modal-title" id="exampleModalLabel"> Tambah Data Sumber Dana</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <form action="/sumber/create" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Sumber</label>
                            <input type="text" name="kd_sumber" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Kode Sumber Dana">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Sumber</label>
                            <input type="text" name="nm_sumber" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Nama Sumber Dana">
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

