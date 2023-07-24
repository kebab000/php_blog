<?php 
    include "../connect/connect.php" ;
    include "../connect/session.php" ;
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP 블로그 만들기</title>

        <?php include "../include/head.php" ?>
    </head>
    <body class="gray">

        <?php include "../include/skip.php" ?>
        <!-- //skip -->

        <?php include "../include/header.php" ?>
        <!-- //header -->

        <main id="main" class="container">
        <div class="intro__inner bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/intro01.png, ../assets/img/intro01@2x.png 2x, ../assets/img/intro01@3x.png 3x" />
                <img src="../assets/img/intro01.png" alt="소개이미지">
            </picture> 
            <p class="intro__text">
                어떤 일이라도 노력하고 즐기면 그 결과는 빛을 바란다고 생각합니다.
                신입의 열정과 도전정신을 깊숙히 새기며 배움에 있어 겸손함을 
                유지하며 세부적인 곳까지 파고드는 개발자가 되겠습니다.
            </p>
        </div>
        <?php
            $sql = "SELECT * FROM blog WHERE blogDelete = 0 AND  blogCategory = 'Javascript' ORDER BY blogID DESC LIMIT 3";
            $result = $connect -> query($sql);
        ?>
        <div class="main__blog__inner">
            <div class="blog__wrap bmStyle">
                <h2><a href="http://kebab00.dothome.co.kr/php/blog/blogCate.php?category=javascript">Javascript Topic</a></h2>
                <div class="main__cards__inner col3 line1">
                    <?php foreach($result as $blog){ ?>
                        <div class="card">
                            <figure class="card__img">
                                <a href="../blog/blogView.php?blogID=<?=$blog['blogID']?>"><img src="../assets/blog/<?=$blog['blogImgFile']?>" alt="<?=$blog['blogTitle']?>"></a>
                            </figure>
                            <div class="card__title">
                                <h3><?=$blog['blogTitle']?></h3>
                                <p><?=$blog['blogContents']?></p>
                            </div>
                            <div class="card__info">
                                <span class="author"><?=$blog['blogAuthor']?></span>
                                <span class="date"><?=date('Y-m-d', $blog['blogRegTime'])?></span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php
                $sql = "SELECT * FROM blog WHERE blogDelete = 0 AND  blogCategory = 'Jquery' ORDER BY blogID DESC LIMIT 2";
                $result1 = $connect -> query($sql);
            ?>
            <div class="blog__wrap bmStyle">
                <h2><a href="http://kebab00.dothome.co.kr/php/blog/blogCate.php?category=jquery">Jquery Topic</a></h2>
                <div class="cards__inner col2">
                    <?php foreach($result1 as $blog1){ ?>
                        <div class="card">
                            <figure class="card__img">
                            <a href="../blog/blogView.php?blogID=<?=$blog1['blogID']?>"><img src="../assets/blog/<?=$blog1['blogImgFile']?>" alt="<?=$blog1['blogTitle']?>"></a>
                            </figure>
                            <div class="card__title">
                                <h3><?=$blog1['blogTitle']?></h3>
                                <p><?=$blog1['blogContents']?></p>
                            </div>
                            <div class="card__info">
                                <span class="author"><?=$blog1['blogAuthor']?></span>
                                <span class="date"><?=date('Y-m-d', $blog1['blogRegTime'])?></span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- blog__type2 -->
            <?php
                $sql = "SELECT * FROM blog WHERE blogDelete = 0 AND  blogCategory = 'React' ORDER BY blogID DESC LIMIT 4";
                $result2 = $connect -> query($sql);
            ?>
            <div class="blog__wrap">
                <h2><a href="http://kebab00.dothome.co.kr/php/blog/blogCate.php?category=react">React Topic</a></h2>
                <div class="cards__inner col4 line3">
                    <?php foreach($result2 as $blog2){ ?>
                        <div class="card">
                            <figure class="card__img">
                            <a href="../blog/blogView.php?blogID=<?=$blog2['blogID']?>"><img src="../assets/blog/<?=$blog2['blogImgFile']?>" alt="<?=$blog2['blogTitle']?>"></a>
                            </figure>
                            <div class="card__title">
                                <h3><?=$blog2['blogTitle']?></h3>
                                <p><?=$blog2['blogContents']?></p>
                            </div>
                            <div class="card__info">
                                <span class="author"><?=$blog2['blogAuthor']?></span>
                                <span class="date"><?=date('Y-m-d', $blog2['blogRegTime'])?></span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- blog__type3 -->    
        </div>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
    </body>
</html>