
@extends('bases')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

<style>

</style>
@section('content')   
<div class="col-lg-12 pe-lg-2">
  <div>
    <div class="card-header">
      <h6 class="mb-0 label-menu">KOD PROFIL HARGA SERVIS</h6>
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
              <label class="" for="pusat_perkhidmatan1">Pusat Perkhimatan:</label>
              <select class="form-select" name="pusat_perkhidmatan1" id="pusat_perkhidmatan1" >
                <option value=""> Sila pilih:</option>
               @foreach  ($spp_profil_harga_servis as $mo)
                   <option value="{{ $mo-> id }}">{{ $mo -> kumpulan  }} - {{ $mo -> nama  }}</option>
               @endforeach
              </select>
              <br>
              <div id="jpe">
                <label for="jenis_perkhidmatan">Jenis Perkhimatan:</label>
                <select class="form-select" name="jenis_perkhidmatan" id="jenis_perkhidmatan"></select>
              </div>

              <br>
              <br>
              <br>
              <br>
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
          <h5 >JUMLAH REKOD: <span style="color: #2CABE1" id="rekod"></span></h5>
          </div>
          <div class="text-start">
            <button class="btn btn-secondary" ><a href="/spp_profil_harga_servis/create">+TAMBAH</a></button>
          </div>
          <br>
          <div class="col-sm-10 mb-12">
            <table class="table">
              <tr>
                <th>BIL</th>
                <th>KHIDMAT/PRODUK</th>
                <th>HARGA</th>
                <th>CATATAN</th>
              </tr>
              {{-- <tbody>
                <tr>
                  <td></td>
                  <form action="/spp_profil_harga_servis/" method="POST" id="">
                    @csrf
                  <td> <input name="nama" type="text" class="form-control"></td>
                  <td> <input name="namaE" type="text" class="form-control"></td>
                  <td> <input name="cid" type="text" class="form-control"></td>
                  <td><button class="btn btn-secondary" type="submit" value="submit">+TAMBAH</button></td>
                  </form>
                </tr>
              </tbody> --}}
              <tbody id="pusat_perkhidmatan_servis">
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
<!--JS-->

<br>

<script type="text/javascript">
  $(document).ready(function(){
    $("#jpe").hide();

    $(document).on('change','#pusat_perkhidmatan1',function(){
      $("#jpe").show();

      $("#jenis_perkhidmatan").empty();
      let selected = $(this).val();
      $.ajax({
          method: "POST",
          url: "{{ url('/pusat_perkhidmatan') }}",
          data: {
              "_token": "{{ csrf_token() }}",
              "id": selected,
          },
      }).done(function(response) {
          var data = jQuery.parseJSON(response);
          $('#jenis_perkhidmatan').html('');
          $('#jenis_perkhidmatan').append('<option value="">Pilih...</option>');
          $.each(data.aos, function(index,value) {
                $('#jenis_perkhidmatan').append('<option value="'+value.id+'">'+value.nama+'</option>');
            });
      });

      
    });
    $(document).on('change','#jenis_perkhidmatan',function(){
      $("#pusat_perkhidmatan_servis").empty();
      let selected1 = $('#pusat_perkhidmatan1').val();
      let selected = $(this).val();
      $.ajax({
          method: "POST",
          url: "{{ url('/jenis_perkhidmatan') }}",
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
          var n = $( data.aos1 ).length;
          $( "#rekod" ).text(n);
          $.each(data.aos1, function(index,value) {
              $('#pusat_perkhidmatan_servis').append(
                `<tr>
                <td value="${value.id}">${counter}</td>
                <td >${value.nama}</td><td >${value.hargaY}/${value.unitHarga}</td>
                <td >${value.catatan}</td>
                <td>
                  <div class="row buttons">
                      <div class="col text-end">
                        <button class="btn text-end"><a style="color: #ffff" href="/spp_pusat_khidmat_servis/${value.id}/edit"><img src="/i_EDIT.png" width="20" alt=""></a></button>
                      </div>
                      <div class="col text-start">
                        <form action="/spp_pusat_khidmat_servis/${value.id}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" style="color: black" class="btn "><img src="/i_TRASH.png" width="20" alt=""></button>
                          </form>
                      </div>
                    </div>
                    </td>
                </tr>`
                );
                counter++;
          });
      });
    });
    $(document).on('click','#new_spp',function(){
      let selected1 = $('#pusat_perkhidmatan1').val();
      let selected = $('#jenis_perkhidmatan').val();

      $('#pusat_perkhidmatan12').val(selected1);
      $('#jenis_perkhidmatan1').val(selected);
      $('#new_profil_harga_servis').submit();



    });
  });
    

</script>

@endsection
