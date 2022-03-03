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
                <label for="pusat_perkhidmatan1">Pusat Perkhimatan:</label>
              <select  name="pusat_perkhidmatan1" id="pusat_perkhidmatan1" >
                <option value=""> Sila pilih:</option>
              @foreach  ($spp_pusat_khidmat_servis as $mo)
                  <option value="{{ $mo-> id }}">{{ $mo -> kumpulan  }} - {{ $mo -> nama  }}</option>
              @endforeach
              </select>
              <br>
              <br>
              <div id="kat_servis">
                <label for="kategori_servis">Kategori Perkhimatan:</label>
              <select style="size: 100px" name="kategori_servis" id="kategori_servis"></select>
              </div>
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
        <div class="card row-sm-12 gx-2" >
          <div class="text-end" style="padding-right: 50px">
          <h5 >JUMLAH REKOD: <span style="color: #2CABE1" id="rekod"></span></h5>

          </div>
          <br>
          <div class="col-sm-10 mb-12">
            <table class="table" style="text-align: center">
              <thead>
                <tr>
                  <th>BIL</th>
                  <th>KHIDMAT/PRODUK</th>
                  <th>CATATAN</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <form action="/spp_pusat_khidmat_servis/" method="POST" id="">
                    @csrf
                  <td> <input name="nama" type="text" class="form-control"></td>
                  <td> <input name="namaE" type="text" class="form-control"></td>
                  {{-- <td> <input name="cid" type="text" class="form-control"></td> --}}
                  <td><button class="btn btn-secondary" type="submit" value="submit">+TAMBAH</button></td>
                  </form>
                </tr>
              </tbody>
              <tbody id="pusat_perkhidmatan_servis">
              </tbody>
              <tbody>
                {{-- @foreach ($spp_pusat_khidmat as $spk)
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
                   <button class="btn btn-secondary" type="submit"> <a style="color: #ffff" href="/kod_status_syarikat/{{ $spk -> id }}/edit"><img width="20" src="/kemaskini.png" alt="">KEMASKINI</a></button>
                </td>       
              
                  </tr> 

                  @endforeach --}}
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
    $("#kat_servis").hide();
    $(document).on('change','#pusat_perkhidmatan1',function(){
      $("#kat_servis").show();
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
          $('#kategori_servis').append('<option value="">Pilih...</option>');
          $.each(data.kkat, function(index,value) {
              $('#kategori_servis').append('<option value="'+value.id+'">'+value.kod+value.nama+'</option>');
          });
      });

      
    });
    $(document).on('change','#kategori_servis',function(){
      $("#pusat_perkhidmatan_servis").empty();
      let selected1 = $('#pusat_perkhidmatan1').val();
      
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
          var n = $( data.pks ).length;
          $( "#rekod" ).text(n);
          $.each(data.pks, function(index,value) {
              $('#pusat_perkhidmatan_servis').append(
                `<tr><td value="${value.id}">${counter}</td><td >${value.nama}</td><td >${value.catatan}</td>
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
      let selected = $('#kategori_servis').val();

      $('#pusat_perkhidmatan12').val(selected1);
      $('#kategori_servis1').val(selected);
      $('#new_servis_pusat_khidmat').submit();
    });
  });
    

</script>
                    
{{-- <a href="/spp_pusat_khidmat_servis/${value.id}/edit">Kemaskini</a>
<br> 
<form action="/spp_pusat_khidmat_servis/${value.id}" method="POST">
@csrf
@method('DELETE')
<button type="submit"><span class="fas fa-bin"></span></button>
</form> --}}
@endsection
