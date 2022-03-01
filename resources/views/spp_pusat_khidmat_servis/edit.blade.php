@extends('bases')
@section('content')   
<div class="col-lg-12 pe-lg-2">
  <div>
    <div class="card-header">
      <h6 class="mb-0 label-menu">KOD PUSAT KHIDMAT SERVIS</h6>
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
              <form method="POST" action="/spp_pusat_khidmat_servis/{{ $spp_pusat_khidmat_servis->id }}">
                @method('PUT')
                @csrf
              <label class="form-label" for="pusat_perkhidmatan">Pusat Perkhimatan:</label>
              <select class="form-select" name="idPKhidmat" id="pusat_perkhidmatan" >
                @foreach  ($spp_pusat_khidmat_servis1 as $mo)
                <option {{ $spp_pusat_khidmat_servis-> idPKhidmat ==  $mo-> id ? 'selected':''  }} value="{{ $mo-> id }}">{{ $mo -> kumpulan  }} - {{ $mo -> nama  }}</option>
                @endforeach
              </select>
              <br>
              <label class="form-label" for="kategori_servis">Kategori Perkhimatan:</label>
              <select class="form-select" name="idKatServis" id="kategori_servis" >
                @foreach  ($spp_pusat_khidmat_servis2 as $mo)
                <option {{ $spp_pusat_khidmat_servis-> idKatServis ==  $mo-> id ? 'selected':''  }} value="{{ $mo-> id }}">{{ $mo -> kod  }} - {{ $mo -> nama  }}</option>
                @endforeach
              </select>

              {{-- <select name="kategori_servis" id="kategori_servis"></select> --}}
              <br>
              
                {{-- <label class="form-label" for="pusat_perkhidmatan1">Pusat Perkhimatan:</label>
              <select  name="pusat_perkhidmatan1" id="pusat_perkhidmatan1" >
                <option value=""> Sila pilih:</option>
              @foreach  ($spp_pusat_khidmat_servis as $mo)
                  <option value="{{ $mo-> id }}">{{ $mo -> kumpulan  }} - {{ $mo -> nama  }}</option>
              @endforeach
              </select> --}}
              <label class="form-label" style=" padding-right: 20px" for="nama">JENIS PERKHIDMATAN (BM) :</label>
              <input class="form-control" value="{{ $spp_pusat_khidmat_servis-> nama }}"  type="text" id="nama" name="nama" >
              <label class="form-label" style=" padding-right: 20px" for="catatan">Catatan(BM) :</label>
              <input class="form-control" placeholder="catatan" value="{{ $spp_pusat_khidmat_servis-> catatan }}" type="text" id="catatan" name="catatan" > <br>
              <label class="form-label" style=" padding-right: 20px" for="namaE"></label>JENIS PERKHIDMATAN (BI) :<br>
              <input class="form-control" value="{{ $spp_pusat_khidmat_servis-> namaE }}"  type="text" id="namaE" name="namaE" >
              <label class="form-label" style=" padding-right: 20px" for="catatanE">Catatan(BI) :</label>
              <input class="form-control" placeholder="catatan"  type="text" id="catatanE" value="{{ $spp_pusat_khidmat_servis-> catatanE }}" name="catatanE" > <br>
              <br>
              <br>
              {{-- <div id="kat_servis">
                <label for="kategori_servis">Kategori Perkhimatan:</label>
              <select style="size: 100px" name="kategori_servis" id="kategori_servis"></select>
              </div> --}}
              <button class="btn btn-secondary" type="submit"><img width="20" src="/kemaskini.png" alt="">KEMASKINI</a></button>

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
{{-- 
<section class="content" style="">
  <form method="POST" action="/spp_pusat_khidmat_servis/{{ $spp_pusat_khidmat_servis->id }}">
    @method('PUT')
    <div>
      <div class="row">
        <div class="col card">
          <div class="form-group">
            @csrf
            <div>
              {{-- <label for="pusat_perkhidmatan">Pusat Perkhimatan:</label>
              <select name="idPKhidmat" id="pusat_perkhidmatan" >
                @foreach  ($spp_pusat_khidmat_servis1 as $mo)
                <option {{ $spp_pusat_khidmat_servis-> idPKhidmat ==  $mo-> id ? 'selected':''  }} value="{{ $mo-> id }}">{{ $mo -> kumpulan  }} - {{ $mo -> nama  }}</option>
                @endforeach
              </select>
              <br>
                @foreach  ($spp_pusat_khidmat_servis2 as $mo2)
              <label for="kategori_servis">Kategori Perkhimatan:</label>
              <select  name="idKatServis" id="kategori_servis">
                <option value="{{ $mo2-> id}}"></option>
              </select>
              @endforeach
              <br>

              <input class="form-control" value="{{ $spp_pusat_khidmat_servis->idKatServis }}"  type="text" name="id" hidden>


              <input class="form-control" value="{{ $spp_pusat_khidmat_servis->idPKhidmat }}"  type="text" id="idPKhidmat" name="idPKhidmat" hidden>
              <input class="form-control" value="{{ $spp_pusat_khidmat_servis->idKategoriSyarikat }}"  type="text" id="idKatServis" name="idKatServis" hidden>

              <label style=" padding-right: 20px" for="nama">JENIS PERKHIDMATAN (BM) :</label>
              <input class="form-control" value="{{ $spp_pusat_khidmat_servis-> nama }}"  type="text" id="nama" name="nama" >
              <label style=" padding-right: 20px" for="catatan">Catatan(BM) :</label>
              <input class="form-control" placeholder="catatan" value="{{ $spp_pusat_khidmat_servis-> catatan }}" type="text" id="catatan" name="catatan" > <br>
              <label style=" padding-right: 20px" for="namaE"></label>JENIS PERKHIDMATAN (BI) :<br>
              <input class="form-control" value="{{ $spp_pusat_khidmat_servis-> namaE }}"  type="text" id="namaE" name="namaE" >
              <label style=" padding-right: 20px" for="catatanE">Catatan(BI) :</label>
              <input class="form-control" placeholder="catatan"  type="text" id="catatanE" value="{{ $spp_pusat_khidmat_servis-> catatanE }}" name="catatanE" > <br>
            </div>
            <input type="submit" value="submit"><br>
          </div>
        </div>
      </div>
    </div>
    <br>
      <table>
      <tr>
        <th>BIL</th>
        <th>KHIDMAT/PRODUK</th>
        <th>CATATAN</th>
      </tr>
      <tbody id="pusat_perkhidmatan_servis">
      </tbody>
    </table>
  <br>
  <br>
  </form> --}}


<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('change','#pusat_perkhidmatan',function(){
      $("#kategori_servis").empty();
      let selected = $(this).val();
      $.ajax({
          method: "POST",
          url: "{{ url('/kategori_servis') }}",
          data: {
              "_token": "{{ csrf_token() }}",
              "id": selected,
          },
      }).done(function(response) {
          var data = jQuery.parseJSON(response);
          $('#kategori_servis').html('');
          $('#kategori_servis').append('<option  value="">Pilih...</option>');
          $.each(data.kkat, function(index,value) {
            $('#kategori_servis').append('<option value="'+value.id+'">'+value.kod+value.nama+'</option>');
            });
            });
            });
    $(document).on('change','#kategori_servis',function(){
      $("#pusat_perkhidmatan_servis").empty();
      let selected1 = $('#pusat_perkhidmatan').val();
      // console.log(selected1);
      let selected = $(this).val();
      $.ajax({
          method: "POST",
          url: "{{ url('pusat_perkhidmatan_servis') }}",
          data: {
              "_token": "{{ csrf_token() }}",
              "id1": selected1,
              "id": selected,
          },
      }).done(function(response) {
          var data = jQuery.parseJSON(response);
          $('#pusat_perkhidmatan_servis').html('');
          $('#pusat_perkhidmatan_servis').append('<tr value=""></tr>');
          var counter = 1;
          $.each(data.pks, function(index,value) {
              $('#pusat_perkhidmatan_servis').append(
                `<tr><td value="${value.id}">${counter}</td><td >${value.nama}</td><td >${value.catatan}</td>
                </tr>`);
                counter++;
                });
                });
                });
                $(document).on('click','#new_spp',function(){
      let selected1 = $('#pusat_perkhidmatan').val();
      let selected = $('#kategori_servis').val();
      $('#idPKhidmat').val(selected1);
      $('#idKatServis').val(selected);
      // $('#new_servis_pusat_khidmat').submit();
    });
  });
</script>

</section>
@endsection

