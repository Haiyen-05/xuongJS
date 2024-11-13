<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH BÌNH LUẬN</h1>
            </div>
            <div class="row frmcontent">
                    <div class="row mb10 frmdanhsachloai">                    
                    <table>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>NỘI DUNG</th>
                            <th>IDUSER</th>
                            <th>IDPRO</th>
                            <th>NGÀY BÌNH LUẬN</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($listbinhluan as $binhluan) {
                            extract($binhluan);
                            $suabl="index.php?act=suabl&id=".$id;
                            $xoabl="index.php?act=xoabl&id=".$id;
                            echo '<tr>
                            <td><input type="checkbox" name="" ></td>
                            <td>'.$id.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$iduser.'</td>
                            <td>'.$idpro.'</td>
                            <td>'.$ngaybinhluan.'</td>
                            <td>
                             <a href="'.$xoabl.'"><input type="button" value="Xóa"></a>
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