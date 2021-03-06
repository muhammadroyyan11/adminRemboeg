<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"><?= $title ?></h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <?= form_open_multipart('admin/posting/insertdata') ?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Judul Artikel</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="first-name" class="form-control" name="judul" placeholder="Judul Artikel">
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
                                            <option class="form-control" value="<?= $data->id_kartikel ?>" <?php if ($data->id_kartikel == $data->id_kartikel) {
                                                                                                                print ' selected';
                                                                                                            } ?>><?= $data->nama ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <span>Gambar Artikel</span>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" id="first-name" name="gambar" placeholder="Judul Artikel">
                                    </div>
                                </div>
                            </div> -->
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Konten</span>
                                </div>
                                <div class="col-md-8">
                                    <?= form_textarea('konten', $input->konten, ['row' => 4, 'class' => 'form-control', 'id' => 'ckeditor']); ?>
                                    <?= form_error('konten', '<small class="form-text text-danger">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Gambar</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="userfile" class="file">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Featured Artikel</span>
                                </div>
                                <div class="col-md-8">
                                    <select type="password" name="featured" value="<?= set_value('featured') ?>" class="form-control">
                                        <option value="">- Pilih -</option>
                                        <option value="Ya" <?= set_value('featured') == 1 ? "selected" : null ?>>Ya</option>
                                        <option value="Tidak" <?= set_value('featured') == 2 ? "selected" : null ?>>Tidak</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-10 offset-md-9">
                            <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>

<script>
    var ckeditor = CKEDITOR.replace('ckeditor', {
        height: '600px'
    });

    CKEDITOR.disableAutoInline = true;
    CKEDITOR.inline('editable');
</script>
<script>
    $('#summernote').summernote({
        height: 300,
    });
</script>