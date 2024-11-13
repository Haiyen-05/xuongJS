<?php
    session_start();
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/taikhoan.php";
    include "model/binhluan.php";
    include "view/header.php";
    include "global.php";

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    $spnew=loadall_sanpham_home();
    $dsdm=loadall_danhmuc();
    $dstop10=loadall_sanpham_top10();

    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'sanpham':
                if((isset($_POST['kyw'])) && ($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                if((isset($_GET['iddm'])) && ($_GET['iddm']>0)){
                $iddm=$_GET['iddm'];
               
                }else{
                $iddm=0;
                }
                $dssp=loadall_sanpham("$kyw",$iddm);
                $tendm=load_ten_dm($iddm);
                include "view/sanpham.php";
               break;

            case 'sanphamct':
                if((isset($_GET['idsp'])) && ($_GET['idsp']>0)){
                $id=$_GET['idsp'];
                $onesp=loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai=load_sanpham_cungloai($id,$iddm);
                include "view/sanphamct.php";
                }else{
                include "view/home.php";
                }
                
               break;

            case 'gioi_thieu':
             include "view/gioi_thieu.php";
            break;
                 // Đăng ký:
            case 'dangky':
                if((isset($_POST['dangky'])) && ($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng bình luận hoặc đặt hàng!";
                }
                include "view/taikhoan/dangky.php";
               break;

              // Đăng nhập:
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check_user = check_user($user);
                $check_pass = check_pass($pass);

                if (is_array($check_user) && is_array($check_pass)) {
                    $_SESSION['user'] = $check_user;
                    $_SESSION['pass'] = $check_pass;
                    header("location:index.php");
                } 
                else if (is_array($check_user) && !is_array($check_pass)) {
                    $thongbao = "Mật khẩu không chính xác!</br>";
                    
                }
                else if (!is_array($check_user) && is_array($check_pass)) {
                    $thongbao = "Tên đăng nhập không chính xác!</br>";
                    
                } 
                else {
                    $thongbao = "Tài khoản không tồn tại vui lòng đăng kí tài khoản!</br>";
                    
                }
            }
            include "view/home.php";
            break;


               case 'edit_taikhoan':
                if((isset($_POST['capnhat'])) && ($_POST['capnhat'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tell=$_POST['tell'];
                    $id=$_POST['id'];
                    
                    update_taikhoan($id,$user,$pass, $email, $address, $tell);
                    $_SESSION['user']=check_user($user,$pass);
                    header('location:index.php?act=edit_taikhoan');                     
                }
                include "view/taikhoan/edit_taikhoan.php";
               break;

               case 'quenmk':
                if((isset($_POST['guiemail'])) && ($_POST['guiemail'])){
                    $email=$_POST['email'];
                    $check_email=check_email($email);

                    if(is_array($check_email)){
                        $thongbao="Mật khẩu của bạn là:".$check_email['pass'];
                    }else{
                        $thongbao="Email này không tồn tại";
                    }
                }
                include "view/taikhoan/quenmk.php";
               break;
            
            case 'thoat':
                session_unset();
                header("location:index.php");
               break;

            case 'lien_he':
                include "view/lien_he.php";
               break;
               
            case 'gop_y':
                include "view/gop_y.php";
               break;

            
            case 'hoi_dap':
                include "view/hoi_dap.php";
               break;
            
            //    case 'guibinhluan':
            //     if((isset($_POST['guibinhluan'])) && ($_POST['guibinhluan'])){
            //         $iduser=$_POST['iduser'];
            //         $idpro=$_POST['idpro'];
            //         $noidung=$_POST['noidung'];
            //         $ngaybinhluan=$_POST['ngaybinhluan'];
            //         $check_binhluan=check_binhluan($iduser,$idpro,$noidung,$ngaybinhluan);
            //         if(is_array($check_user)){
            //             $_SESSION['user']['id']=$check_binhluan;
            //          $thongbao="Bạn đã bình luận thành công!"; 
            //          header('location:index.php');  
            //         }else{
            //          $thongbao="Vui lòng nhập đúng form bình luận! ";   

            //         }
                    
            //     }
            //     include "view/binhluan/binhluanform.php";
            //    break;
            
            default:
            include "view/home.php";  
                break;
        }
    }else{
      include "view/home.php";  
    }
    
    include "view/footer.php";
?>