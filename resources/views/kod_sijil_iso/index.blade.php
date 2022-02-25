
@extends('bases')

@section('content')   
<div class="col-lg-12 pe-lg-2">
  <div>
    <div class="card-header">
      <h6 class="mb-0 label-menu">KOD ISO</h6>
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
          <h5 >JUMLAH REKOD: <span style="color: #2CABE1">{{ $kod_sijil_iso2 }}</span></h5>

          </div>
          <br>
          <div class="col-sm-10 mb-12">
            <table  style="text-align: center">
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
                <td>{{ $spk -> idJC}}</td>
                <td><a href="{{ asset('/storage/'.$spk->keterangan)  }}">VIEW</a></td>
                <td>
                  <div class="row">
                    <div class="col">
                      <button class="btn"><a style="color: #ffff" href="/kod_sijil_iso/{{ $spk -> id }}/edit"> <i class="fas fa-pen"></i></a></button>
                    </div>
                    <div class="col">
                      <form action="/kod_sijil_iso/{{ $spk -> id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="color: black" class="btn"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </div>
                  </div>

                </td>
                </tr>
            @endforeach
            </table>
        </div>
        </div>
        <br>
        <br>
        <br>
    </div>
</div>
<!--sssss-->


<script>
$target_dir = "kod_sijil_iso/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
</script>
@endsection
