    <footer>
        <div>
        <div>
            <ul class="pagemap">
                <li><a href="<?php echo home_uri(); ?>/home">ホーム</a></li>
                <li><a href="<?php echo home_uri(); ?>/home/#features">特徴</a></li>
                <li><a href="<?php echo home_uri(); ?>/home/#use">利用方法</a></li>
                <li><a href="<?php echo home_uri(); ?>/home/#settlement">決済方法</a></li>
            </ul>
            <ul class="pagemap">
                <li><a href="<?php echo home_uri(); ?>/category/qa">Q&A</a></li>
                <li><a href="<?php echo home_uri(); ?>/category/review">レビュー</a></li>
                <li><a href="<?php echo home_uri(); ?>/category/precautions">注意事項</a></li>
            </ul>
        </div>

        <ul class="applogo">
            <li><a href="<?php home_uri(); ?>/catecory/sns"><img src="<?php echo get_template_directory_uri(); ?> /images/LINE.png"></a></li>
            <li><a href="<?php home_uri(); ?>/catecory/sns"><img src="<?php echo get_template_directory_uri(); ?> /images/Instagram.png"></a></li>
            <li><a href="<?php home_uri(); ?>/catecory/sns"><img src="<?php echo get_template_directory_uri(); ?> /images/X.png"></a></li>
        </ul>
        </div>
    </footer>

    </div>
    <!-- ここまでレスポンシブ -->
    </main>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <?php wp_footer(); ?>
</body>
</html>