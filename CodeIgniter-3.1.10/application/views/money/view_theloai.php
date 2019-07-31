<?= form_open("money/index/edit?id=" . $item->id)  ?>
    <div class="modal-body">
        <div class="form-group">
            <label for="exampleFormControlInput1">name</label>
            <input type="number" class="form-control"  name="money" value="<?= $item->money;?>">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
<?= form_close(); ?>