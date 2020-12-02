<?php require_once('header.php'); ?>
<?php require_once('nav.php'); ?>
<main class="Other-content">
    <section class="item-category category">
        <h1>Other</h1>
        <div class="items">
            <div class="item-category">
            <div class="item-content-moer">
                    <article class="item-box">
                        <figure><img src="common/img/IMG_8127.JPG" alt=""></figure>
                        <h3></h3>
                        <p></p>
                        <p>準備中</p>
                    </article>
                    <article class="item-box">
                        <figure><img src="common/img/IMG_8122.JPG" alt=""></figure>
                        <h3></h3>
                        <p></p>
                        <p>準備中</p>
                    </article>
                    <article class="item-box">
                        <figure><img src="common/img/IMG_8114.JPG" alt=""></figure>
                        <h3></h3>
                        <p></p>
                        <p>準備中</p>
                    </article>
                    <article class="item-box">
                        <figure><a href="https://www.instagram.com/p/B6A9efajAbn/" target="_blank"><img src="common/img/IMG_8126.JPG" alt=""></a></figure>
                        <h3>アシメトリーピアス<br>No.10</h3>
                        <p>¥2,500</p>
                    </article>
                </div>
                <div class="item-category-items">
                    <article class="item-box">
                        <figure><a href="https://www.instagram.com/p/B6A9efajAbn/" target="_blank"><img src="common/img/IMG_8132.JPG" alt=""></a></figure>
                        <h3>アシメトリーピアス<br>No.9</h3>
                        <p>¥2,500</p>
                    </article>
                    <article class="item-box">
                        <figure><a href="https://www.instagram.com/p/B6A9efajAbn/" target="_blank"><img src="common/img/IMG_8131.JPG" alt=""></a></figure>
                        <h3>アシメトリーピアス<br>No.8</h3>
                        <p>¥2,500</p>
                    </article>
                    <article class="item-box">
                        <figure><a href="https://www.instagram.com/p/B6A9efajAbn/" target="_blank"><img src="common/img/IMG_8124.JPG" alt=""></a></figure>
                        <h3>アシメトリーピアス<br>No.7</h3>
                        <p>¥2,500</p>
                    </article>
                    <article class="item-box">
                        <figure><a href="https://www.instagram.com/p/B6A9efajAbn/" target="_blank"><img src="common/img/IMG_8125.JPG" alt=""></a></figure>
                        <h3>アシメトリーピアス<br>No.6</h3>
                        <p>¥2,500</p>
                    </article>
                </div>
                <div class="item-category-items">
                    <article class="item-box">
                        <figure><a href="https://www.instagram.com/p/B6A9efajAbn/" target="_blank"><img src="common/img/IMG_74362.JPG" alt="アシメトリーピアスNo.1"></a></figure>
                        <h2>アシメトリーピアス<br>No.5</h2>
                        <p>¥2,400</p>
                    </article>
                    <article class="item-box">
                        <figure><a href="https://www.instagram.com/p/B6A9efajAbn/" target="_blank"><img src="common/img/IMG_74352.JPG" alt="アシメトリーピアスNo.2"></a></figure>
                        <h2>アシメトリーピアス<br>No.4</h2>
                        <p>¥2,400</p>
                    </article>
                    <article class="item-box">
                        <figure><a href="https://www.instagram.com/p/B6A9efajAbn/" target="_blank"><img src="common/img/IMG_74392.JPG" alt="アシメトリーピアスNo.3"></a></figure>
                        <h2>アシメトリーピアス<br>No.3</h2>
                        <p>¥2,400</p>
                    </article>
                    <article class="item-box">
                        <figure><a href="https://www.instagram.com/p/B6A9efajAbn/" target="_blank"><img src="common/img/IMG_74402.JPG" alt="アシメトリーピアスNo.4"></a></figure>
                        <h2>アシメトリーピアス<br>No.2</h2>
                        <p>¥2,400</p>
                    </article>
                </div>
                <div class="item-category-items">
                    <article class="item-box">
                        <figure><a href="https://www.instagram.com/p/B6A9efajAbn/" target="_blank"><img src="common/img/IMG_74412.JPG" alt="アシメトリーピアスNo.5"></a></figure>
                        <h2>アシメトリーピアス<br>No.1</h2>
                        <p>¥2,400</p>
                    </article>
                    <article class="item-box">
                        <figure><img src="common/img/IMG_7446.JPG" alt="フラミンゴオブジェBig"></figure>
                        <h2>フラミンゴオブジェBig</h2>
                        <p>¥27,000</p>
                        <p>準備中</p>
                    </article>
                    <article class="item-box">
                        <figure><img src="common/img/IMG_7448.JPG" alt="フラミンゴオブジェ小さい"></figure>
                        <h2>フラミンゴオブジェ</h2>
                        <p>¥2,500</p>
                        <p>準備中</p>
                    </article>
                    <article class="item-box">
                        <figure><img src="common/img/IMG_7434.JPG" alt="ペンカバー"></figure>
                        <h2>フラミンゴペンカバー</h2>
                        <p>¥2,500</p>
                        <p>準備中</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require_once('footer.php'); ?>
<script src="common/js/jquery.js"></script>
<script src="common/slick/slick/slick.min.js"></script>
<script>
    $(window).on('load', function() {
        $('#loader-bg').hide();
    });
    $('#accordion').on('click', function() {
        $('#accordion-content').slideToggle();
    });
    window.onload = function() {
        scroll_effect();
        $(window).scroll(function() {
            scroll_effect();
        });

        function scroll_effect() {
            $('.fadein').each(function() {
                var elemPos = $(this).offset().top;
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll > elemPos - windowHeight) {
                    $(this).addClass('scrollin');
                }
            });
        }
    };
</script>
</body>
</html>