@extends('layout.master')

@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
              <div class="panel">
                  <div class="panel-heading">
                    <h3 class="panel-title">Edit Data Urusan</h3>
                  </div>
                  <div class="panel-body">
                      <form action="/urusan/{{$urusan->id}}/update" method="post">
                        {{-- @method('post') --}}
                        @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Rekening 1</label>
                          <input type="text" name="kd_rek_1" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="Kode Urusan"
                                 value="{{$urusan->kd_urusan}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Rekening 2</label>
                          <input type="text" name="kd_rek_2" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="Nama Urusan"
                                 value="{{$urusan->nm_urusan}}">
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
