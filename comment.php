<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>蜂巢飯店</title>
    <?php include("import.php") ?>
</head>

<body>
    <!--================Header Area =================-->
    <?php include("nav.php") ?>
    <!--================Banner Area =================-->
    <section class="banner_area blog_banner d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h4>我們在此度過了 <br />美好的蜜月旅行</h4>
                <p>謝謝蜂巢飯店為我們提供美好的蜜月套房，我相信這將成為我們一生難忘的回憶。</p>
                <a href="#" class="btn white_btn button_hover">詳細資料</a>
            </div>
        </div>
    </section>

    <!--================  貼文種類區 =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="images/blog/cat-post/cat-post-3.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="#">
                                    <h5>飯店活動</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>關於飯店推出活動的評論</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="images/blog/cat-post/cat-post-2.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="comment_detail.php">
                                    <h5>服務人員與套房</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>關於飯店服務人員與套房的評論</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="images/blog/cat-post/cat-post-1.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="#">
                                    <h5>食物</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>關於飯店食物的評論</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--================ 貼文區 =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">食物,</a>
                                        <a href="#">飯店活動,</a>
                                        <a href="#">服務人員,</a>
                                        <a href="#">套房</a>
                                    </div>
                                    <ul class="blog_meta list_style">
                                        <li><a href="#">林小姐<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M 觀看者<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">5 則留言<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="images/blog/main-blog/m-blog-1.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="comment_detail.php">
                                            <h2>服務人員請不要氣餒</h2>
                                        </a>
                                        <p>好幾年公司尾牙都在此舉辦，今年當然也不例外，疫情當下在台灣還能大啖美食很幸福。今年有個小插曲，
                                            服務員在送餐時（玉露海石斑）不小心湯汁濺灑在我衣服整隻袖子，感覺服務員很生澀應該是工讀生，
                                            用餐過程到結束來了好幾位主管來跟我致歉，及詢問我需要什麼善後服務之類，還說要拿件衣服給我換，
                                            或者把衣服送過來清洗都沒關係，我回沒關係不介意別責怪那位服務員，希望那位工讀生別往心裡去，
                                            服務業辛苦了。</p>
                                        <a href="comment_detail.php" class="view_btn button_hover">查看更多</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">食物,</a>
                                        <a href="#">飯店活動,</a>
                                        <a href="#">服務人員,</a>
                                        <a href="#">套房</a>
                                    </div>
                                    <ul class="blog_meta list_style">
                                        <li><a href="#">楊先生<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">25 Jun, 2019<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.0M 觀看者<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">3 則留言<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="images/blog/main-blog/m-blog-2.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="#">
                                            <h2>關於房間設計與服務人員看法</h2>
                                        </a>
                                        <p>228連假期間入住12樓全新改裝的雅緻客房，房內裝潢走典雅木質系，空間寬敞
                                            ，衛浴設施新穎，有免治馬桶，盥洗泡澡水量強勁且大，但室內燈光偏昏暗，
                                            夜晚想在房內看書，只有書桌前上方的小燈可用，角落若能增加些立燈，應該會更好些
                                            ，當晚還遇到11點半樓上房客一直在搬家具的聲音，幸好反應給櫃檯人員後就改善了。
                                            隔日的早餐是採半自助式的，除了可無限點用限定的6種套餐外，再加上自助吧的沙拉
                                            、麵包、水果及飲品，其實也能吃飽吃巧，同時比較不浪費食材，但就星級大飯店價位來說，
                                            提供這樣的早餐品項，心情難免會覺得落差太大，當天請領檯人員另外幫我做外帶，
                                            服務人員也很迅速完成準備，讓沒能來得及起床用餐的家人，吃得很很飽，下次有機會還是
                                            會再次選擇入住蜂巢。</p>
                                        <a href="#" class="view_btn button_hover">查看更多</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">食物,</a>
                                        <a href="#">飯店活動,</a>
                                        <a href="#">服務人員,</a>
                                        <a href="#">套房</a>
                                    </div>
                                    <ul class="blog_meta list_style">
                                        <li><a href="#">劉小姐<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">1 May, 2019<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">3.2M 觀看者<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">19 則留言<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="images/blog/main-blog/m-blog-4.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="#">
                                            <h2>再也不來這住了</h2>
                                        </a>
                                        <p>這次住8樓，遇到一些問題，住的不是很開心
                                            <br>1.晚上10點多，聽到別間傳來的洗澡水聲和管線的水聲，超級超級大聲的（已蓋過電視聲音），也持續一小時
                                            <br>2.超大水聲之後，廁所開始出現很濃的霉味
                                            <br>3.隔音很差，早上6點多開始，有說話聲和電視的聲音，持續2小時
                                            <br> 4.停車場已經有登錄車號，卻還是不能自由進出，需要按對講機和保全通話
                                            <br>因為住宿經驗很差，回來查看評價，才發現這都是很多人會遇到的相同問題，然後官方都回答，10-12樓有新客房，那為何一開始就不拿出來，等留下差評了才這樣回覆，感覺很沒誠意
                                        </p>
                                        <a href="#" class="view_btn button_hover">查看更多</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">食物,</a>
                                        <a href="#">飯店活動,</a>
                                        <a href="#">服務人員,</a>
                                        <a href="#">套房</a>
                                    </div>
                                    <ul class="blog_meta list_style">
                                        <li><a href="#">方小姐<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">19 Feb, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.8M 觀看者<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">3 則留言<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="images/blog/main-blog/m-blog-3.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="#">
                                            <h2>這家飯店的婚禮佈置</h2>
                                        </a>
                                        <p>蜂巢花園宴會廳是一間精緻西式風格又偏有點夢幻少女心的布景，沿途可見鮮花、
                                            氣球、愛心、熊熊，雖然有些無法拍照(藝術品)有些可惜，不過也能讓夢幻感持續湧現。
                                            基本上餐廳、會議廳空間都不是非常的寬敞，相對狹小，很容易造成壅擠的情況
                                            ，假設是大型企業尾牙可能需要多考慮這點的不便性。
                                            餐點魚類料理非常不滿意，很腥，感覺不是很新鮮，其餘海鮮還可以接受。
                                            喜歡抹茶甜點蛋糕，濃郁且不會太甜，令人開心。整體上服務態度良好，
                                            不會有多餘的親切以及不舒服的體驗，交通就在台中高鐵附近，位置方便。</p>
                                        <a href="#" class="view_btn button_hover">查看更多</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">食物,</a>
                                        <a href="#">飯店活動,</a>
                                        <a href="#">服務人員,</a>
                                        <a href="#">套房</a>
                                    </div>
                                    <ul class="blog_meta list_style">
                                        <li><a href="#">葉先生<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Jul, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.4M 觀看者<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">3 則留言<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="images/blog/main-blog/m-blog-5.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="#">
                                            <h2>房間還不錯但餐點就....</h2>
                                        </a>
                                        <p>
                                            <br>1.約6月左右透過Booking.com 訂房，
                                            但因為訂房網站資訊不完整所以致電到飯店詢問關於房型問題，
                                            得知訂房網的房型不符合我們的需求（兩大一小，但床是一張一般雙人床大小而已）
                                            ，於是直接電話告知客服我需要兩張雙人床的房型請直接幫我訂，結果前兩天現場check
                                            in才知道房型有分一般跟行政（明顯等級差別之分），因為同行朋友訂的是行政的房型才知
                                            道，如果當初客服人員能在一開始訂房時細心點多詢問介紹一下要哪種的家庭房型或許會更好。
                                            <br> 2.第一晚入住飯店房間整體算不錯，但是晚上洗澡放了浴缸水居然是濁黃色，先生還以爲是
                                            燈光反射造成的，隔天等電梯時聽到其他房客生氣的在評論浴缸水質的問題才知道原來這是不正常的
                                            ，對於一間五星級飯店來說出了這樣狀況滿糟糕的
                                            <br> 3.第一晚到台中已經頗晚所以直接在飯店的自助buffet用餐，不吃還好一吃整個大扣分，
                                            整體環境只能說超可怕，我以為我到菜市場吃飯一樣，桌跟桌之間距離超級近（尤其現在又是疫情緊張期間，
                                            整個用餐用的膽戰心驚），原本以為晚餐人這麼多應該是因為有販售餐卷優惠的緣故，所以才會如此雜亂，
                                            整體素質完全拉低，想說隔天早餐應該都只是房客不會這麼亂糟糟，沒想到還是一樣，只能說這是我吃過最吵
                                            雜、人口密度最高的飯店早餐，完全沒有五星級飯店的味道。
                                        </p>
                                        <a href="#" class="view_btn button_hover">查看更多</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div class="comment-form">
                                <h4>留下您的貼文吧！</h4>
                                <form>
                                    <div class="form-group form-inline">
                                        <div class="form-group col-lg-6 col-md-6 name">
                                            <input type="text" class="form-control" id="name" placeholder="填寫您的姓氏"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Enter Name'">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 email">
                                            <input type="email" class="form-control" id="email" placeholder="填寫您的郵件地址"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Enter email address'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="填寫您的主旨"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control mb-10" rows="5" name="message"
                                            placeholder="填寫您的內容" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Messege'" required=""></textarea>
                                    </div>
                                    <a href="#" class="primary-btn button_hover">傳送</a>
                                </form>
                            </div>
                        </article>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item active"><a href="#" class="page-link">01</a></li>
                                <li class="page-item"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!---     右側頁面           -->
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="搜尋貼文">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i
                                            class="lnr lnr-magnifier"></i></button>
                                </span>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="images/blog/author.png" alt="">
                            <h4>林昀佑</h4>
                            <p>曾住過本飯店名人</p>
                            <div class="social_icon">
                                <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.google.com"><i class="fa fa-google"></i></a>
                                <a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a>
                            </div>
                            <p>疫情期間選擇婚期跟宴客場地真的需要時間跟精神。
                                感謝台中蜂巢飯店訂席中心的佩宜從諮詢到當天婚宴都給予我們新人適時的回覆，
                                也感謝當天所有工作人員的協助，讓婚禮流程都順利完成。值得一提的是婚宴菜色也是我們一直稱讚的部分，

                                感謝主廚針對我們的需求進行菜色的細節調整，好幾位食客級親友都表示這手路很可以啊給推。</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">熱門貼文</h3>
                            <div class="media post_item">
                                <img src="images/blog/post1.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.php">
                                        <h3>服務人員請不要氣餒</h3>
                                    </a>
                                    <p>5年前</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="images/blog/post2.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.php">
                                        <h3>關於房間設計與服務人員看法</h3>
                                    </a>
                                    <p>2年前</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="images/blog/post3.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.php">
                                        <h3>再也不來這住了</h3>
                                    </a>
                                    <p>2年前</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="images/blog/post4.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.php">
                                        <h3>這家飯店的婚禮佈置</h3>
                                    </a>
                                    <p>5年前</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="images/logo.png" width="300" height="250"></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">貼文種類</h4>
                            <ul class="list_style cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>食物</p>
                                        <p>37</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>套房</p>
                                        <p>24</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>服務人員</p>
                                        <p>59</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>飯店活動</p>
                                        <p>29</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>飯店設施</p>
                                        <p>15</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>飯店外觀</p>
                                        <p>09</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>飯店cp值</p>
                                        <p>44</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">即時簡訊</h4>
                            <p>
                                傳送您的電子郵件，可將本飯店評論區的訊息即時告知您。
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup"
                                        placeholder="Enter email" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'enter email'">
                                </div>
                                <a href="#" class="bbtns">send</a>
                            </div>
                            <p class="text-bottom">您可以隨時解除通知的服務</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">標籤</h4>
                            <ul class="list_style">
                                <li><a href="#">食物</a></li>
                                <li><a href="#">服務人員</a></li>
                                <li><a href="#">套房</a></li>
                                <li><a href="#">飯店外觀</a></li>
                                <li><a href="#">飯店活動</a></li>
                                <li><a href="#">飯店cp值</a></li>
                                <li><a href="#">飯店清潔</a></li>
                                <li><a href="#">其他</a></li>

                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include("footer.php") ?>
</body>

</html>