
@extends('bases')

@section('content')   
<div class="col-lg-12 pe-lg-2">
  <div>
    <div class="card-header">
      <h6 class="mb-0 label-menu">KOD NEGERI</h6>
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
          <h5 >JUMLAH REKOD: <span style="color: #2CABE1">{{ $kod_negeri2 }}</span></h5>

          </div>
          <br>
          <div class="col-sm-10 mb-12">
            <table class="table"  style="text-align: center">
              <tr align="center">
                <th width="50px"><input type="checkbox" id="master"></th>
                <th>KOD</th>
                <th>KETERANGAN</th>
                <th>TINDAKAN</th>
              </tr>
              <tr>
                <td></td>
                <form action="/kod_negeri/" method="POST" id="new_servis_pusat_khidmat">
                  @csrf
                <td> <input  name="kod" type="text" class=""></td>
                <td> <input name="nama" type="text" class=""></td>
                <td><button class="btn btn-secondary" type="submit" value="submit">+TAMBAH</button></td>
              </form>
              </tr>
              @foreach ($kod_negeri as $spk)
              <tr>
                <td><input type="checkbox" class="sub_chk" data-id="{{ $spk -> id}}"></td>
                <td><ul> {{ $spk -> kod}}</ul></td>
                <td><ul> {{ $spk -> nama}}</ul></td>
                <td>
                    <button class="btn btn-secondary">
                    <a style="color: #ffff" href="/kod_negeri/{{ $spk -> id }}/edit"><img width="20" src="/kemaskini.png" alt="">KEMASKINI</a>
                    </button>
                  </td>
                </tr>
            @endforeach
            </table>
        </div>
        </div>
      <div class="text-start">
        <br>
        <br>
        <br>
        <button data-inline="true" style="margin-bottom: 10px" class="btn btn-secondary delete_all" data-url="{{ url('kod_negeri_DeleteAll') }}"><i class="far fa-trash-alt"></i> HAPUS</button>
      </div>
    </div>
</div>
<!--NO JS-->


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
