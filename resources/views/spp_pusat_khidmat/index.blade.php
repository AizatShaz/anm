
@extends('bases')
@section('content')   
<div class="col-lg-12 pe-lg-2">
  <div>
    <div class="card-header">
      <h6 class="mb-0 label-menu">KOD PUSAT KHIDMAT</h6>
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
          <h5 >JUMLAH REKOD: <span style="color: #2CABE1">{{ $spp_pusat_khidmat2 }}</span></h5>

          </div>
          <br>
          <div class="col-sm-10 mb-12">
            <table class="table" style="text-align: center">
              <thead>
                <tr>
                  <th>NO.</th>
                  <th>PUSAT KHIDMAT</th>
                  <th>NAMA PENUH</th>
                  <th>NAMA LAIN</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <form action="/spp_pusat_khidmat/" method="POST" id="">
                    @csrf
                  <td> <input name="kumpulan" type="text" class="form-control"></td>
                  <td> <input name="nama" type="text" class="form-control"></td>
                  <td> <input name="namaE" type="text" class="form-control"></td>
                  {{-- <td> <input name="cid" type="text" class="form-control"></td> --}}
                  <td><button class="btn btn-secondary" type="submit" value="submit">+TAMBAH</button></td>
                  </form>
                </tr>
              </tbody>
              <tbody>
                @foreach ($spp_pusat_khidmat as $spk)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td><ul> {{ $spk -> kumpulan}}</ul></td>
                  <td><ul> {{ $spk -> nama}}</ul></td>
                  <td><ul> {{ $spk -> namaE}}</ul></td>          
                  <td>
                    
                    <div class="row buttons">
                      <div class="col text-end">
                        <button class="btn text-end"><a style="color: #ffff" href="/spp_pusat_khidmat/{{ $spk -> id }}/edit"><img src="/i_EDIT.png" width="20" alt=""></a></button>
                      </div>
                      <div class="col text-start">
                        <form action="/spp_pusat_khidmat/{{ $spk -> id }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" style="color: black" class="btn "><img src="/i_TRASH.png" width="20" alt=""></button>
                          </form>
                      </div>
                    </div>
                   {{-- <button class="btn btn-secondary" type="submit"> <a style="color: #ffff" href="/kod_status_syarikat/{{ $spk -> id }}/edit"><img width="20" src="/kemaskini.png" alt="">KEMASKINI</a></button> --}}
                </td>       
              
                  </tr> 

                  @endforeach
                </tbody>
              </table>
        </div>
        </div>
        <br>
        <br>
        <br>
        {{-- <button data-inline="true" style="margin-bottom: 10px" class="btn btn-secondary delete_all" data-url="{{ url('kod_status_syarikat_DeleteAll') }}"><i class="far fa-trash-alt"></i> HAPUS</button> --}}
    </div>
</div>
<!--NO JS-->
{{-- 
<br>
<form action="/spp_pusat_khidmat/" method="POST" id="new_servis_pusat_khidmat">
  @csrf
<br>
<table style="text-align: center">
<h5>Pusat Khidmat Table</h5>


<table style="text-align: center">
  <tr>

  </tr>
  @foreach ($spp_pusat_khidmat as $spk)
  <tr style="text-align: center">
    <td><h6></h6></td>
    <td><ul> {{ $spk -> kumpulan}}</ul></td>
    <td><ul> {{ $spk -> nama}}</ul></td>
    <td><ul> {{ $spk -> namaE}}</ul></td>
    <td><a href="spp_pusat_khidmat/{{ $spk -> id }}/edit">Kemaskini</a>
      <form action="/spp_pusat_khidmat/{{ $spk -> id }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit"><span class="fas fa-bin"></span>BUANG</button>
      </form>
    </td>
    </tr>
@endforeach
</table> --}}

@endsection
