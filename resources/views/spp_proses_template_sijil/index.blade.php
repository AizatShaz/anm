
@extends('bases')

@section('content')   
<div class="col-lg-12 pe-lg-2">
  <div>
    <div class="card-header">
      <h6 class="mb-0 label-menu">KOD ISO</h6>
      <br>
      <h1 class="mb-0">KOD</h1>
      <div class="col-mb-8 ps-0">
        <hr width="900px" class="mb-0 navbar-vertical-divider" />

      </div>

      <br>
      <div class="row">
          <div class="col-sm-6">
              {{-- <h5 class="mb-0"></h5> --}}
            </div>
          <div class="col-sm-6 text-end">
              <button style="    background-color: transparent;background-repeat: no-repeat; border: none;cursor: pointer; overflow: hidden;outline: none;" data-inline="true" onclick="window.print()"><img src="/icon_PRINT.png" alt="" width="30px"></button><br>

          </div>
      </div>
      <div>

      </div>
    </div>

    <div class="card-body">
        <div class="row-sm-12 gx-2">
          <div class="text-end">
          <h5 >JUMLAH REKOD: <span style="color: #2CABE1">{{ $kod_sijil_iso2 }}</span></h5>

          </div>
          <br>
          <div class="col-sm-10 mb-12">
            <table  style="text-align: center">
              <tr align="center">
                <th>KOD</th>
                <th>ISO</th>
                <th>TINDAKAN</th>
              </tr>
              <tr>
                <form action="/kod_sijil_iso/" method="POST" id="new_servis_pusat_khidmat">
                  @csrf
                <td> <input class="form-control"  name="idJC" type="text" ></td>
                <td> <input class="form-control" name="keterangan" type="file" id="fileToUpload"></td>
                <td><button class="btn btn-secondary" type="submit" value="fileToUpload">+TAMBAH</button></td>
              </form>
              </tr>
              @foreach ($kod_sijil_iso as $spk)
              <tr>
                <td> {{ $spk -> kod}}</td>
                <td><a href="{{ asset('/storage/'.$audit_trail->doc)  }}">VIEW</a></td>
                <td>
                  <button class="btn btn-secondary" type="submit"> <a style="color: #ffff" href="/kod_sijil_iso/{{ $spk -> id }}/edit">Kemaskini</a></button>
                </tr>
            @endforeach
            </table>
        </div>
        </div>
        <br>
        <br>
        <br>
        <button data-inline="true" style="margin-bottom: 10px" class="btn btn-secondary delete_all" data-url="{{ url('bayaran_DeleteAll') }}"><i class="far fa-trash-alt"></i> HAPUS</button>
    </div>
</div>
<!--sssss-->

<br>
<br>
<table style="text-align: center">
<h2>KOD TEMPLATE SIJIL</h2>

<table style="text-align: center">
  <tr>
    <th>P</th>
    <th>NAMA</th>
    <th>TINDAKAN</th>
  </tr>
  <tr>
    <form action="/spp_proses_template_sijil/" method="POST">
      @csrf
    <td></td>
    <td> <input name="nama" type="text" class=""></td>
    <td><button class="btn btn-secondary" type="submit" value="submit">+TAMBAH</button></td>
  </form>
  </tr>
  @foreach ($spp_proses_template_sijil as $spk)
  <tr>
    <td><input type="checkbox"></td>
    <td>
      <form id="test" name="test" action="spp_proses_template_sijil_detail_index" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $spk -> id}}" />
        <button type="submit">{{ $spk -> nama}}</button>
      </form>
    </td>
    {{-- <td style="max-width: 550px"><ul><a href=""></a>{{ $spk -> nama}}</ul></td>
    <td> --}}
      <td>
    <a href="/spp_proses_template_sijil/{{ $spk -> id}}/edit">Kemaskini</a>

      </td>

    </tr>
@endforeach
</table>
<script>

</script>
@endsection
