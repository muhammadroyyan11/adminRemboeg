<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"><?= $title ?></h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="post" action="<?= site_url('admin/posting/proses') ?>">
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
                                        <label for="featured" class="col-form-label">Featured</label>
                                        <select class="form-control" id="featured" name="featured">
                                            <option value="Y" <?php if ($input->featured == "Y") {
                                                                    print ' selected';
                                                                } ?>>Ya</option>
                                            <option value="N" <?php if ($input->featured == "N") {
                                                                    print ' selected';
                                                                } ?>>TIdak</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="choice" class="col-form-label">Choice</label>
                                        <select class="form-control" id="choice" name="choice">
                                            <option value="Y" <?php if ($input->choice == "Y") {
                                                                    print ' selected';
                                                                } ?>>Ya</option>
                                            <option value="N" <?php if ($input->choice == "N") {
                                                                    print ' selected';
                                                                } ?>>TIdak</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="thread" class="col-form-label">Thread</label>
                                        <select class="form-control" id="thread" name="thread">
                                            <option value="Y" <?php if ($input->thread == "Y") {
                                                                    print ' selected';
                                                                } ?>>Ya</option>
                                            <option value="N" <?php if ($input->thread == "N") {
                                                                    print ' selected';
                                                                } ?>>TIdak</option>
                                        </select>
                                    </div>

                                    <!-- <div class="col">
                                    <label for="category" class="col-form-label"><span class="text-danger">*</span> Kategori</label>
                                    <select class="form-control" id="id_category" name="id_category">
                                        <option value="">- Pilih -</option>
                                        <?php foreach ($category as $c) : ?>
                                            <option value="<?= $c->id ?>" <?php if ($c->id == $input->id_category) {
                                                                                print ' selected';
                                                                            } ?>><?= $c->category_name ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <?= form_error('id_category', '<small class="form-text text-danger">', '</small>') ?>
                                </div> -->
                                </div>
                            </div>

                            <div class="col-md-10 offset-md-9">
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