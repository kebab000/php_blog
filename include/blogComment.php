
<div class="cate">
    <h4>최신 댓글</h4>
    <ul>
        <?php
            $blogNew = "SELECT * FROM blogComment WHERE commentDelete = 0 ORDER by commentID DESC LIMIT 4";
            $blogNewResult = $connect -> query($blogNew);

            foreach($blogNewResult as $blog){ ?>
                <li>
                    <a href="blogView.php?blogID=<?=$blog['blogID']?>">
                        <span><?=$blog['commentMsg']?></span>
                        <br>
                        <span>-<?=$blog['commentName']?>-</span>
                    </a>
                </li>
           <?php }
        ?>
    </ul>
</div>