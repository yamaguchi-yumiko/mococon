<?php require_once('header.php'); ?>
<?php require_once('nav.php'); ?>
<main class="Original-Mascot-content category">
    <section class="item-category">
        <h1>Original Mascot</h1>
        <div class="items">
            <div class="item-category">
                <div class="item-category-items">
                    <article class="item-box ">
                        <figure><a href="https://www.creema.jp/item/7455365/detail" target="_blank"><img src="common/img/2_n.jpg" alt="mocoのピンバッチ"></a></figure>
                        <h2>mocoのピンバッチ</h2>
                        <p>¥900</p>
                    </article>
                    <article class="item-box ">
                        <figure><a href="https://www.creema.jp/item/7455365/detail" target="_blank"><img src="common/img/1_n.jpg" alt="ピンバッチ"></a></figure>
                        <h2>gooのピンバッチ</h2>
                        <p>¥900</p>
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