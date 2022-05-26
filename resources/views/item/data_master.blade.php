@extends('layout.v_template')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Master Data</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Master Data</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<section class="content">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title"><td>
				<a href="{{route('create_master')}}"><button type="button" class="btn btn-block btn-primary">Create Data</button></a>
			</td></h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						{{-- <th>Id</th> --}}
						<th>Kode</th>
						<th>Nama</th>
						<th>Jenis</th>
						<th>Stok</th>
						<th>Satuan</th>
						<th>Kondisi</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($dtItem as $a)
					<tr>
						{{-- <td>{{$a->id}}</td> --}}
						<td>{{$a->kode_item}}</td>
						<td>{{$a->nama_item}}</td>
						<td>{{$a->jenis_item}}</td>
						<td>{{$a->stok_item}}</td>
						<td>{{$a->satuan}}</td>
						<td>{{$a->kondisi}}</td>

						<td>
							<a href="{{url('edit_master',$a->id)}}"><i class="fas fa-edit"></i></a>
							||
							<a href="{{url('delete_item',$a->id)}}"><i class="fas fa-trash" style="color:red"></i></a>
						</td>

					</tr>
					@endforeach
				</tfoot>
			</table>
		</div>
		<!-- /.card-body -->
	</div>
	</section>

    @include('sweetalert::alert')
  <!-- /.content-wrapper -->
  @endsection




