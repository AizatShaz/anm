
@extends('bases')
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')   

<div class="col-lg-12 pe-lg-2">
  <div>
    <div class="card-header">
      <h6 class="mb-0 label-menu">PROFIL KAKITANGAN</h6>
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
              <form action="carian_kakitangan" method="POST">
                @csrf
                <label for="Bio_Nama">NAMA:</label>
              <input class="form-control" name="Bio_Nama" type="text" placeholder="Search..">
              
              <br>
              <label for="idPkhidmat">PUSAT KHIDMAT:</label>
              
              <select class="form-select" name="idPkhidmat" >
                <option value="">Sila pilih</option>
              @foreach ($psm_biodata1 as $kod)
                <option value="{{ $kod -> id }}">{{ $kod -> kumpulan }}-{{ $kod -> nama }}</option>
              @endforeach
              </select>
              <br>
              <div class="text-end">
              <button class="btn btn-secondary" type="submit" value="submit"><i class=" icon-zoom-in"></i> CARIAN</button>
              </div>
              <br>
              <div class="text-end">
                <button class="btn btn-secondary" type="submit" value="submit">CARI SEMUA</button>
                </div>
              <br>
              </form>

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
        <div class="row-sm-12 gx-2">
          <div class="text-end">
          <h5 >JUMLAH REKOD: <span style="color: #2CABE1" id="rekod">{{ $psm_biodata3 }}</span></h5>

          </div>
          <br>
          <div class="col-sm-10 mb-12">
            <table style="display:block" id="hiddenTable" class="table ">
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
                {{-- {{ dd($mo->staffPkhidmat->Bio_Nama) }} --}}
                <td>{{ $loop->iteration }}</td>
                {{-- {{dd($mo->staffPkhidmat->Bio_Nama)}} --}}
                <td>{{$mo->Bio_Nama}}
                  {{$mo->staffPkhidmat->Bio_Nama ?? ""}}
                  {{-- {{$mo->staffPkhidmat->id ?? ""}} --}}
                </td>
                {{-- <td>{{$mo->staffPkhidmat->Bio_Nama ?? ""}}</td> --}}
                {{-- if item is null, trace back the data --}}
                <td>
                  {{-- <a href="/psm_biodata/{{ $mo -> id  }}/edit">Kemaskini</a> --}}
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

@endsection
