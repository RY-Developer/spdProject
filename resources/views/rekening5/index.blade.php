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
                                <h3 class="panel-title">Tabel Referensi Rekening 5</h3>
                                <div class="right">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i
                                            class="lnr lnr-plus-circle"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-lg table-hover table-bordered">
                                    <thead>
                                    <tr align="40">
                                        <th align="center" width="20">No</th>
                                        <th>R1</th>
                                        <th>R2</th>
                                        <th>R3</th>
                                        <th>R4</th>
                                        <th>R5</th>
                                        <th widht="200">Nama Rekening</th>
                                        <th width="100">AKSI</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $no=1;
                                    @endphp
                                    @foreach ($rek5 as $key =>$rek5)
                                        {{-- <td>{{$loop->index+1}}</td> --}}
                                        <tr align="center">
                                            <td>{{$no++}}</td>
                                            <td>{{$rek5->kd_rek_1}}</td>
                                            <td>{{$rek5->kd_rek_2}}</td>
                                            <td>{{$rek5->kd_rek_3}}</td>
                                            <td>{{$rek5->kd_rek_4}}</td>
                                            <td>{{$rek5->kd_rek_5}}</td>
                                            <td align="left">{{$rek5->nm_rek_5}}</td>
                                            <td>
                                                <a href="/rekening5/{{$rek5->id}}/edit" <span
                                                    class="lnr lnr-pencil"> </span></a>
                                                <a href="/rekening5/{{$rek5->id}}/delete" <span class="lnr lnr-exit"
                                                                                                onclick="return confirm('Yakin Hapus Data!!')"> </span></a>
                                            
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $rek5->paginate() }}
                            
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Data Rekening 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <form action="/rekening5/create" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Rekening-1</label>
                            <input type="text" name="kd_rek_1" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Kode Rekening 1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Rekening-2</label>
                            <input type="text" name="kd_rek_2" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Kode Rekening 2">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Rekening-3</label>
                            <input type="text" name="kd_rek_3" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Kode Rekening 3">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Rekening-4</label>
                            <input type="text" name="kd_rek_4" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Kode Rekening 4">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Rekening-5</label>
                            <input type="text" name="kd_rek_5" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Kode Rekening 5">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Rekening 5</label>
                            <input type="text" name="nm_rek_5" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Nama Rekening 5">
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

{{--<script>--}}
{{--$(document).ready(function(){--}}
{{--$('#rekening5_table').DataTable({--}}
{{--processing : true,--}}
{{--serverside : true,--}}
{{--ajax{--}}
{{--url: "{{ route('rekening5.index') }}"--}}
{{--},--}}
{{--columns:[--}}
{{--{--}}
{{--data : 'image',--}}
{{--name : 'image',--}}
{{--render: function(data, type, full, meta){--}}
{{--// return "<img src={{ URL::to('/') }}/images/" + data + " width='70' class='img-thumbnail' />";--}}
{{--},--}}
{{--orderable: false,--}}
{{--},--}}
{{--{--}}
{{--data : 'kd_rek_1',--}}
{{--name : 'kd_rek_1'--}}
{{--},--}}
{{--{--}}
{{--data : 'kd_rek_2',--}}
{{--name : 'kd_rek_2'--}}
{{--},--}}
{{--{--}}
{{--data : 'action',--}}
{{--name : 'action',--}}
{{--orderable: false--}}
{{--}--}}
{{--]--}}
{{--});--}}
{{--});--}}
{{--</script>--}}
