
        <div class="row">
            <div class="col-6">
                <?= form_open() ?>
                <div class="form-group">
                    <label>Noi dung</label>
                    <input type="text" class="form-control"  name="content">
                    <?php echo form_error('content', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label>So tien</label>
                    <input type="number" class="form-control"  name="money">
                    <?php echo form_error('money', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label>Ngay tieu</label>
                    <input type="text" class="form-control" id="datepicker" name="date">
                    <?php echo form_error('date', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                </div>
                <label>Thể loại tiền</label>
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect04" name="category">
                        <?php foreach ($listCat as $item):?>
                            <option value="<?= $item->id ?>"><?= $item->name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Nhap</button>
                </div>
            <?= form_close() ?>
            </div>
        </div>