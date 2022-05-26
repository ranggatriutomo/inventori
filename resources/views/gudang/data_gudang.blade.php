@extends('layout.v_template')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Master Gudang</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Master Gudang</li>
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
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                    Create Data
                  </button>
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
						<th>Lokasi</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($dtGudang as $a)
					<tr>
						{{-- <td>{{$a->id}}</td> --}}
						<td>{{$a->kode_gudang}}</td>
						<td>{{$a->nama_gudang}}</td>
						<td>{{$a->lokasi_gudang}}</td>

						<td>
                            <a href="{{url('edit_gudang',$a->id)}}"><i class="fas fa-edit"></i></a>
							||
							<a href="{{url('delete_gudang',$a->id)}}"><i class="fas fa-trash" style="color:red"></i></a>
						</td>

					</tr>
					@endforeach
				</tfoot>
			</table>
		</div>
		<!-- /.card-body -->
	</div>

	</section>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Create Data Gudang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{route('save_gudang')}}" method="post" class="form-horizontal">
    {{csrf_field()}}
    <div class="card-body">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Kode</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kode_gudang" id="kode_gudang" placeholder="Kode">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_gudang" id="nama_gudang" placeholder="Gudang">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="lokasi_gudang" id="lokasi_gudang" placeholder="Lokasi">
            </div>
        </div>

    </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


    @include('sweetalert::alert')
  <!-- /.content-wrapper -->
  @endsection




