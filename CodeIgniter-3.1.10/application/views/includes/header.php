<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/jquery-ui.css");?>">
    <title><?= $siteTitle ?></title>
</head>
<style>
</style>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Thể loại tiền
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php foreach ($listCat as $item) : ?>
                        <a class="dropdown-item" href="<?= site_url('money/index/view?id=' . $item->id); ?>"><?= $item->name; ?></a>
                        <?php endforeach;?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <button type="button" class="btn btn-primary btn-sm mr-4 btn-search">Tìm kiếm nâng cao</button>
            <form class="form-inline my-2 my-lg-0" method="get" action="<?= site_url('money/index/view') ?>">
                <input class="form-control mr-sm-2" type="search" placeholder="Tim kiem theo noi dung" aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <br>
    <div class="row">
        <div class="col-md-9 offset-md-3 search-adv">
            <form class="form-inline" method="get" action="<?= site_url('money/index/view') ?>">
                <div class="form-group mb-2">
                    <label class="pr-3">Tù ngày</label>
                    <input type="text" class="form-control" id="date1" name="tungay" placeholder="dd-mm-yy">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label class="pr-3">Đến ngày</label>
                    <input type="text" class="form-control" id="date2" name="denngay" placeholder="dd-mm-yy">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Lọc</button>
            </form>
        </div>
    </div>
    <br>
</div>
<div class="container">