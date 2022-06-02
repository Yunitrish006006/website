<?php if (session_status() == PHP_SESSION_NONE) session_start(); 
    include "db.php";
    mysqli_query($link, 'SET CHARACTER SET utf8');
    mysqli_query($link, "SET collation_connection = 'utf8_general_ci'");
    $sql= $_SESSION['sql'];
    $result = mysqli_query($link, $sql);
    
    while ($row = mysqli_fetch_assoc($result)) {                        
        $tag=  $row['tag'];           //存入第i行tag
        $name=  $row['name'];          //存入第i行name
        $date=  $row['date'];          //存入第i行date
        $path=$row['picture_path']; //存入第i行picture_path
        $subject=$row['subject'];          //存入第i行subject
        $comment=$row['comment'];            //存入第i行comment
        $times=$row['times'];
        }
        mysqli_free_result($result); // 釋放佔用的記憶體   
    
?>
<form name="<?php echo $i ?>" id="<?php echo $i ?>" action="comment_detail.php" method="POST">
    <article class="row blog_item">
        <div class="col-md-3">
            <div class="blog_info text-right">
                <div class="post_tag">
                    <?php echo $tag;?>
                </div>
                <ul class="blog_meta list_style">
                    <li><a>
                            <?php echo  $name;?>
                            <i class="lnr lnr-user"></i>
                        </a></li>
                    <li><a>
                            <?php echo  $date;?>
                            <i class="lnr lnr-calendar-full"></i>
                        </a></li>
                    <li><a>
                            <?php echo  $_SESSION['detail_num']."則留言";?>
                            <i class="lnr lnr-bubble"></i>
                        </a></li>
                    <li><a >
                            <?php echo  $times."次瀏覽";?> 
                        <i class="lnr lnr-eye"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="blog_post">
                <img src="<?php echo  $path;?> ">
                <div class="blog_details">
                    <a >
                        <h2>
                            <?php echo  $subject; ?>
                        </h2>
                    </a>
                    <p>
                        <?php  echo  $comment;?>
                    </p>
                    <!--編號每則留言按鈕的名字-->
                    <button type="submit" name="<?php echo $i?>" class="view_btn button_hover">查看更多</button>
                </div>
            </div>
        </div>
    </article>
</form>
