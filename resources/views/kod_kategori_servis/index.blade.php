
@extends('bases')
@section('content')   

<br>
<form action="/kod_kategori_servis/" method="POST">
  @csrf
<br>
<table style="text-align: center">
<h2>KOD PROSES</h2>

<select name="kategori_servis" id="kategori_servis" >
  <option value=""> Sila pilih:</option>
 @foreach  ($kod_kategori_servis as $mo)
     <option value="{{ $mo-> id }}">{{ $mo -> nama  }}  {{ $mo -> namaE  }}</option>
 @endforeach
</select>

<table  style="text-align: center">
  <button style="margin-bottom: 10px" class="btn btn-primary delete_all" data-url="{{ url('kod_daerah_DeleteAll') }}">HAPUS</button> <button class="btn btn-primary" onclick="window.print()">CETAK </button><br>

<thead>
  <tr align="center">
    <th></th>
    <th>NAMA</th>
    <th>TINDAKAN</th>
  </tr>
</thead>
<tbody>  
  <tr>
  <form action="/spp_proses_template_main/" method="POST">
    @csrf
  <td> </td>
  {{-- <td> <input  name="kod" type="text" class=""></td> --}}
  <td> <input name="nama" type="text" class=""></td>
  <td ><input name="idKatServis" type="text" id="idKatServisAuto" class=""></td>
  <td><button type="submit" value="submit">TAMBAH</button></td>
</form>
</tr>
</tbody>
<tbody id="kategori_proses_template">
</tbody>
</table>
<script>
    $(document).on('change','#kategori_servis',function(){
      $("#kategori_proses_template").empty();
      let selected = $(this).val();
      // console.log(selected);
      $.ajax({
          method: "POST",
          url: "{{ url('kategori_proses_template') }}",
          data: {
              "_token": "{{ csrf_token() }}",
              "id": selected,
          },
      }).done(function(response) {
          var data = jQuery.parseJSON(response);
          $('#kategori_proses_template').html('');
          $('#kategori_proses_template').append('<tr value=""></tr>');
          $.each(data.ipt, function(index,value) {
              $('#kategori_proses_template').append(
                `<tr>
                  <td><ul><input type="checkbox" class="sub_chk" data-id="${value.id}"></ul></td>
                <td>
                  <form action="detail_proses" method="POST">
                  @csrf
                  <input type="hidden" name="id" value="${value.id}" />
                  <button type="submit">${value.nama}</button>
                  </form>
                </td>
                <td>
                  
                 <a href="/spp_pusat_khidmat_servis/${value.id}/edit">Kemaskini</a>
                </td>
                </tr>`
                );
          });
          $('#idKatServisAuto').val(selected);
          
      });
    });
</script>

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
