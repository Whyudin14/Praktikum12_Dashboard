<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<br>
<h3 class="text-center">Form Edit Mata Kuliah</h3>
<br>
<?php echo form_open("matakuliah/save_matakuliah") ?>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Mata Kuliah</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-book"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukkan Nama Mata Kuliah Anda" type="text" value="<?php echo $obj_matakuliah->nama?>" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="sks" class="col-4 col-form-label">SKS</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-pencil-square-o"></i>
          </div>
        </div> 
        <input id="sks" name="sks" placeholder="Masukkan SKS Anda" type="text" value="<?php echo $obj_matakuliah->sks?>" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-barcode"></i>
          </div>
        </div> 
        <input id="kode" name="kode" placeholder="Masukkan Kode Anda" type="text" value="<?php echo $obj_matakuliah->kode?>" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="dosen" class="col-4 col-form-label">Dosen</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user-circle"></i>
          </div>
        </div> 
        <input id="dosen" name="dosen" placeholder="Masukkan Dosen Anda" type="text" value="<?php echo $obj_matakuliah->dosen?>" class="form-control" required="required">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close() ?>
</div>