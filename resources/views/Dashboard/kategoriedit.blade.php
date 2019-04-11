@extends('Admin.loby')
@section('adminkonten')

	<h3>Edit KATEGORI</h3>
 
	<a href="{{route('Dashboard.kategoriadmin')}}"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($kategoris as $k)
	<form action="/kategori/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id_kategori" value="{{ $k->id_kategori }}"> <br/>
		<label>KATEGORI</label>
		<input type="text" required="required" name="nama_kategori" value="{{ $k->nama_kategori }}" class="form-control"> <br/>
		<CENTER><input type="submit" value="Simpan Data"></CENTER>
	</form>
	@endforeach

@endsection

