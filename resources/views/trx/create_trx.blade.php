@extends('layout.v_template')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Transaksi</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Transaksi</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Peminjam</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Kode Transaksi</label>
                  <input type="text" id="inputName" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Nama Peminjam</label>
                  <select class="select2" name="kode_peminjam" style="width: 100%;">
                    <option selected disabled>----------</option>
                    <option>Rangga</option>
                    <option>Ali</option>
                    <option>Rajib</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputStatus">Tanggal Transaksi</label>
                  <input type="date" id="inputName" class="form-control">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Data Equipment</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="#" method="post" class="form-horizontal">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-6 col-form-label">Nama Equipment</label>
                            <div class="col-sm-12">
                                <select class="select2" name="jenis_item" style="width: 100%;">
                                    <option>Pilih Jenis Equipment</option>
                                    <option>Camera 360</option>
                                    <option>Tabung Selam</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputStatus" class="col-sm-6 col-form-label">Jumlah</label>
                            <div class="col-sm-12">
                            <input type="number" id="inputName" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputStatus" class="col-sm-6 col-form-label">Satuan</label>
                            <div class="col-sm-12">
                            <input type="number" id="inputName" class="form-control" readonly>
                            </div>
                          </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Submit</button>

                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
          </div>
        </div>

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Equipment</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama Equipment</th>
                    <th>Jumlah</th>
                    <th style="width: 40px">Kondisi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>Update software</td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-danger">55%</span></td>
                  </tr>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>


        <div class="row">
          <div class="col-12">
            <a href="#" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Create new Porject" class="btn btn-success float-right">
          </div>
        </div>
        <br>
        <br>
      </section>
      <!-- /.content -->

    @include('sweetalert::alert')
  <!-- /.content-wrapper -->
  @endsection
