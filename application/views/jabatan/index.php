<a href="<?php echo base_url ('Jabatan/create')?>" class="btn btn-primary">Create</a>
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Jabatan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($jabatan as $value) {
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $value->name ?></td>
                <td>
                    <a href="<?= base_url('Jabatan/edit/') . $value->id ?>" class="btn btn-sm btn-warning">Edit</a>&nbsp;
                    <a href="<?= base_url('Jabatan/delete/') . $value->id ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <?php
            $i++;
        }
        ?>
    <tbody>
</table>