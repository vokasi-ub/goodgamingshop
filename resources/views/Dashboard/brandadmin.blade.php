@extends('Admin.loby')
@section('adminkonten')


        <<div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="{{route('Dashboard.brandtambah')}}" class="btn btn-warning"> + Tambah BRAND</a>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">BRAND</h5>
              </div>
              <div class="card-body ">
                <table border="1" style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;">
				<tr>
					
					<th style="text-align: center;">NO</th>
					<th style="text-align: center;">brand</th>
          <th style="text-align: center;">action</th>
					

				</tr>
				@foreach($brand as $b)
			<tr>
				<td style="text-align: center;">{{ $b->id_merek }}</td>
				<td style="text-align: center;">{{ $b->nama_merek }}</td>
        <td>
        <center>
          <a href="/brand/edit/{{ $b->id_merek}}" class="btn btn-success">Edit</a>
        |
          <a href="/brand/destroy/{{ $b->id_merek }}" class="btn btn-danger">Hapus</a>
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