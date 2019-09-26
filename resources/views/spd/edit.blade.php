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
                      <form action="/spd/{{$spd->id}}/update" method="post">
                        {{-- @method('post') --}}
                        @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="Periode Tahun"
                                 value="{{$spd->tahun}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nomor SPD</label>
                          <input type="text" name="no_spd" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="Nomor SPDs"
                                 value="{{$spd->no_spd}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Urusan</label>
                          <input type="text" name="kd_urusan" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="Kode Urusan"
                                 value="{{$spd->kd_urusan}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Bidang</label>
                          <input type="text" name="kd_bidang" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="Kode Bidang"
                                 value="{{$spd->kd_bidang}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Unit</label>
                          <input type="text" name="kd_unit" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="Kode Unit"
                                 value="{{$spd->kd_unit}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Sub Unit</label>
                          <input type="text" name="kd_sub" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="Kode Sub"
                                 value="{{$spd->kd_sub}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Uraian</label>
                          <input type="text" name="uraian" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="Uraian"
                                 value="{{$spd->uraian}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Pejabat Penandatangan</label>
                          <input type="text" name="nm_penandatangan" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="Pejabat Penandatangan"
                                 value="{{$spd->nm_penandatangan}}">
                          </div>                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nip Penandatangan</label>
                          <input type="text" name="nip_penandatangan" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="Nip Penandatangan"
                                 value="{{$spd->nip_penandatangan}}">
                          </div>                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">Jabatan Penandatangan</label>
                          <input type="text" name="jbt_penandatangan" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp" placeholder="Jabatan Penandatangan"
                                 value="{{$spd->jbt_penandatangan}}">
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
