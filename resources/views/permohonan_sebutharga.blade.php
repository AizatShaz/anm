@extends('bases')
<style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
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

<div class="row g-0">
  <div class="col-xxl-6 px-xxl-2">
    <div class="card h-100">
      <div class="card-header bg-light py-2">
        <div class="row flex-between-center">
          <div class="col-auto">
            <h6 class="mb-0">Permohonan Sebutharga</h6>
          </div>
              <label for="sebutharga_jenis_permohonan">JENIS PERMOHONAN:</label>
              <select id="selectbox" name="" onchange="javascript:location.href = this.value;">
              <option  >Sila Pilih</option>
            <option value="/permohonan_sebutharga_luaran/create" >Permohonan Dalaman</option>
            <option value="/permohonan_sebutharga_dalaman/create">Permohonan Luaran</option>
        </select>

        </div>
      </div>
      </div>
    </div>
  </div>


<h2></h2>
<script type="text/javascript">
  window.onload = function(){
      location.href=document.getElementById("selectbox").value;
  }       
</script>
@endsection
