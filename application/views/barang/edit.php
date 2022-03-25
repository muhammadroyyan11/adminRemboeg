<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Data barang</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <?= form_open('', [], ['id_barang' => $barang['id_barang']]); ?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Nama Barang</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="nama_barang" class="form-control" name="nama_barang" placeholder="Masukkan Nama" value="<?= set_value('nama_barang', $barang['nama_barang']); ?>">
                                        <div class="form-control-position">
                                            <i class="feather icon-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Jenis Barang</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <!-- <input type="number" id="no_telp" class="form-control" name="no_telp" placeholder="Masukkan No Tlp" value="<?= set_value('no_telp'); ?>"> -->
                                        <select name="jenis_id" id="jenis_id" class="custom-select">
                                            <option value="" selected disabled>Pilih Jenis Barang</option>
                                            <?php foreach ($jenis as $j) : ?>
                                                <option <?= $barang['jenis_id'] == $j['id_jenis'] ? 'selected' : ''; ?> <?= set_select('jenis_id', $j['id_jenis']) ?> value="<?= $j['id_jenis'] ?>"><?= $j['nama_jenis'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <span>Satuan Barang</span>
                                </div>
                                <div class="col-md-8">
                                    <div class="position-relative has-icon-left">
                                        <!-- <input type="number" id="no_telp" class="form-control" name="no_telp" placeholder="Masukkan No Tlp" value="<?= set_value('no_telp'); ?>"> -->
                                        <select name="satuan_id" id="satuan_id" class="custom-select">
                                            <option value="" selected disabled>Pilih Satuan Barang</option>
                                            <?php foreach ($satuan as $s) : ?>
                                                <option <?= $barang['satuan_id'] == $s['id_satuan'] ? 'selected' : ''; ?> <?= set_select('satuan_id', $s['id_satuan']) ?> value="<?= $s['id_satuan'] ?>"><?= $s['nama_satuan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 offset-md-4">
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