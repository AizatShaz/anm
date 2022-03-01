
@extends('bases')
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')   
<div class="col-lg-12 pe-lg-2">
    <div>
      <div class="card-header">
        <h6 class="mb-0 label-menu">DERAF PERJANJIAN > DETAIL</h6>
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
          <div class="row-sm-12 gx-2">
            <div class="text-end">
            {{-- <h5 >JUMLAH REKOD: <span style="color: #2CABE1">{{ $kod_sijil_iso2 }}</span></h5> --}}
  
            </div>
            <br>
            <div class="col-sm-10 mb-12">
                <table style="display:block" id="hiddenTable" class="table ">
                    <thead class="thead-dark">
                    <tr>
                      <th></th>
                      <th>URUTAN</th>
                      <th>LEVEL</th>
                      <th>BIL</th>
                      <th>KETERANGAN</th>
                      <th>TINDAKAN</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                      @foreach  ($template_perjanjian_main as $mo)
                    <tr>
                      <td><ul><input type="checkbox" class="sub_chk" data-id="{{ $mo -> id}}"></ul></td>
                      <td value="">{{ $mo -> tpd_urutan  }}</td>
                      {{-- <td value="">{{ $mo -> tpd_urutan  }}</td> --}}
                      <td value="">{{ $mo -> tpd_level  }}</td>
                      <td value="">{{ $mo -> tpd_bil  }}</td>
                      <td value="">{{ $mo -> tpd_keterangan  }}</td>
                      <td>
                        <a href="/template_perjanjian_detail/{{ $mo -> id}}/edit">Kemaskini</a>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
              {{-- <table  style="text-align: center">
                <tr align="center">
                  <th>KOD</th>
                  <th>ISO</th>
                  <th>TINDAKAN</th>
                </tr>
                <tr>
                  <form action="/kod_sijil_iso/" method="POST" id="new_servis_pusat_khidmat">
                    @csrf
                  <td> <input class="form-control"  name="idJC" type="text" ></td>
                  <td> <input class="form-control" name="keterangan" type="file" id="fileToUpload"></td>
                  <td><button class="btn btn-secondary" type="submit" value="fileToUpload">+TAMBAH</button></td>
                </form>
                </tr>
                @foreach ($kod_sijil_iso as $spk)
                <tr>
                  <td> {{ $spk -> kod}}</td>
                  <td><a href="{{ asset('/storage/'.$audit_trail->doc)  }}">VIEW</a></td>
                  <td>
                    <button class="btn btn-secondary" type="submit"> <a style="color: #ffff" href="/kod_sijil_iso/{{ $spk -> id }}/edit">Kemaskini</a></button>
                  </tr>
              @endforeach
              </table> --}}
          </div>
          </div>
          <br>
          <br>
          <br>
          <button data-inline="true" style="margin-bottom: 10px" class="btn btn-secondary delete_all" data-url="{{ url('template_perjanjian_D_DeleteAll') }}"><i class="far fa-trash-alt"></i> HAPUS</button>
      </div>
  </div>
  <!--sssss-->

  
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
</script>
@endsection
