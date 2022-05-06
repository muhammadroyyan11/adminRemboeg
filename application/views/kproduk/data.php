<!-- Zero configuration table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><?= $title ?></h4>
                    <div class="pull-right">
                        <button class="btn btn-primary btn-flat" data-toggle="modal" data-target="#default">
                            <i class="fa fa-user-plus"></i> Tambah
                        </button>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Status</th>
                                        <th>Nama Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($kproduk as $key => $data) { ?>

                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/user/toggle/') . $data->isActive ?>" class="btn btn-circle btn-sm <?= $data->isActive ? 'btn-secondary' : 'btn-success' ?>" title="<?= $data->isActive ? 'Nonaktifkan Kategori' : 'Aktifkan Kategori' ?>"><i class="fa fa-fw fa-power-off"></i></a>
                                            </td>
                                            <td><?= $data->nama ?></td>
                                            <!-- <td><?= $data->status ?></td> -->
                                            <th>
                                                <a href="<?= base_url('admin/kproduk/edit/') . $data->id_kproduk ?>" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('admin/kproduk/delete/') . $data->id_kproduk ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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


<!-- Modal -->
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Add <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form-horizontal" action="<?php echo base_url('admin/kproduk/add') ?>" method="post">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <span>Nama Kategori</span>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" id="namaKategori" class="form-control" name="namaKategori" placeholder="Masukkan Nama Kategori">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>