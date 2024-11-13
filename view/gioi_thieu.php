<div class="row mb ">
<div class="boxtitle">GIỚI THIỆU</div>
 <div class="row boxcontent">
 <div class="row">
                    <?php
                    $i=0;
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $hinh=$img_path.$img;
                        if(($i==2) || ($i==5)||($i==8)){
                            $mr="";
                        }else{
                            $mr="mr";
                        }
                        echo '<div class="boxsp '.$mr.'">
                        <div class="row img">
                            <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                        </div>
                        <p>'.$price.'</p>
                        <a href="'.$linksp.'">'.$name.'</a>
                        
                        </div>';
                        $i+=1;
                    }
                    ?>
 </div>
 </div>