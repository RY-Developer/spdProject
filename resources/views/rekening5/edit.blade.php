@extends('layout.master')

@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
      <div class="container-fluid">
        <h3 class="page-title">Tabel Rekening</h3>
        <div class="row">
          <div class="col-lg-12">
              <div class="panel">
                  <div class="panel-heading">
                    <h3 class="panel-title">Inputs</h3>
                  </div>
                  <div class="panel-body">
                      <form action="/rekening5/{{$rek5->id}}/update" method="post">
                        {{-- @method('post') --}}
                        @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Rekening 1</label>
                          <input type="text" name="kd_rek_1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Rekening 1" value="{{$rek5->kd_rek_1}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Rekening 2</label>
                          <input type="text" name="kd_rek_2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Rekening 2" value="{{$rek5->kd_rek_2}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Rekening 3</label>
                          <input type="text" name="kd_rek_3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Rekening 3" value="{{$rek5->kd_rek_3}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Rekening 4</label>
                          <input type="text" name="kd_rek_4" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Rekening 4" value="{{$rek5->kd_rek_4}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Rekening 5</label>
                          <input type="text" name="kd_rek_5" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Rekening 5" value="{{$rek5->kd_rek_5}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Rekening 5</label>
                            <input type="text" name="nm_rek_5" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Rekening" value="{{$rek5->nm_rek_5}}">
                          </div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>
</div>
@stop