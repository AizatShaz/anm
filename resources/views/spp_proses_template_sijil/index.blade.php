
@extends('bases')
@section('content')   

    <div class="col-lg-12 pe-lg-2">
      <div>
        <div class="card-header">
          <h6 class="mb-0 label-menu">KOD TEMPLATE SIJIL</h6>
          <br>
          <h1 class="mb-0">KOD</h1>
          <div class="col-mb-8 ps-0">
            <hr width="900px" class="mb-0 navbar-vertical-divider" />

          </div>

          <br>
          <div class="row">
              <div class="col-sm-6">
                  {{-- <h5 class="mb-0">TEMPLATE SIJIL</h5> --}}
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
                <div class="text-end" style="padding-right: 50px">
                    <h5 >JUMLAH REKOD: <span style="color: #2CABE1" id="rekod"></span></h5>
                </div>
              <div class="col-sm-6 ">

                {{-- <label class="form-label" for="lesen_id">SILA PILIH KATEGORI SERVIS :</label>
                <select class="form-select" name="kategori_servis" id="kategori_servis" >
                    <option value=""> Sila pilih:</option>
                   @foreach  ($kod_kategori_servis as $mo)
                       <option value="{{ $mo-> id }}">{{ $mo -> nama  }}  {{ $mo -> namaE  }}</option>
                   @endforeach
                  </select> --}}
              </div>
              <div class="col-sm-6">

              </div>
              <br>
              <br>
              <br>
              <div class="col-sm-10 mb-12">
                <table class="table" style="text-align: center">
                  <tr>
                    <th></th>
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
                    <td><ul><input type="checkbox" class="sub_chk" data-id="{{ $spk -> id}}"></ul></td>
                    <td>
                      <form id="my_form" name="test" action="spp_proses_template_sijil_detail_index" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $spk -> id}}" />
                      <a href="javascript:{}" onclick="document.getElementById('my_form').submit(); return false;">{{ $spk -> nama}}</a>

                        {{-- <button type="submit"></button> --}}
                      </form>
                    </td>
                    <td>                  
                      <a href="/spp_proses_template_sijil/{{ $spk -> id}}/edit"><i class="fas fa-pen"></i></a>
                     </td>
                      {{-- <td><a href="/spp_proses_template_sijil/{{ $spk -> id}}/edit">Kemaskini</a></td> --}}
                
                    </tr>
                @endforeach
                </table>
                {{-- <table  style="text-align: center; width: 100%">
                    <thead>
                        <tr align="center">
                            <th><input type="checkbox" name="" id=""></th>
                            <th>NAMA</th>
                            <th>TINDAKAN</th>
                        </tr>
                    </thead>
                    <tbody>  
                        <tr>
                            <form action="/spp_proses_template_main/" method="POST">
                                @csrf
                                <td> </td>
                                <td> <input name="nama" type="text" class="form-control"></td>
                                <td ><input name="idKatServis" type="text" id="idKatServisAuto" class="form-control" hidden><button class="btn btn-secondary" type="submit" value="submit">+TAMBAH</button></td>
                            </form>
                        </tr>
                    </tbody>
                    <tbody id="kategori_proses_template"></tbody>
                </table> --}}
            </div>
            </div>
            <br>
            <br>
            <br>
            <button data-inline="true" style="margin-bottom: 10px" class="btn btn-secondary delete_all" data-url="{{ url('spp_proses_template_sijil_DeleteAll') }}"><i class="far fa-trash-alt"></i> HAPUS</button>
        </div>
    </div>
    <!--JS-->


<script type="text/javascript">
  $(document).ready(function () {


      $('#master').on('click', function(e) {
       if($(this).is(':checked',true))  
       {
          $(".sub_chk").prop('checked', true);  
       } else {  
          $(".sub_chk").prop('checked',false);  
       }  
      });


      $('.delete_all').on('click', function(e) {


          var allVals = [];  
          $(".sub_chk:checked").each(function() {  
              allVals.push($(this).attr('data-id'));
          });  


          if(allVals.length <=0)  
          {  
              alert("Please select row.");  
          }  else {  


              var check = confirm("Are you sure you want to delete this row?");  
              if(check == true){  


                  var join_selected_values = allVals.join(","); 


                  $.ajax({
                      url: $(this).data('url'),
                      type: 'DELETE',
                      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                      data: 'ids='+join_selected_values,
                      success: function (data) {
                          if (data['success']) {
                              $(".sub_chk:checked").each(function() {  
                                  $(this).parents("tr").remove();
                              });
                              alert(data['success']);
                          } else if (data['error']) {
                              alert(data['error']);
                          } else {
                              alert('Whoops Something went wrong!!');
                          }
                      },
                      error: function (data) {
                          alert(data.responseText);
                      }
                  });


                $.each(allVals, function( index, value ) {
                    $('table tr').filter("[data-row-id='" + value + "']").remove();
                });
              }  
          }  
      });


      $('[data-toggle=confirmation]').confirmation({
          rootSelector: '[data-toggle=confirmation]',
          onConfirm: function (event, element) {
              element.trigger('confirm');
          }
      });


      $(document).on('confirm', function (e) {
          var ele = e.target;
          e.preventDefault();


          $.ajax({
              url: ele.href,
              type: 'DELETE',
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              success: function (data) {
                  if (data['success']) {
                      $("#" + data['tr']).slideUp("slow");
                      alert(data['success']);
                  } else if (data['error']) {
                      alert(data['error']);
                  } else {
                      alert('Whoops Something went wrong!!');
                  }
              },
              error: function (data) {
                  alert(data.responseText);
              }
          });


          return false;
      });
  });
</script>
@endsection
