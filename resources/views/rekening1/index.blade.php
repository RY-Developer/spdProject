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
                  <h3 class="panel-title">Referensi Rekening 1</h3>
                                    <form class="navbar-form navbar-right" action="/rekening1" method="GET">
                                        <div class="input-group">
                                            <input name="cari" type="text" value="" class="form-control"
                                                   placeholder="Search Rekening 1...">
                                            <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
                                        </div>
                                    </form>
                  <div class="right">
                  <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                        <th>Kd Rek</th>
                        <th>Nama Rekening</th>
                        <th>Update</th>
                        <th>AKSI</th>
                      </tr>
										</thead>
										<tbody>
											@foreach ($rek1 as $key =>$rek1)
                      <tr>
                        <td>{{$rek1->kd_rek_1}}</td>
                        <td>{{$rek1->nm_rek_1}}</td>
                        <td>{{$rek1->updated_at}}</td>
                        <td>
                          <a href="/rekening1/{{$rek1->id}}/edit" <span class="lnr lnr-pencil"> </span></a>
                          <a href="/rekening1/{{$rek1->id}}/delete" <span class="lnr lnr-exit" onclick="return confirm('Yakin Hapus Data!!')"> </span></a>
                          
                        </td>
                      </tr>
                      @endforeach
										</tbody>
									</table>
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
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Data Rekening 1</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
                <form action="/rekening1/create" method="post">
                  @csrf
                  <div class="form-group">
                      <label for="exampleInputEmail1">Kode Rekening</label>
                      <input type="text" name="kd_rek_1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Rekening">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Rekening</label>
                      <input type="text" name="nm_rek_1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Rekening">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
          </div>
        </div>
@endsection
