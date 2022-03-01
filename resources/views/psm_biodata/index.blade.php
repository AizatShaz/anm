
@extends('bases')
<style>

</style>
@section('content')   
@extends('bases')<div class="col-lg-12 pe-lg-2">
  <div>
    <div class="card-header">
      <h6 class="mb-0 label-menu">KOD DAERAH</h6>
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
              {{-- <button style="    background-color: transparent;background-repeat: no-repeat; border: none;cursor: pointer; overflow: hidden;outline: none;" data-inline="true" onclick="window.print()"><img src="/icon_PRINT.png" alt="" width="30px"></button><br> --}}

          </div>
          <div class="col-sm-6">
              {{-- <h5 class="mb-0"></h5> --}}
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
              <div class="text-center">
                <button class="btn btn-secondary"><a style="color: #ffff" href="/psm_biodata/create">+TAMBAH KAKITANGAN</a></button>
  
                </div>
              

              </div>
              <br>
              <br>
              <br>
            </div>


          </div>
      </div>
      <div>

      </div>
    </div>

    <div class="card-body">
        <div class="row-sm-12 gx-2">
          <div class="text-end">
          <h5 >JUMLAH REKOD: <span id="rekod" style="color: #2CABE1"></span></h5>

          </div>
          <br>
          <div class="col-sm-10 mb-12">
            {{-- <table class="table" id="myTable"  style="text-align: center">
              <thead>
                <tr align="center">
                  <th></th>
                  <th>NEGERI</th>
                  <th>KOD</th>
                  <th>DAERAH</th>
                  <th>TINDAKAN</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <form action="/kod_daerah" method="POST">
                  @csrf

                <td></td>
                <td>
                  <select class="form-select" name="idNegeri" id="idNegeriS">
                  @foreach ($kod_daerah1 as $kod)
                    <option value="{{ $kod -> id }}">{{ $kod -> nama }}</option>
                  @endforeach
                </select>
                <input name="" id="idNegeriinput" type="text" class="" hidden>
              </td>
                <td> <input name="kod" type="text" class="form-control"></td>
                <td> <input name="nama" type="text" class="form-control"></td>
                <td><button class="btn btn-secondary" type="submit" value="submit">+TAMBAH</button></td>
              </form>
              </tr>
            
              </tbody>
              <tbody id="daerahTable">
              </tbody>
            </table> --}}
        </div>
        </div>
        <div class="text-start">
          <br>
          <br>
          <br>
      
        </div>

      </div>
</div>
<!--sssss-->

@endsection
