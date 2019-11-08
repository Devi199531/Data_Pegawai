<form action="<?= base_url('Unit/update') ?>" method="post">
    <div class="form-group">
        <label>Nama Unit</label>
        <input type="hidden" name="id" value="<?= $unit->id ?>">
        <input type="text" name="nama_unit" value="<?= $unit->nama_unit ?>" class="form-control" placeholder="Nama Unit" required="">
    </div>
    <button type="submit" name="edit" value="edit" class="btn btn-primary">Update</button>
</form>
