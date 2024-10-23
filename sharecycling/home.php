<?php get_header(); ?>

    <section id="firstview">
        <video src="<?php echo get_template_directory_uri(); ?>/images/movie.mp4" loop autoplay muted></video>
        <p class="catchphrase">Discover new paths,<br> discover yourself.</p>
    </section>

    <section id="news">
        <p class="title">NEWS</p>
        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'news',
            'posts_per_page' => 2,
        );
        $posts = get_posts($args);
        ?>

        <?php foreach($posts as $post): ?>
        <?php setup_postdata($post); ?>

        <table>
            <tr><a herf="<?php echo get_permalink(); ?>">
                <td class="news-title">
                    <?php  
                    $title = wp_trim_words( get_the_title() ,  14, '...');
                    echo $title;
                    ?>
                    
                </td>
                <td class="news-date">
                        <?php echo get_the_date(); ?>
                </td>
            </a></tr>
        </table>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
    </section>

    <section id="concept">
        <p>
            忙しい都市生活をもっと自由に。<br>新しい都市型シェアサイクルで、好きな時に、好きな場所へ。<br>
            交通渋滞も気にせず、スマートに移動。<br>
            手軽に借りて、スムーズに返却。<br>あなたの街をもっと身近に感じられる、新しい移動手段です。
        </p>
    </section>

    <section id="features">
    <p class="title">GOOD CYCLINGの特徴</p>

    <div class="1line">
        <div class="price">
            <p>低価格で利用可能！<br>１分ごとの料金！</p>
           <img src="<?php echo get_template_directory_uri(); ?>/images/money.png" alt="コインの絵">
        </div>
        
        <div class="cyclestation">
            <p>サイクルステーションは主要駅の徒歩１分圏内！</p> 
            <img src="<?php echo get_template_directory_uri(); ?>/images/cyclinegstation.png" alt="サイクルステーションの絵">          
        </div>
        </div>

    <div class="2line">
        <div class="regions">
            <p>利用可能エリア！<br>東京23区内 / 大阪市内</p>
            <img src="<?php echo get_template_directory_uri(); ?>/images/pin.png" alt="マップピン">
        </div>
   </div>

    </section>

    <section id="use">
    <p class="title">利用方法</p>

    <div class="flow">
	<div class="step">
		<div class="step-num"><p>1</p></div>
		<p class="procedure">アプリをダウンロードし、アカウント登録</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/cellphone.png" alt="スマホのアイコン">
    </div>
    <div class="allcenter">
		<a class="download" href=""><img class="appimg" src="<?php echo get_template_directory_uri(); ?>/images/appicon.png" alt="アプリダウンロードボタン"></a>
	</div>
	<div class="step">
		<div class="step-num"><p>2</p></div>
		<p class="procedure">近くのサイクルステーションを検索</p>
	</div>
	<div class="step">
		<div class="step-num"><p>3</p></div>
		<p class="procedure">QRコードをスキャンして自転車を解錠</p>
	</div>
	<!-- <div class="allcenter column">
		<img class="allcenter arrowimg" src="images/arrow.png" alt="下矢印">
		<img class="allcenter cyclingimg" src="" alt="自転車にのってお出かけしている繪">
		<img class="allcenter arrowimg" src="images/arrow.png" alt="下矢印">
	</div> -->
	<div class="step">
		<div class="step-num"><p>4</p></div>
		<p class="procedure">返却ステーションで自転車を返却</p>
	</div>
    </div>

    </section>

    <section id="settlement">
    <p class="title noline">決済方法</p>

    <div class="paymentmethod">
        <div class="electronic-money">
                <p>電子マネー</p>
            <div class="flex">
                <div>
                    <img class="imgfit2" src="<?php echo get_template_directory_uri(); ?>/images/applepay.png" alt="applepay">
                    <img class="imgfit2" src="<?php echo get_template_directory_uri(); ?>/images/quicpay.png" alt="quicpay">
                    <img class="imgfit2" src="<?php echo get_template_directory_uri(); ?>/images/id.png" alt="id">
                </div>
                <div class="train">
                    <img class="trainimg" src="<?php echo get_template_directory_uri(); ?>/images/train.png" alt="交通系">
                </div>
            </div>
        </div>

        <div class="credit">
            <p>クレジット</p>
            <div class="flex">
                <img class="imgfit" src="<?php echo get_template_directory_uri(); ?>/images/visa.png" alt="visa">
                <img class="imgfit" src="<?php echo get_template_directory_uri(); ?>/images/jcb.png" alt="jcb">
                <img class="imgfit" src="<?php echo get_template_directory_uri(); ?>/images/mastercard.png" alt="mastercard">
            </div>
        </div>
    </div>

    </section>

    <section id="qa">
        <p class="title">Q&A</p>

        <?php
        $args = array(
            'post' => 'post',
            'category_name' => 'qa',
            'posts_per_page' => 3,
        );
        $posts = get_posts($args);
        ?>

        <?php foreach($posts as $post): ?>
        <?php setup_postdata($post); ?>

        <details class="q-a">
             <summary><?php the_title(); ?></summary>
            <p>
                <?php 
                $content = wp_trim_words( get_the_content() ,  500, '...');
                echo $content; 
                ?>
            </p> 
        </details>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>

        <div class="more">
            <a class="page" href="<?php home_uri(); ?>/category/qa"><button>もっとみる</button></a>
        </div>        
    </section>

    <section id="review">
    <div class="back-white">
        <p class="title">ユーザーの声</p>

        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'review',
            'posts_per_page' => 3,
        );
        $posts = get_posts($args);
        ?>

        <?php foreach($posts as $posts): ?>
        <?php setup_postdata($post); ?>

        <div>
            <div class="reviewbox">
                <div class="user-information">
                    <img class="person" src="<?php echo get_template_directory_uri(); ?> /images/lady28age.png" alt="女性の写真">
                    <p>
                        <?php the_title(); ?> <br>
                        <?php echo post_custom('age'); ?><?php echo post_custom('sex'); ?><br>
                        <?php echo post_custom('work'); ?>
                    </p>
                </div>
                <div class="bubble">
                    <?php 
                    $content = wp_trim_words( get_the_content() ,  500, '...');
                    echo $content; 
                    ?>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>

        <div class="more">
            <a class="page" href="<?php home_uri(); ?>/category/review"><button>もっとみる</button></a>
        </div> 
    </div>
    </section>

<?php get_footer(); ?>

