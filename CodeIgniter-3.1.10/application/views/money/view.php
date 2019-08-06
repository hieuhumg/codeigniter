
<!-- Modal -->
<?php foreach ($list as $item) : ?>
<div class="modal fade" id="exampleModal-<?= $item->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open("money/index/edit?id=" . $item->id)  ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Noi dung</label>
                    <input type="text" class="form-control"  name="content" value="<?= $item->content;?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">So tien</label>
                    <input type="number" class="form-control"  name="money" value="<?= $item->money;?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Ngay tieu</label>
                    <input type="text" class="form-control"  name="date" value="<?= date('Y-m-d', $item->date) ?>">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<?php endforeach; ?>
<div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Số tiền(VND)</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Ngày tiêu</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col">Ngày sửa</th>
                <th scope="col">Thao tác</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $item) : ?>
            <tr>
                <th scope="row"><?= $item->id ?></th>
                <td><?= number_format($item->money)?></td>
                <td><?= $item->content ?></td>
                <td><?= date('d/m/Y', $item->date) ?></td>
                <td><?= date('d/m/Y', $item->date_created) ?></td>
                <td><?= date('d/m/Y', $item->date_modified) ?></td>
                <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal-<?= $item->id ?>">sửa</button>
                    <button type="button" class="btn btn-danger btn-sm delete" data-toggle="modal" data-target="#delete_exampleModal-<?= $item->id ?>">xóa</button>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php foreach ($list as $item) : ?>
<div class="modal fade" id="delete_exampleModal-<?= $item->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h1>Bạn có muốn xóa không?</h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?= site_url('money/index/delete?id=' . $item->id); ?>'">có</button>
                <button type="submit" class="btn btn-primary">Hủy bỏ</button>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <?php for ($i = 1; $i <= $page; $i++): ?>
        <li class="page-item"><a class="page-link" href="<?= site_url('money/index/view?page=' . $i); ?>"><?= $i; ?></a></li>
        <?php endfor; ?>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>
<script>

</script>
