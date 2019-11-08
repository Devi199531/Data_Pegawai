<?= form_open('pegawai/store') ?>
<div class="form-group">
    <label>Nama Pegawai</label>
    <input type="text" name="nama" value="" class="form-control" placeholder="Nama Pegawai" required="">
</div>
<div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
</div>
<div class="form-group">
   	<label>Tanggal Lahir</label>
    <input type="date" class="form-control" name="tanggal_lahir">
</div>
<div class="form-group">
    <label>Jabatan</label>
    <select name="jabatan_id" class="form-control" required="">
        <option value="">-- pilih jabatan --</option>
        <?php foreach ($jabatan as $value) { ?>
            <option value="<?= $value->id ?>"><?= $value->name ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group">
    <label>Unit Kerja</label>
    <select name="unit_id" class="form-control" required="">
        <option value="">-- pilih unit kerja --</option>
        <?php foreach ($unit as $value) { ?>
            <option value="<?= $value->id ?>"><?= $value->nama_unit ?></option>
        <?php } ?>
    </select>
</div>
<button type="submit" value="add" class="btn btn-primary">Submit</button>
<?= form_close() ?>
