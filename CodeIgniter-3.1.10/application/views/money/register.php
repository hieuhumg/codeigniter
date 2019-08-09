<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!--<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <header class="card-header">
                    <a href="<?= site_url('users/login') ?>" class="float-right btn btn-outline-primary mt-1">Log in</a>
                    <h4 class="card-title mt-2">Sign up</h4>
                </header>
                <article class="card-body">
                    <form method="post">
                        <div class="form-row">
                            <div class="col form-group">
                                <label>Ten </label>
                                <input type="text" class="form-control" placeholder="" name="name">
                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row end.// -->
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="" name="email">
                        </div> <!-- form-group end.// -->
                        <div class="form-group">
                            <label>Mat khau</label>
                            <input class="form-control" type="password" name="pass">
                        </div> <!-- form-group end.// -->
                        <div class="form-group">
                            <label>Nhap lai mat khau</label>
                            <input class="form-control" type="password" name="pass_repeat">
                        </div> <!-- form-group end.// -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="register"> Register  </button>
                        </div> <!-- form-group// -->
                        <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>
                    </form>
                </article> <!-- card-body end .// -->
                <div class="border-top card-body text-center">Have an account? <a href="">Log In</a></div>
            </div> <!-- card.// -->
        </div> <!-- col.//-->

    </div> <!-- row.//-->
