@extends('Admin.loby')
@section('adminkonten')

	<h2><center>Tambah Produk</center></h2>
 
	<a href="{{route('Dashboard.kontenadmin')}}"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/tambahkonten" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<label>Brand</label>
		<select id="id_merek" class="form-control" name="id_merek" >
			<div class="from-group">
		@foreach($brand as $b)
			<option value="{{$b->id_merek}}">{{$b->nama_merek}}</option>
		@endforeach
			</div>
		</select>

		<label>kategori</label>
		<select id="id_kategori" class="form-control" name="id_kategori" >
			<div class="from-group">
		@foreach($kategori as $k)
			<option value="{{$k->id_kategori}}">{{$k->nama_kategori}}</option>
		@endforeach
			</div>
		</select>
		<label>nama produk</label>
		<input type="text" name="nama_produk" required="required" class="form-control"> <br/>
		<label>Deskripsi</label>
		<textarea type="text" name="deskripsi" required="required" class="form-control"></textarea> <br/>
		<label>Harga</label>
		<input type="text" name="harga" required="required" class="form-control"> <br/>
		<label>Gambar</label>
		<input type="file" name="gambar" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

@endsection