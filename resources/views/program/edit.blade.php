@extends('layout.master')

@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
      <div class="container-fluid">
        <h3 class="page-title">Tabel Referensi Kegiatan</h3>
        <div class="row">
          <div class="col-lg-12">
              <div class="panel">
                  <div class="panel-heading">
                    <h3 class="panel-title">Inputs</h3>
                  </div>
                  <div class="panel-body">
                      <form action="/program/{{$program->id}}/update" method="post">
                        {{-- @method('post') --}}
                        @csrf
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Urusan</label>
                          <input type="text" name="kd_urusan" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="Kode Urusan"
                                 value="{{$program->kd_urusan}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Bidang</label>
                          <input type="text" name="kd_bidang" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="Kode Bidang"
                                 value="{{$program->kd_bidang}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Prog</label>
                          <input type="text" name="kd_prog" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="Kode Unit" value="{{$program->kd_prog}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Keterangan Program</label>
                            <input type="text" name="ket_program" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Keterangan Program"
                                   value="{{$program->ket_program}}">
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
