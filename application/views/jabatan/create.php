<?= form_open('Jabatan/store') ?>
<div class="form-group">
    <label>Nama Jabatan</label>
    <input type="text" name="name" value="" class="form-control" placeholder="Nama Jabatan" required="">
</div>
<button type="submit" value="add" class="btn btn-primary">Submit</button>
<?= form_close() ?>
