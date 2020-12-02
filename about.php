<?php require_once('header.php'); ?>
<?php require_once('nav.php'); ?>
<main class="about-content about">
    <div class="about-section">
        <h1>About</h1>
        <article class="about-concept">
            <h2><span></span>Wool,Natural<br>Cool&Cute</h2>
            <div class="about-top-img"></div>
            <p>かわいいだけじゃない
                シックな羊毛フェルト雑貨をコンセプトに。<br></p>
            <p>シックな空間ではワンポイントで温かさを飾れるように、男性でも身に着けられるユニセックスな羊毛雑貨を制作。</p>
            <p>羊毛をはじめなるべく自然の素材にこだわり、草木染を施した羊毛も取り入れております。</p>
        </article>
        <article class="about-profile-img fadein">
            <h2><span></span>profile</h2>
            <div>
                <img src="common/img/IMG_5272.JPG" alt="プロフィール画像">
                <div class="profile-content">
                    <p>mococon(モココン) = 安齋　繭（Mayu ANZAI)
                        さいたま市出身、さそり座のABがた。</p>
                    <p>ずっと心の中にあったオリジナルキャラクター[moco]。何か形にしたいと模索中、羊毛フェルトと出会いその魅力にひかれ、作家として活動しはじめる</p>
                    <p>2012年、渡仏。アクセサリー製作アシスタントとして働きながら、パリのアートシーンに触れ、制作活動する。市内のギャラリーへ展示販売を行うなど1年間滞在。</p>
                    <p>2015年11月クアラルンプールFINDERSにてぺインターNABEKAORUとともにグループ展を行う。</p>
                    <p>翌年春に同氏とアートユニット[Cokun,]を結成、2017夏に「Cokun,Artist Village(アーティストインレジデンススペース)」を佐賀県唐津市にて企画・開催、活動の幅を広げた。</p>
                    <p>現在は、都内やさいたまを中心に作品制作、販売などイベントやワークショップ、羊毛フェルトの出張講師など活動中。</p>
                    <div class="blog"><a href="http://mococon-blog.blogspot.com/" target="_blank">以前のブログはコチラから</a></div> 　　　
                </div>
            </div>
        </article>
    </div>
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