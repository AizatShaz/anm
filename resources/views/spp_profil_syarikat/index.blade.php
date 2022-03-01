
@extends('bases')
<style>

</style>
@section('content')   

<div class="col-lg-12 pe-lg-2">
  <div>
    <div class="card-header">
      <h6 class="mb-0 label-menu"> CARIAN PROFIL SYARIKAT</h6>
      <br>
      <h1 class="mb-0">KOD</h1>
      <div class="col-mb-8 ps-0">
        <hr width="900px" class="mb-0 navbar-vertical-divider" />

      </div>

      <br>
      <div class="row">
          <div class="col-sm-6">
              {{-- <h5 class="mb-0"></h5> --}}
              <br>
              <br>
              <br>
              <br>
              <form action="carian_syarikat" method="POST">
                @csrf
                <label for="nama">Nama Syarikat</label>
                <input class="form-control" name="nama" id="myInput" type="text" placeholder="Search..">
                <br>
                <label for="nama">No Syarikat</label>
                <input class="form-control" name="nama" id="myInput" type="text" placeholder="Search..">
                
                <br>
              <label for="idKategoriSyarikat">Kategori Syarikat :</label>
              
              <select class="form-select" name="idKategoriSyarikat" id="kod_negeri_syarikat">
                <option value="">Sila pilih</option>
              @foreach ($spp_profil_syarikat1 as $kod)
                <option value="{{ $kod -> id }}">{{ $kod -> nama }}</option>
              @endforeach
              </select>
              <br>
              <div class="text-end">
                <button class="btn btn-secondary" type="submit" value="submit"><i class=" icon-zoom-in"></i> CARIAN</button>
                </div>
              </form>
              <br>

                <br>
              </form>
              <br>
              <div class="text-center">
                <button class="btn btn-secondary"><a style="color: #ffff" href="/spp_profil_syarikat/create">+TAMBAH SYARIKAT</a></button>
  
                </div>
              <br>

              <br>

                <br>
              </div>
              <br>
              <br>
              <br>
            </div>
          <div class="col-sm-6 text-end">
              {{-- <button style="    background-color: transparent;background-repeat: no-repeat; border: none;cursor: pointer; overflow: hidden;outline: none;" data-inline="true" onclick="window.print()"><img src="/icon_PRINT.png" alt="" width="30px"></button><br> --}}

          </div>
      </div>
      <div>

      </div>
    </div>

    <div class="card-body">
        <div class="card row-sm-12 gx-2">
          <div class="text-end">
          {{-- <h5 >JUMLAH REKOD: <span style="color: #2CABE1" id="rekod">{{ $psm_biodata3 }}</span></h5> --}}

          </div>
          <br>
          <div class="col-sm-10 mb-12">
            {{-- <table style="display:block" id="" class="table ">
              <thead class="thead-dark">
              <tr>
                <th>BIL</th>
                <th>NAMA</th>
                <th>NO SYARIKAT</th>
                <th>NO TELEFON</th>
                <th>TINDAKAN</th>
              </tr>
              </thead>
              <tbody id="myTable">
                @foreach  ($spp_pelanggan_syarikat as $mo)
              <tr>
                <td>{{ $loop->iteration }}</td> 
                <td>{{$mo -> nama ?? ""}}{{$mo -> pelangganSyarikat -> nama ?? ""}}</td>
                <td>{{$mo -> noSyarikat ?? ""}}{{$mo -> pelangganSyarikat -> noSyarikat ?? ""}}</td>
                <td>{{$mo -> noTel ?? ""}}{{$mo -> pelangganSyarikat -> noTel ?? ""}}</td>
                <td>
                  <a href="/spp_pelanggan_syarikat/{{ $mo -> id  }}/edit">Kemaskini</a>
                </td>
              </tr>
              @endforeach
              </tbody>
            </table> --}}
            {{-- <table style="display:block" id="hiddenTable" class="table ">
              <thead class="thead-dark">
              <tr>
                <th>BIL</th>
                <th>NAMA</th>
                <th>TINDAKAN</th>
              </tr>
              </thead>
              <tbody id="myTable">
                @foreach  ($psm_biodata as $mo)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$mo->Bio_Nama}}
                  {{$mo->staffPkhidmat->Bio_Nama ?? ""}}
                </td>
                <td>
                </td>
              </tr>
              @endforeach
              </tbody>
            </table> --}}
        </div>
        </div>
        <br>
        <br>
        <br>
        {{-- <button data-inline="true" style="margin-bottom: 10px" class="btn btn-secondary delete_all" data-url="{{ url('kod_status_syarikat_DeleteAll') }}"><i class="far fa-trash-alt"></i> HAPUS</button> --}}
    </div>
</div>
<!--JS-->



@endsection
