<a href="<?php echo base_url ('Unit/create')?>" class="btn btn-primary">Create</a>
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Unit</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($unit as $value) {
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $value->nama_unit ?></td>
                <td>
                    <a href="<?= base_url('Unit/edit/') . $value->id ?>" class="btn btn-sm btn-warning">Edit</a>&nbsp;
                    <a href="<?= base_url('Unit/delete/') . $value->id ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <?php
            $i++;
        }
        ?>
    <tbody>
</table>