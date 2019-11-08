<a href="<?php echo base_url ('pegawai/create')?>" class="btn btn-primary">Create</a>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pegawai</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jabatan</th>
            <th>Unit</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($pegawai as $value) {
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $value->nama ?></td>
                <td><?= $value->tempat_lahir ?></td>
                <td><?= $value->tanggal_lahir ?></td>
                <td><?= $value->name ?></td>
                <td><?= $value->nama_unit ?></td>
                <td>
                    <a href="<?= base_url('pegawai/edit/') . $value->id ?>" class="btn btn-sm btn-warning">Edit</a>&nbsp;
                    <a href="<?= base_url('pegawai/delete/') . $value->id ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <?php
            $i++;
        }
        ?>
    <tbody>
</table>