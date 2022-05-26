@extends('layout.v_template')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Edit Gudang</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Edit-Gudang</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<div class="content-header">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title"> Edit Data Gudang</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form action="{{url('update_gudang',$a->id)}}" method="post" class="form-horizontal">
				{{csrf_field()}}
				<div class="card-body">
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Kode</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="kode_gudang" id="kode_gudang" value="{{$a->kode_gudang}}">
						</div>
					</div>
                    <div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nama_gudang" id="nama_gudang" value="{{$a->nama_gudang}}">
						</div>
					</div>
                    <div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Lokasi</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="lokasi_gudang" id="lokasi_gudang" value="{{$a->lokasi_gudang}}">
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
	</div>

    @endsection
