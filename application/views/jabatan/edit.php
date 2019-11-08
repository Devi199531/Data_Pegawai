<form action="<?= base_url('Jabatan/update') ?>" method="post">
    <div class="form-group">
        <label>Nama Jabatan</label>
        <input type="hidden" name="id" value="<?= $jabatan->id ?>">
        <input type="text" name="name" value="<?= $jabatan->name ?>" class="form-control" placeholder="Nama Jabatan" required="">
    </div>
    <button type="submit" name="edit" value="edit" class="btn btn-primary">Update</button>
</form>
