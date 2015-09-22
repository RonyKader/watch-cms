<?php 
  include ( 'template/header.php' );
?>
<div class="clearfix"></div>
    <section class="registaion-area">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
                <img src="images/lazy.jpg" class="responsive" alt="">
            </div>
            <!-- end of col md 6 -->
                <div class="col-md-6">

                    <form action="login_do.php" method="post" class="form-horizontal">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="username" id="inputEmail3" placeholder="Username">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="password" id="inputEmail3" placeholder="Password">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                               <a href="forget.php">Forget your password ?</a>
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-md-2">
                          <button type="submit" class="btn btn-default">Login</button>
                        </div>                        
                      </div>
                    </form>

                </div>
                <!-- End of Col md 6 -->
            </div>
        </div>
    </section>
<?php 
  include ( 'template/footer.php' );
?>