</html><div class="row mb">
            <div class="boxtrai mr ">
                <div class="row">
                    <div class="banner">
                  
                <!-- slide show -->
                <div>
                    <img src="" alt="">
                </div>
                <style>
                    script {
                        width: 50%;
                    }
                </style>
                <script>
                    var imgs = [
                        "view/img/quangcao6.jpg",
                        "view/img/quangcao5.jpg",
                        "view/img/quangcao4.jpg",
                    ];
                    var len = imgs.length;
                    var img = document.getElementsByTagName('img')[0];
                    img.setAttribute("src", imgs[0]);

                    var index = 0;
                    var auto = document.getElementsByClassName('auto')[0];
                    auto = function() {
                        img.setAttribute('src', imgs[index]);
                        index++;
                        if (index == len) index = 0;
                    }
                    setInterval(auto, 1200);
                </script>
                      
             </div>
            </div>
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
                    // <div class="row btnaddtocart">
                    //     <form action="index.php?act=addtocart" method="post">
                    //         <input type="hidden" name="id" value="'.$id.'">
                    //         <input type="hidden" name="name" value="'.$name.'">
                    //         <input type="hidden" name="img" value="'.$img.'">
                    //         <input type="hidden" name="price" value="'.$price.'">
                    //         <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                    //     </form>
                    // </div>
                    ?>
                    <!-- <div class="boxsp mr">
                        <div class="row img">
                            <img src="view/img/hinh1.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone 14promax</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="view/img/hinh2.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Laptop HP</a>
                    </div>
                    <div class="boxsp ">
                        <div class="row img">
                            <img src="view/img/hinh5.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Redmi Note 11 pro 5G </a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="view/img/hinh4.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Laptop apple</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img">
                            <img src="view/img/hinh6.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Iphone Xsmax</a>
                    </div>
                    <div class="boxsp mr ">
                        <div class="row img">
                            <img src="view/img/hinh3.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Laptop Gamming</a>
                    </div> -->

                </div>
            </div>
            <div class="boxphai">
                <?php 
                include "boxright.php";
                ?>
            </div>
        </div>