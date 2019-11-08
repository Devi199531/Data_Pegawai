<?= form_open('Unit/store') ?>
<div class="form-group">
    <label>Nama Unit</label>
    <input type="text" name="nama_unit" value="" class="form-control" placeholder="Nama Unit" required="">
</div>
<button type="submit" value="add" class="btn btn-primary">Submit</button>
<?= form_close() ?>
