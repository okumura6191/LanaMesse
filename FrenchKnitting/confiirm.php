<?php
// 変数初期化
$page_flag = 0;
if ( !empty($_POST['btn_confirm']) ){
    // btn_confirmが押された時に確認画面へ
    $page_flag = 1;
} elseif ( !empty($_POST['btn_submit']) ){
    // btn_submitが押された時に完了画面へ
    $page_flag = 2;
} elseif ( !empty($_POST['btn_back']) ){
    // btn_backが押された時にトップページへ
    header("Location:http://lana-messe.chips.jp/lanamesse/index.html");}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>【Lana Messe】</title>
        <link rel="icon" type="image/x-icon" href="images/jiggry_puff.png">
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300 rel="stylesheet">
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <!-- ▼ヘッダー -->
        <header class="header">
            <div class="container">
                <div class="content">
                    <h1 class="site-title">Lana Messe</h1>
                    
                </div>
            </div>
        </header>
        <!-- ▲ヘッダー -->

        <!-- ▼ページ遷移条件分岐 -->
        <?php if( $page_flag === 1 ): ?>

        <!-- ▼確認画面 -->
        <section class="confirm">
            <div class="container">
                <div class="content">
                    <h2 class="heading">お問い合わせ内容確認</h2>
                    <p class="text">お問い合わせ内容はこちらで宜しいでしょうか？<br>
                    よろしければ「送信する」ボタンを押して下さい。</p>
                    <div class="confirm-check">
                        <dl>
                            <dt>お名前</dt>
                            <dd><?php print $_POST["name"]; ?></dd>
                        </dl>
                        <dl>
                            <dt>メールアドレス</dt>
                            <dd><?php print $_POST["email"]; ?></dd>
                        </dl>
                        <dl>
                            <dt>お問い合わせ内容</dt>
                            <dd><?php print $_POST["content"]; ?></dd>
                        </dl>
                    </div>
                    <form action="confirm.php" method="post" class="contact-form">
                        <input type="submit" name="btn_submit" value="送信する">
                        <input type="submit" name="btn_back" value="戻る">
                    </form>
                </div>
            </div>
        </section>
        <!-- ▲確認画面 -->

        <?php elseif( $page_flag === 2 ): ?>

        <section class="confirm">
            <div class="container">
                <div class="content">
                    <h2 class="heading">完了</h2>
                    <p class="text">送信が完了しました。<br>
                    お問い合わせいただきありがとうございました。</p>
                    <div>
                        <form action="confirm.php" method="post" class="contact-form">
                                <input type="submit" name="btn_back" value="戻る">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <!-- ▲ページ遷移条件分岐 -->

        <!-- ▼フッター -->
        <footer class="footer">
            <div class="container">
                <div class="content">
                    <p class="copyright">© 2021 Lana Messe</p>
                </div>
            </div>
        </footer>
        <!-- ▲フッター -->
    </body>
</html>
