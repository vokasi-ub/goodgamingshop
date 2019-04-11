@extends('Admin.loby')
@section('adminkonten')

	<h3>Edit KATEGORI</h3>
 
	<a href="{{route('Dashboard.kontenadmin')}}" class="btn btn-primary"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($produks as $p)
	<form action="/admin/update" enctype="multipart/form-data" method="post" >
		{{ csrf_field() }}
		<input type="hidden" name="id_produk" value="{{ $p->id_produk }}"> <br/>
		
		<label>Brand</label>
		<select id="id_merek" class="form-control" name="id_merek" >
			<div class="from-group">
		@foreach($brand as $b)
		@if($b->id_merek == $p->id_merek)
			<option selected="selected" value="{{$b->id_merek}}">{{$b->nama_merek}}</option>
		@else
			<option value="{{$b->id_merek}}">{{$b->nama_merek}}</option>
		@endif
		@endforeach
			</div>
		</select>

		<label>kategori</label>
		<select id="id_kategori" class="form-control" name="id_kategori" >
			<div class="from-group">
		@foreach($kategori as $k)
		@if($k->id_kategori == $p->id_kategori)
			<option selected="selected" value="{{$k->id_kategori}}">{{$k->nama_kategori}}</option>
		@else	
			<option value="{{$k->id_kategori}}">{{$k->nama_kategori}}</option>
		@endif	
		@endforeach
			</div>
		</select>
		<label>Nama Produk</label>
		<input type="text" required="required" name="nama_produk" value="{{ $p->nama_produk }}" class="form-control"> <br/>
		<label>Deskripsi</label>
		<input type="text" required="required" name="deskripsi" value="{{ $p->deskripsi }}" class="form-control"> <br/>
		<label>Harga</label>
		<input type="text" required="required" name="harga" value="{{ $p->harga }}" class="form-control"> <br/>
		<label>Gambar</label>
		<input type="file" name="gambar" value="{{ $p->gambar }}"> <br/>	
		<center><input type="submit" value="Simpan Data"></center>
	</form>
	@endforeach

@endsection
