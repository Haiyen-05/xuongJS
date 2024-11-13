<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH TÀI KHOẢN</h1>
            </div>
            <div class="row frmcontent">
                    <div class="row mb10 frmdanhsachloai">                    
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ TÀI KHOẢN</th>
                            <th>TÊN ĐĂNG NHẬP</th>
                            <th>MẬT KHẨU</th>
                            <th>EMAIL</th>
                            <th>ĐỊA CHỈ</th>
                            <th>ĐIỆN THOẠI</th>
                            <th>VAI TRÒ</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($listtaikhoan as $taikhoan) {
                            extract($taikhoan);
                            $suatk="index.php?act=suatk&id=".$id;
                            $xoatk="index.php?act=xoatk&id=".$id;
                            echo '<tr>
                            <td><input type="checkbox" name="" ></td>
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>
                            <td>'.$pass.'</td>
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>
                            <td>'.$tell.'</td>
                            <td>'.$role.'</td>
                            <td>
                             <a href="'.$xoatk.'"><input type="button" value="Xóa"></a>
                             </td>
                        </tr>';
                        }
                        ?>
                        
                      
                    </table>
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">                    
                        <input type="button" value="Bỏ chọn tất cả">                    
                        <input type="button" value="Xóa các mục đã chọn">   
                        <a href="index.php?act=thoat"><input type="button" value="Thoát"></a>                                                     
                    </div>
            </div>
        </div>
        </div> 
</body>
</html>