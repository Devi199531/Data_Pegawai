<form action="<?= base_url('pegawai/update') ?>" method="post">
    <div class="form-group">
        <label>Nama Pegawai</label>
        <input type="hidden" name="id" value="<?= $pegawai->id ?>">
        <input type="text" name="nama" value="<?= $pegawai->nama ?>" class="form-control" placeholder="Nama Kota" required="">
    </div>
    <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="hidden" name="id" value="<?= $pegawai->id ?>">
        <input type="text" name="tempat_lahir" value="<?= $pegawai->tempat_lahir ?>" class="form-control" placeholder="Tempat Lahir" required="">
    </div>
    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="hidden" name="id" value="<?= $pegawai->id ?>">
        <input type="date" name="tanggal_lahir" value="<?= $pegawai->tanggal_lahir ?>" class="form-control" placeholder="Tanggal Lahir" required="">
    </div>
    <div class="form-group">
        <label>Jabatan</label>
        <select name="jabatan_id" class="form-control" required="">
            <?php foreach ($jabatan as $value) { ?>
                <option value="<?= $value->id ?>" <?= $value->id == $pegawai->jabatan_id ? 'selected' : '' ?>><?= $value->name ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label>Unit Kerja</label>
        <select name="unit_id" class="form-control" required="">
            <?php foreach ($unit as $value) { ?>
                <option value="<?= $value->id ?>" <?= $value->id == $pegawai->unit_id ? 'selected' : '' ?>><?= $value->nama_unit ?></option>
            <?php } ?>
        </select>
    </div>
    <button type="submit" name="edit" value="edit" class="btn btn-primary">Update</button>
</form>
