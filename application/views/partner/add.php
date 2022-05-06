<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data <?= $title ?></h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="<?= base_url('admin/partner/process')?>" class="form" method="post">
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Nama Partner</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="nama_barang" class="form-control" name="nama" placeholder="Masukkan Nama" value="<?= set_value('nama'); ?>">
                                        <div class="form-control-position">
                                            <i class="feather icon-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Alamat</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="nama_barang" class="form-control" name="alamat" placeholder="Masukkan Alamat Lengkap" value="<?= set_value('alamat'); ?>">
                                        <div class="form-control-position">
                                            <i class="feather icon-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Instagram</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="nama_barang" class="form-control" name="instagram" placeholder="e.g @Remboegpawonkelud" value="<?= set_value('instagram'); ?>">
                                        <div class="form-control-position">
                                            <i class="feather icon-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Link Maps</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="nama_barang" class="form-control" name="maps" placeholder="Masukkan Link Google Maps" value="<?= set_value('maps'); ?>">
                                        <div class="form-control-position">
                                            <i class="feather icon-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>