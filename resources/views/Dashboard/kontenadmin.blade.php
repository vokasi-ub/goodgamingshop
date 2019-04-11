@extends('Admin.loby')
@section('adminkonten')
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
              </div>
                <div class="card-footer ">
                <hr>
                <div class="stats">
                 <a href="{{route('Dashboard.kontentambah')}}" class="btn btn-warning"> + Tambah PRODUK</a>
                </div>
              </div>
            </div>
          </div>
        </div>

  <form action="{{ url()->current() }}">
    <div class="col-md-11">
        <input type="text" name="keyword" class="form-control" placeholder="Search nama produk">
    </div>
    <div class="col-md-1">
        <button type="submit" class="btn btn-primary">
            Search
        </button>
    </div>
</form>

        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">PRODUK</h5>
              </div>
              <div class="card-body ">
                <table border="1" style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;">
				<tr>
					
					<th style="text-align: center;">no_produk</th>
					<th style="text-align: center;">brand</th>
					<th style="text-align: center;">kategori</th>
					<th style="text-align: center;">Nama</th>
					<th style="text-align: center;">deskirpsi</th>
					<th style="text-align: center;">harga</th>
          <th style="text-align: center;">GAMBAR</th>
          <th style="text-align: center;">Action</th>

				</tr>
        
				@foreach($produk as $p)
			<tr>
        <td style="text-align: center;">{{ $p->id_produk }}</td>
				<td style="text-align: center;">{{ $p->brand->nama_merek }}</td>
				<td style="text-align: center;">{{ $p->kategori->nama_kategori }}</td>
				<td style="text-align: center;">{{ $p->nama_produk }}</td>
				<td style="text-align: center;">{{ $p->deskripsi }}</td>
				<td style="text-align: center;">{{ $p->harga }}</td>
        <td style="text-align: center;"><img width="200px" height="200px" src="{{asset('/image/'.$p->gambar)}}">></td>
        <td>
        <center>
          <a href="/admin/edit/{{ $p->id_produk}} " class="btn btn-success">Edit</a>
        |
          <a href="/admin/destroy/{{ $p->id_produk }}" class="btn btn-danger">Hapus</a>
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