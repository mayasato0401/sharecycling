<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Cycling</title>
    <meta name="description" content="シェアサイクリングについて">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <script src="<?php echo get_template_directory_uri(); ?>/script.js" type="text/javaScript" charset="utf-8"></script>

    <?php wp_head(); ?>
</head>
<body>
    <main>
    
    <!-- レスポンシブ -->
    <div class="sp">    
    <header>
        <ul>
            <li><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="GOOD CYCLINGのロゴ"></li>
            <li><img class="sp-nemu"  src="<?php echo get_template_directory_uri(); ?>/images/menu.png" alt="MENU"></li>
        </ul>

        <nav class="sp-nemu-open">
            <img class="sp-nemu-close" src="<?php echo get_template_directory_uri(); ?>/images/close.png" alt="クローズボタン">
        
            <div>
                <ul class="pagemap">
                    <li><a href="home.html">ホーム</a></li>
                    <li><a href="home.html#features">特徴</a></li>
                    <li><a href="home.html#use">利用方法</a></li>
                    <li><a href="home.html#settlement">決済方法</a></li>
                    <li><a href="qa.html">Q&A</a></li>
                    <li><a href="review.html">レビュー</a></li>
                    <li><a href="precautions.html">注意事項</a></li>
                </ul>
            </div>
        </nav>
    </header>