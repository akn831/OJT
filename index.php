<!-- header.phpを読み込む -->
<?php get_header(); ?>



<!-- main ここから -->
    <main>
        <h1>Latest</h1>
        <ul class="threepost">
            <li> 
                <img src="./assets/img/dog.jpg" alt="">
                <p>やほー</p>
                <a href="">続きを読む</a>
            </li>
            <li>
                <img src="./assets/img/dog.jpg" alt="">
                <p>やほー</p>
                <a href="">続きを読む</a>
            </li>
            <li> 
                <img src="./assets/img/dog.jpg" alt="">
                <p>やほー</p>
                <a href="">続きを読む</a>
            </li>
        </ul>
    </main>   

    <!-- contact.phpを読み込む -->
    <?php get_template_part('contact'); ?>
    
<!-- main ここまで -->

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
