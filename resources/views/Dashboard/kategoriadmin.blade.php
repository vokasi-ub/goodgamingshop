@extends('Admin.loby')
@section('adminkonten')


        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="{{route('Dashboard.kategoritambah')}}" class="btn btn-warning"> + Tambah Kategori</a>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">kategori</h5>
              </div>
              <div class="card-body ">
                <table border="1" style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;">
				<tr>
					
					<th style="text-align: center;">id_kategori</th>
					<th style="text-align: center;">kategori</th>
					<th style="text-align: center;">Action</th>

				</tr>
				@foreach($kategori as $k  )
			<tr>
				<td style="text-align: center;">{{ $k->id_kategori }}</td>
				<td style="text-align: center;">{{ $k->nama_kategori }}</td>
				<td>
        <center>
          <a href="/kategori/edit/{{ $k->id_kategori}}" class="btn btn-success">Edit</a>
        |
          <a href="/kategori/destroy/{{ $k->id_kategori }}" class="btn btn-danger">Hapus</a>
        </center>
      </td>
			</tr>
		@endforeach
	</table>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                </div>
              </div>
            </div>
          </div>
        </div>
  
@endsection