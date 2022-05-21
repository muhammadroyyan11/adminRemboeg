<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"><?= $title ?></h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <span>Nama Produk</span>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="hidden" name="id_barang" value="<?= $row->id_barang ?>">
                                        <input type="text" id="first-name" class="form-control" name="nama_barang" value="<?= $this->input->post('nama_barang') ?? $row->name ?>" placeholder="Nama Barang">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <span>Status Produk</span>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="status" value="<?= $row->status?>" class="form-control">
                                            <option value="Tersedia" <?= set_value('status') == 1 ? "selected" : null ?>>Tersedia</option>
                                            <option value="Tidak Tersedia" <?= set_value('status') == 2 ? "selected" : null ?>>Tidak Tersedia</option>
                                        </select>
                                        <span style="color: red;">(*)Pastikan Status Produk Sudah Benar</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <span>Harga</span>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" id="first-name" class="form-control" name="harga" value="<?= $this->input->post('harga') ?? $row->harga ?>" placeholder="Masukkan nominal harga">
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
                                        <span style="color: red;">(*)Pastikan Kategori Sudah Benar</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <span>Gambar Produk</span>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" name="userfile" value="<?= $this->input->post('userfile') ?? $row->gambar_name ?>" class="file">
                                        <input type="text" name="old_image" value="<?php echo $row->gambar_name ?>" />
                                        <span style="color: red;">(*)Abaikan form ini jika tidak ada perubahan gambar</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <span>Link Tokopeida</span>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" id="first-name" class="form-control" value="<?= $this->input->post('link_tokped') ?? $row->link_tokped ?> " name="link_tokped" placeholder="Link Tokopedia (https://www.tokopedia.com/)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <span>Deskripsi Produk</span>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" id="ckeditor" cols="80" rows="10"><?= $this->input->post('description') ?? $row->description ?> </textarea>
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