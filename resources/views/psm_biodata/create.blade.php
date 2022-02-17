@extends('bases')

@section('content')     
<form action="carian_kakitangan_tambah" method="GET">
  @csrf
  <label for="Bio_Nama">Nama</label>
<input name="Bio_Nama" type="text" placeholder="Search..">
<br>
<button type="submit" value="submit">Cari</button>
</form>

</section>

@endsection

