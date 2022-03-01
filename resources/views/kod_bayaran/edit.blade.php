
@extends('bases')

@section('content')   
<div class="col-lg-12 pe-lg-2">
  <div>
    <div class="card-header">
      <h6 class="mb-0 label-menu">KOD BAYARAN</h6>
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
        <div class="card row-sm-12 gx-2">
          <div class="text-end">
          <h5 >JUMLAH REKOD: <span style="color: #2CABE1">{{ $kod_bayaran2 }}</span></h5>

          </div>
          <br>
          <div class="col-sm-10 mb-12">
              <table class="table" style="text-align: center">
                  <tr>
                    <th width="50px"><input type="checkbox" id="master"></th>
                
                    <th>KOD</th>
                    <th>NAMA</th>
                    <th>TINDAKAN</th>
                  </tr>
                  <tr>
                    <td></td>
                    <form action="/kod_bayaran/{{ $kod_bayaran -> id }}" method="POST" >
                      @method('PUT')
                      @csrf
                    <td> <input value="{{ $kod_bayaran -> kod }}" name="kod" type="text" class="form-control"></td>
                    <td> <input value="{{ $kod_bayaran -> nama }}" name="nama" type="text" class="form-control"></td>
                    <td><button class="btn btn-secondary" type="submit" value="submit"><img width="20" src="/kemaskini.png" alt="">KEMASKINI</button></td>
                  </form>
                  </tr>
                  
                  @foreach ($kod_bayaran1 as $spk)
                  <tr>
                    <td><input type="checkbox" class="sub_chk" data-id="{{ $spk -> id}}"></td>
                    <td><ul> {{ $spk -> kod}}</ul></td>
                    <td><ul> {{ $spk -> nama}}</ul></td>
                    <td>
                <button class="btn btn-secondary" type="submit"> 
                  <a style="color: #ffff" href="/kod_bayaran/{{ $spk -> id }}/edit"><img width="20" src="/kemaskini.png" alt="">KEMASKINI</a></button>
                  </td>
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
<!--no JS-->

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
    <form action="/kod_bayaran/{{ $kod_bayaran -> id }}" method="POST" >
      @method('PUT')
      @csrf
    <td> <input value="{{ $kod_bayaran -> kod }}" name="kod" type="text" class=""></td>
    <td> <input value="{{ $kod_bayaran -> nama }}" name="nama" type="text" class=""></td>
    <td><button type="submit" value="submit">KEMASKINI</button></td>
  </form>
  </tr>
  @foreach ($kod_bayaran1 as $spk)
  <tr>
    <td><ul> {{ $spk -> kod}}</ul></td>
    <td><ul> {{ $spk -> nama}}</ul></td>
    <td>
    <a href="/kod_bayaran/{{ $spk -> id }}/edit">Kemaskini</a></td>
    </tr>
@endforeach
</table>

@endsection
