  <?php
    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
        extract($_SESSION['user']);
    }
    ?>



  <div class="content">
      <div class="container">
          <div class="box">
              <div class="row-account">
                  <div class="left-container">
                      <div class="user-infor">
                          <img src="images/user-img.png" alt="">
                          <span><?= $ho_ten ?></span>
                      </div>
                      <div class="side-bar-content">
                          <ul>
                              <a href="">
                                  <li class="slide-bar active"><i class="fa fa-edit"></i><span>Thông tin tài khoản</span></li>
                              </a>
                              <a href="index.php?act=logout">
                                  <li class="slide-bar"><i class="fa-solid fa-right-from-bracket"></i><span> Đăng xuất</span></li>
                              </a>

                          </ul>
                      </div>
                  </div>
                  <div class="right-container">
                      <h3 class="title-content">Thông tin tài khoản</h3>
                      <div class="account-infor">



                          <form action="index.php?act=edit-tai-khoang" method="POST">
                              <div class="form-control">
                                  <label for="" class="input-label">
                                      Họ & tên
                                  </label>
                                  <input type="text" placeholder="Thêm họ tên" class="input-field" name="ho_ten" value="<?= $ho_ten ?>">
                              </div>
                              <div class="form-control">
                                  <label for="" class="input-label">
                                      Email
                                  </label>
                                  <input type="email" placeholder="Thêm email" class="input-field" name="email" value="<?= $email ?>">
                              </div>
                              <div class="form-control">
                                  <label for="" class="input-label">
                                      Mật khẩu
                                  </label>
                                  <input type="text" placeholder="Thêm mật khẩu" class="input-field" name="mat_khau" value="<?= $mat_khau ?>">
                              </div>
                              <input type="hidden" name="id" value="<?= $ma_kh ?>">
                              <button type="submit" name="btn-edit" class="btn-update">Cập nhật</button>
                          </form>
                      </div>
                  </div>
                  <!-- /.features -->
              </div>
          </div>
      </div>
  </div>