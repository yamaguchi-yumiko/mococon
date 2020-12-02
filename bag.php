<?php require_once('header.php'); ?>
<?php require_once('nav.php'); ?>
<main class="Bag-content category">
    <section class="item-category">
        <h1>Bag</h1>
        <div class="items">
            <div class="item-category">
                <div class="item-category-items">
                    <article class="item-box ">
                        <figure><img src="common/img/IMG_74452.JPG" alt="バックNo.1"></figure>
                        <h2>バックNo.1</h2>
                        <p>¥4,900</p>
                        <p>準備中</p>
                    </article>
                    <article class="item-box ">
                        <figure><img src="common/img/IMG_74442.JPG" alt="バックNo.2"></figure>
                        <h2>バックNo.2</h2>
                        <p>¥4,900</p>
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
    $(window).on('load', function() {
        $('#loader-bg').hide();
    });
    $('#accordion').on('click', function() {
        $('#accordion-content').slideToggle();
    });
</script>
</body>
</html>