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
                      <form action="/subunit/{{$subunit->id}}/update" method="post">
                        {{-- @method('post') --}}
                        @csrf
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Urusan</label>
                          <input type="text" name="kd_urusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Urusan" value="{{$subunit->kd_urusan}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Bidang</label>
                          <input type="text" name="kd_bidang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Bidang" value="{{$subunit->kd_bidang}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Unit</label>
                          <input type="text" name="kd_unit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Unit" value="{{$subunit->kd_unit}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Sub Unit</label>
                          <input type="text" name="kd_sub" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Sub Unit" value="{{$subunit->kd_sub}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Sub Unit</label>
                            <input type="text" name="nm_sub_unit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Sub Unit" value="{{$subunit->nm_sub_unit}}">
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
