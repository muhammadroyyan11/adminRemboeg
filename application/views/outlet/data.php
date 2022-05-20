<!-- Zero configuration table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data <?= $title ?></h4>
                    <div class="pull-right">
                        <a href="<?= site_url('admin/outlet/add') ?>" class="btn btn-primary btn-flat">
                            <i class="fa fa-user-plus"></i> Tambah
                        </a>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Outlet</th>
                                        <th>Alamat</th>
                                        <th>Maps</th>
                                        <th>Sience</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($outlet as $key => $data) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data->nama ?></td>
                                            <td><?= $data->alamat ?></td>
                                            <td><?= $data->maps ?></td>
                                            <td><?= $data->tahun ?></td>
                                            <th>
                                                <a href="<?= base_url('admin/slide/edit/') . $data->id_slide ?>" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></a>

                                            </th>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>