


        <div class="row">
            <div class="col-md-6">
                <?= form_open() ?>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Noi dung</label>
                        <input type="text" class="form-control"  name="content">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">So tien</label>
                        <input type="number" class="form-control"  name="money">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ngay tieu</label>
                        <input type="text" class="form-control" id="datepicker" name="date">
                    </div>
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
