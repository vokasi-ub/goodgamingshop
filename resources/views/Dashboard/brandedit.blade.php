@extends('Admin.loby')
@section('adminkonten')

	<h3>Edit BRAND</h3>
 
	<a href="{{route('Dashboard.brandadmin')}}" class="btn btn-primary"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($brands as $b)
	<form action="/brand/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id_merek" value="{{ $b->id_merek }}"> <br/>
		<label>NAMA BRAND</label>
		<input type="text" required="required" name="nama_merek" value="{{ $b->nama_merek }}"
		class="form-control"> <br/>
		<CENTER><input type="submit" value="Simpan Data"></CENTER>
	</form>
	@endforeach

@endsection
