@extends('Admin.loby')
@section('adminkonten')

	<h2><center>Tambah Brand</center></h2>
 
	<a href="{{route('Dashboard.brandadmin')}}"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/tambahbrand" method="post">
		{{ csrf_field() }}
		<label>NAMA BRAND</label>
		<input type="text" name="nama_merek" required="required" class="form-control"> <br/>
		<center><input type="submit" value="Simpan Data"></center>
	</form>

@endsection