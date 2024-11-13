<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$hinhpath="../upload/".$img;
if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath."' height='80'>";
}else{
    $hinh="no photo";
}
?>
<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        <select name="iddm" >
                            <option value="0" selected>Tất cả</option>
                            <?php
                          foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            if($iddm==$id){
                                echo '<option value="'.$id.'" selected>'.$name.'</option>';
                            }
                            else{
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                           
                        }
                        ?>
                        </select>
                    </div>
                    <div class="row mb10">                    
                    Tên sản phẩm <br>
                    <input type="text" name="tensp" value="<?=$sanpham['name']?>">
                    </div>
                    <div class="row mb10">                    
                    Giá sản phẩm <br>
                    <input type="text" name="giasp" value="<?=$sanpham['price']?>">
                    </div>
                    <div class="row mb10">                    
                    Hình <br>
                    <input type="file" name="hinh" >
                    <?=$hinh?> 
                    </div>
                    <div class="row mb10">                    
                    Mô tả<br>
                    <textarea name="mota"  cols="30" rows="10"><?=$sanpham['mota']?></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$sanpham['id']?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">                    
                        <input type="reset" value="NHẬP LẠI">                    
                        <a href="index.php?act=listsp"> <input type="button" value="DANH SÁCH"></a>  
                        <a href="index.php?act=thoat"><input type="button" value="Thoát"></a>                   
                    </div>
                    
                </form>
            </div>
        </div>
        </div> 