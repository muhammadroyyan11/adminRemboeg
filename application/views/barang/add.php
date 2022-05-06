<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data barang</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="<?= base_url('admin/barang/process')?>" class="form" method="post">
                <div class="form-body">
                    <div class="row">
                        
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Nama Barang</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="nama_barang" class="form-control" name="nama_barang" placeholder="Masukkan Nama" value="<?= set_value('nama_barang'); ?>">
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
                                    <span>Status</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <select type="password" name="status" value="<?= set_value('status') ?>" class="form-control">
                                            <option value="">- Pilih -</option>
                                            <option value="Tersedia" <?= set_value('status') == 1 ? "selected" : null ?>>Tersedia</option>
                                            <option value="Tidak Tersedia" <?= set_value('status') == 2 ? "selected" : null ?>>Tidak Tersedia</option>
                                        </select>
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
                                    <span>Deskripsi</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <fieldset class="form-group">
                                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Masukkan Deskripsi"></textarea>
                                        </fieldset>
                                        <div class="form-control-position">
                                            <i class="feather icon-file"></i>
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