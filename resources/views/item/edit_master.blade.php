@extends('layout.v_template')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Edit Item</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Edit-Item</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<div class="content-header">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title"> Edit Data Item</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form action="{{url('update_item',$a->id)}}" method="post" class="form-horizontal">
				{{csrf_field()}}
				<div class="card-body">
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Kode</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="kode_item" id="kode_item" value="{{$a->kode_item}}">
						</div>
					</div>
                    <div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nama_item" id="nama_item" value="{{$a->nama_item}}">
						</div>
					</div>
                    <div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Jenis</label>
						<div class="col-sm-10">
							<select class="select2" name="jenis_item" style="width: 100%;">
                                @if ($a->jenis_item=="Consumeble")
                                <option selected>Consumeble</option>
                                <option>Nonconsumeble</option>
                                @else
                                <option>Consumeble</option>
                                <option selected>Nonconsumeble</option>
                                @endif
                            </select>
						</div>
					</div>
                    <div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Stok</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="stok_item" id="stok_item" value="{{$a->stok_item}}">
						</div>
					</div>
                    <div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Satuan</label>
						<div class="col-sm-10">
                            <select class="select2" name="satuan" style="width: 100%;">
                                @if ($a->satuan=="Pcs")
                                <option selected>Pcs</option>
                                <option>Pallet</option>
                                @else
                                <option>Pcs</option>
                                <option selected>Pallet</option>
                                @endif
                            </select>
						</div>
					</div>
                    <div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Kondisi</label>
						<div class="col-sm-10">
                            <select class="select2" name="kondisi" style="width: 100%;">
                                @if ($a->kondisi=="Baik")
                                <option selected>Baik</option>
                                <option>Rusak</option>
                                <option>Maintenance</option>
                                @elseif ($a->kondisi=="Rusak")
                                <option>Baik</option>
                                <option selected>Rusak</option>
                                <option>Maintenance</option>
                                @else
                                <option>Baik</option>
                                <option>Rusak</option>
                                <option selected>Maintenance</option>
                                @endif
                            </select>
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
