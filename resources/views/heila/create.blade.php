@extends('layout.temp')

@section('content')
<div class="container">
<div class="row pt-5"></div>
  <div class="row text-center pt-4">
    <div class="col">
    <h1> ORDER <h1>
    </div>
  </div>
</div>
<body>
<div class="container">
<form action="/home" method="POST">
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="nama_depan">Nama Depan</label>
      <input type="text" name="nama_depan" class="form-control" id="nama_depan">
      <div> {{$errors->first('nama_depan')}}</div>
    </div>
    <div class="form-group col-md-6">
      <label for="nama_belakang">Nama Belakang</label>
      <input type="text" name="nama_belakang" class="form-control" id="nama_belakang">
      <div> {{$errors->first('nama_belakang')}}</div>
    </div>
  </div>
  <div class="form-group">
    <label for="link_gambar">Link Gambar</label>
    <input type="text" name="link_gambar"class="form-control-file" id="link_gambar">
    <div> {{$errors->first('link_gambar')}}</div>
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat"class="form-control" id="alamat" >
    <div> {{$errors->first('alamat')}}</div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="kota">Kota</label>
      <input type="text" name="kota" class="form-control" id="kota">
      <div> {{$errors->first('kota')}}</div>
    </div>
    <div class="form-group col-md-4">
      <label for="provinsi">Provinsi</label>
      <input type="text" name="provinsi"class="form-control" id="provinsi">
      <div> {{$errors->first('provinsi')}}</div>
    </div>
    <div class="form-group col-md-2">
      <label for="zip">Kode Pos</label>
      <input type="text" name="zip"class="form-control" id="zip">
      <div> {{$errors->first('zip')}}</div>
    </div>
  </div>
  @csrf

  <button type="submit" class="btn btn-secondary">Order</button>
</form>
</div>

</body>
@endsection