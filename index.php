  <?php
    session_start();
    include "global.php";
    include "dao/pdo.php";
    include "dao/hang-hoa.php";
    include "dao/loai.php";
    include "dao/khach_hang.php";
    include "dao/login.php";


    require("./content/PHPMailer-master/src/PHPMailer.php");
    require("./content/PHPMailer-master/src/SMTP.php");
    require("./content/PHPMailer-master/src/Exception.php");


    ?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Lương Minh Hoàng</title>


      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


      <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/client/style.css">


  </head>

  <body>

      <?php
        include "site/component/header.php";
        ?>

      <div class="container">
          <div class="content-index">
              <?php
                if (isset($_GET['act']) && ($_GET['act'] != "")) {
                    $act = $_GET['act'];
                    switch ($act) {
                        case 'product-detail':
                            if (isset($_GET['idsp']) && ($_GET['idsp']) > 0) {

                                $idspdetail = $_GET['idsp'];
                                hang_hoa_tang_so_luot_xem($idspdetail);
                                $onesp = hang_hoa_select_by_id($idspdetail);
                                extract($onesp);
                                $spcungloai = hang_hoa_cung_loai($idspdetail, $ma_loai);
                                include "site/page/product-detail.php";
                            }
                            break;

                        case 'product':
                            if (isset($_GET['iddm']) && ($_GET['iddm']) > 0) {
                                $iddm = $_GET['iddm'];
                                $product_cate = hang_hoa_select_by_loai($iddm);
                            }
                            if (isset($_POST['key']) && ($_POST['key']) != "") {
                                $keyword = $_POST['key'];
                                $keyone = hang_hoa_select_key($keyword);
                            }
                            include "site/page/product.php";
                            break;

                        case 'account':
                            include "site/page/account.php";
                            break;

                        case 'logout':
                            session_unset();
                            header('location: index.php');
                            break;

                        case 'form-forget':

                            include "site/account/forget-password.php";
                            break;


                        case 'forget-pass':

                            if (isset($_POST['forgot']) &&  ($_POST['forgot'])) {
                                if (isset($_POST['email']) && !empty($_POST['email'])) {

                                    $email = $_POST["email"];
                                    // kiểm tra email
                                    $email_info = khach_hang_select_by_email($email);

                                    if ($email_info) {

                                        $new_pass = bin2hex(random_bytes(3));  // mỗi bytes là 2 kí tự    hexadecimals  0-9 a-f
                                        $new_pass_update =  password_hash($new_pass, PASSWORD_DEFAULT);   // mã hóa trước khi update

                                        updata_pass_forgot($new_pass_update, $email);

                                        $mail = new PHPMailer\PHPMailer\PHPMailer();
                                        $mail->IsSMTP(); // enable SMTP

                                        $mail->SMTPAuth = true; // authentication enabled
                                        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                                        $mail->Host = "smtp.gmail.com";
                                        $mail->Port = 465; // or 587
                                        $mail->IsHTML(true);
                                        $mail->Username = "lmhoang698@gmail.com";
                                        $mail->Password = "hkvt xtqc irnj ddlh";
                                        $mail->SetFrom("lmhoang698@gmail.com");

                                        $subject = "Lấy lại mật khẩu mới";
                                        $encoded_subject = mb_encode_mimeheader($subject, 'UTF-8');

                                        $mail->Subject = $encoded_subject;
                                        $mail->Body = "Mật khẩu mới của bạn là: " . $new_pass;
                                        $mail->AddAddress($email);

                                        if (!$mail->Send()) {
                                            $error_send_mail = '<p class="text-red" >Gửi mail thất bại.</p>';
                                            header('location: index.php?act=forget-pass');
                                        } else {
                                            header('location: index.php?act=login');
                                        }
                                    } else {
                                        $error = '<p class="text-red" >Email không tồn tại.</p>';
                                        $_SESSION['error_send_email'] = $error;
                                        header('location: index.php?act=form-forget');
                                    }
                                } else {
                                    $error = '<p class="text-red" >Vui lòng nhập email.</p>';
                                    $_SESSION['email_error'] = $error;
                                    header('location: index.php?act=form-forget');
                                }
                            }
                            break;



                        case 'login':
                            if (isset($_POST['login']) && ($_POST['login'])) {
                                $name = $_POST['name'];
                                $pass = $_POST['pass'];

                                if (!empty($name) && !empty($pass)) {
                                    $checkuser = checkuser_login($name, $pass);

                                    if ($checkuser) {
                                        $_SESSION['user'] = $checkuser;
                                        header('location: index.php');
                                    } else {
                                        $thongbao = "Tên đăng nhập hoặc mật khẩu không đúng.";
                                    }
                                } else {
                                    $thongbao = "Vui lòng nhập tên đăng nhập và mật khẩu.";
                                }
                            }

                            include "site/account/login.php";
                            break;


                        case 'register':
                            if (isset($_POST['register']) && $_POST['register']) {
                                $mat_khau = $_POST['mat_khau'];
                                $ho_ten = $_POST['ho_ten'];
                                $email = $_POST['email'];
                                $error_hoten = '';
                                $error_email = '';
                            
                                if (khach_hang_exist_ho_ten($ho_ten)) {
                                    $error_hoten = '<a class="text-red">Tên đăng nhập đã tồn tại.</a>';
                                }
                                
                                if (khach_hang_exist_email($email)) {
                                    $error_email = '<a class="text-red">Email đã tồn tại.</a>';
                                }
                            
                                // Kiểm tra nếu không có lỗi
                                if (empty($error_hoten) && empty($error_email)) {
                                    // Mã hóa mật khẩu trước khi lưu vào cơ sở dữ liệu
                                    $hashed_password = password_hash($mat_khau, PASSWORD_DEFAULT);
                            
                                    // Tiếp tục đăng ký nếu không có lỗi
                                    khach_hang_register($hashed_password, $ho_ten, $email);
                                    $thongbao = "Bạn đã đăng ký thành công";
                                }
                            }
                            
                            include "site/account/register.php";
                            break;

                            

                        case 'edit-tai-khoang':
                            if (isset($_POST['btn-edit'])) {
                                $mat_khau = $_POST['mat_khau'];
                                $ho_ten = $_POST['ho_ten'];
                                $email = $_POST['email'];
                                $ma_kh = $_POST['id'];
                                // Cập nhật thông tin tài khoản trong $_SESSION
                                $_SESSION['user']['ho_ten'] = $ho_ten;
                                $_SESSION['user']['mat_khau'] = $mat_khau;
                                $_SESSION['user']['email'] = $email; // Cập nhật email
                                khach_hang_edit($mat_khau, $ho_ten, $email, $ma_kh);

                                header('Location: index.php?act=account');
                            }
                        default:
                            include "site/page/home.php";
                            break;
                    }
                } else {
                    include "site/page/home.php";
                }
                ?>
          </div>
      </div>

      <?php
        include "site/component/footer.php";
        ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="<?= $CONTENT_URL ?>/js/jquery.min.js"></script>
      <script src="<?= $CONTENT_URL ?>/js/jquery.sticky.js"></script>
      <script src="<?= $CONTENT_URL ?>/js/sticky-header.js"></script>
  </body>

  </html>