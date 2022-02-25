
@extends('bases')

@section('content')   

<br>
<br>
<table style="text-align: center">
<h2>KOD BAYARAN</h2>

<table style="text-align: center">
  <tr>
    <th>KOD</th>
    <th>NAMA</th>
    <th>TINDAKAN</th>
  </tr>
  <tr>
    <form action="/kod_negeri/{{ $kod_negeri -> id }}" method="POST" >
      @method('PUT')
      @csrf
    <td> <input value="{{ $kod_negeri -> kod }}" name="kod" type="text" class="form-control"></td>
    <td> <input value="{{ $kod_negeri -> nama }}" name="nama" type="text" class="form-control"></td>
    <td><button class="btn btn-primary" type="submit" value="submit">KEMASKINI</button></td>
  </form>
  </tr>
  @foreach ($kod_negeri1 as $spk)
  <tr>
    <td><ul> {{ $spk -> kod}}</ul></td>
    <td><ul> {{ $spk -> nama}}</ul></td>
    <td><button type='button' onclick='productDelete(this);' class='btn btn-default'>delete<span class='glyphicon glyphicon-remove' /></button>
    <a href="/kod_negeri/{{ $spk -> id }}/edit">Kemaskini</a></td>
    </tr>
@endforeach
</table>
<script>
  function productDelete(ctl) {
    $(ctl).parents("tr").remove();
}
</script>
@endsection
