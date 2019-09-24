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
                      <form action="/rekening1/{{$rek1->id}}/update" method="post">
                        {{-- @method('post') --}}
                        @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Rekening</label>
                          <input type="text" name="kd_rek_1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Rekening" value="{{$rek1->kd_rek_1}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Rekening</label>
                            <input type="text" name="nm_rek_1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Rekening" value="{{$rek1->nm_rek_1}}">
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

@section('content1')
<h1>Edit Data</h1>
  @if (session('success'))
  <div class="alert alert-info" role="alert">
      {{ session ('success') }}
  </div>
  @endif
  <div class="row">
    <div class="col-lg-12">
    <form action="/rekening1/{{$rek1->id}}/update" method="post">
      {{-- @method('post') --}}
      @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Kode Rekening</label>
          <input type="text" name="kd_rek_1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Rekening" value="{{$rek1->kd_rek_1}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Rekening</label>
            <input type="text" name="nm_rek_1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Rekening" value="{{$rek1->nm_rek_1}}">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
  </div>
@endsection