
@extends('bases')

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
          <div class="col-sm-6">
            {{-- <h5 class="mb-0"></h5> --}}
            <table>
              <tr>
                <form action="/template_perjanjian_detail/{{ $template_perjanjian_detail -> id }}" method="POST">
                  @method('PUT')
                  @csrf
                  <tr>
                    <td style="max-width: 10px">
                      <label for="tpd_urutan">KOD</label></td><br>
                      <td>
                      <input class="form-control" type="text" value="{{ $template_perjanjian_detail -> tpd_urutan}}"></td>
                    </tr>
                  <tr>
                    <td style="max-width: 10px" >
                      <label for="tpd_level">NAMA</label></td><br>
                      <td>
                      <input class="form-control" type="text" value="{{ $template_perjanjian_detail -> tpd_level}}"></td>
                    </tr>
                  <tr>
                    <td style="max-width: 10\5px" >
                      <label for="tpd_bil">BIL</label></td><br>
                      <td>
                      <input class="form-control" type="text" value="{{ $template_perjanjian_detail -> tpd_bil}}"></td>
                    </tr>
                  <tr>
                    <td style="max-width: 100%">
                      <label for="tpd_keterangan">KETERANGAN</label></td><br>
                      <td>
                      <textarea class="form-control" style="height: 500px; width: 500px; text-align:top" type="text" value="{{ $template_perjanjian_detail -> tpd_keterangan}}">{{ $template_perjanjian_detail -> tpd_keterangan}}</textarea></td>
                    </tr>
                  <tr>
    <td><button class="btn btn-secondary" type="submit" value="submit"><img width="20" src="/kemaskini.png" alt="">KEMASKINI</button></td>

                    </tr>

              </form>
              </tr> 
              
              </table>

          </div>
      </div>
      <div>

      </div>
     </div>
  </div></div>

<br>


@endsection
