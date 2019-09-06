<main role="main" class="container">

    <div class="row">
        <div class="col-md">
            <a href="<?php echo base_url('penduduk/add'); ?>">
                <button type="button" class="btn btn-outline-primary mb-2">Primary</button>
            </a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Dusun</th>
                        <th scope="col">RT</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php if (empty($penduduk)) : ?>
                        <tr>
                            <td colspan="6">
                                <div class="alert alert-danger" role="alert">
                                    <h5>Data not found!</h5>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>

                    <?php foreach ($penduduk as $row) : ?>
                        <tr>
                            <th scope="row"><?php echo ++$start; ?></th>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><?php echo $row['dusun']; ?></td>
                            <td><?php echo $row['rt']; ?></td>
                            <td>
                                <a href="#" class="badge badge-warning">Detail</a>
                                <a href="#" class="badge badge-success">Edit</a>
                                <a href="#" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</main><!-- /.container -->