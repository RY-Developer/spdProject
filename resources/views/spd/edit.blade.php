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
                      <form action="/spdrincian/{{$spdrincian->id}}/update" method="post">
                        {{-- @method('post') --}}
                        @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Rekening 1</label>
                          <input type="text" name="tahun" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="Periode Tahun"
                                 value="{{$spdrincian->tahun}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nomor SPD</label>
                          <input type="text" name="no_spd" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="Nomor SPDs"
                                 value="{{$spdrincian->no_spd}}">
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
