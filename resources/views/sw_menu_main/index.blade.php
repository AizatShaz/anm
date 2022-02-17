
@extends('bases')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
  center;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
@section('content')   

<br>
<br>
<table style="text-align: center">
<h2>SENARAI KATEGORI MENU</h2>

<button style="margin-bottom: 10px" class="btn btn-primary delete_all" data-url="{{ url('menu_DeleteAll') }}">Delete All Selected</button>

<table  style="text-align: center">
  <tr align="center">
    <th>KOD</th>
    <th>KETERANGAN</th>
    <th>TINDAKAN</th>
  </tr>
  <tr>
    <td></td>

    <form action="/sw_menu_main/" method="POST" >
      @csrf
    <td> <input  name="mm_kod" type="number" class=""></td>
    <td> <input name="mm_nama" type="text" class=""></td>
    <td><button type="submit" value="submit">TAMBAH</button></td>
  </form>
  </tr>
  @foreach ($sw_menu_main as $spk)
  <tr>
    <td><input type="checkbox" class="sub_chk" data-id="{{ $spk -> id}}"></td>
    <td><ul> {{ $spk -> mm_kod}}</ul></td>
    <td><ul> {{ $spk -> mm_nama}}</ul></td>
    <td>
      {{-- <form action="/sw_menu_main/{{ $spk -> id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"><span class="fas fa-bin"></span></button>
        </form> --}}
      <a href="/sw_menu_main/{{ $spk -> id }}/edit">Kemaskini <i class="fa fa-pencil" aria-hidden="true"></i></a></td>
      {{-- <i class="bi bi-pencil"></i>
       --}}
    </tr>
@endforeach
</table>


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
