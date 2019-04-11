@extends('Admin.loby')
@section('adminkonten')

	<h2><center>Tambah Kategori</center></h2>
 
	<a href="{{route('Dashboard.kategoriadmin')}}"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/tambahkategori" method="post">
		{{ csrf_field() }}
		<label>KATEGORI</label>
		<input type="text" name="nama_kategori" required="required" class="form-control"> <br/>
		<CENTER><input type="submit" value="Simpan Data"></CENTER>
	</form>

@endsection