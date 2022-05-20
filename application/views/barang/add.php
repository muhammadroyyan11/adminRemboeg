<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data barang</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <?= form_open_multipart('admin/barang/insertdata') ?>
                <div class="form-body">
                    <div class="row">

                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Nama Produk</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="first-name" class="form-control" name="nama_barang" placeholder="Nama Barang">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Status Produk</span>
                                </div>
                                <div class="col-md-8">
                                    <select type="password" name="status" value="<?= set_value('status') ?>" class="form-control">
                                        <option value="">- Pilih -</option>
                                        <option value="Tersedia" <?= set_value('status') == 1 ? "selected" : null ?>>Tersedia</option>
                                        <option value="Tidak Tersedia" <?= set_value('status') == 2 ? "selected" : null ?>>Tidak Tersedia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Harga</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" id="first-name" class="form-control" name="harga" placeholder="Masukkan nominal harga">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Kategori Artikel</span>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" id="featured" name="kategori">
                                        <option class="form-control" value="Y">-- Pilih --</option>
                                        <?php foreach ($kategori as $key => $data) { ?>
                                            <option class="form-control" value="<?= $data->id_kproduk ?>" <?php if ($data->id_kproduk == $data->id_kproduk) {
                                                                                                                print ' selected';
                                                                                                            } ?>><?= $data->nama ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Gambar Produk</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="userfile" class="file">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Link Tokopeida</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="first-name" class="form-control" name="link_tokped" placeholder="Link Tokopedia (https://www.tokopedia.com/)">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Deskripsi Produk</span>
                                </div>
                                <div class="col-md-8">
                                    <?= form_textarea('description', $input->description, ['row' => 4, 'class' => 'form-control', 'id' => 'ckeditor']); ?>
                                    <?= form_error('description', '<small class="form-text text-danger">', '</small>') ?>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                        </div>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>