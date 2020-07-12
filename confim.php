<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact｜MOMO's WeBsite</title>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="images/favicon.ico" rel="shortcut icon">
    </head>
    <body id="contact">
        <!-- header の始まり-->
        <header>
            <div class="logo">
                <a href="index.html">
                    <img src="images/logo-big.png" alt="MOMO's WeBsite">
                </a>
            </div>
            <nav>
                <ul class="global-nav">
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </header>
        <!-- headerおわり、中身はじまり-->
        <!-- divはブロック要素 -->
        <div id="wrap">
            <div class="content">
                <div class="main-center">
                    <h1>Contact</h1>
                    <p>近間桃子への画像作成のご依頼、雇用のご意向、その他のお問い合わせのフォームページです。お気軽にご連絡をください。</p>
                    <section class="access clearfix">
                        <h2 class="icon">Meet up</h2>
                        <table>
                            <tr>
                                <td>現在地住所</td>
                                <th>〒901-2424<br>沖縄県中頭郡中城村南上腹</th>
                            </tr>
                            <tr>
                                <td>お車でのアクセス</td>
                                <th>西原ICより県道330経由で10分</th>
                            </tr>
                            <tr>
                                <td>電話番号</td>
                                <th>メールにてお伝えいたします。</th>
                            </tr>
                            <tr>
                                <td>待ち合わせ場所</td>
                                <th>琉球大学東口</th>
                            </tr>
                        </table>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.3073424255163!2d127.76621911503108!3d26.25168678341676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56d1d60c08b45%3A0x7fe14ca3ed543577!2sRyukyu%20University%20No.%201%20Gymnasium!5e0!3m2!1sen!2sjp!4v1594222889954!5m2!1sen!2sjp" width="460" height="320" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </section>
                    <section>
                        <h2 class="icon">Contact Form</h2>
                        <div class="form">
                            <?php
                              mb_language("Japanese");
                              mb_internal_encoding("UTF-8");
                              $name = $_POST['name'];
                              $email = $_POST['email'];
                              $tel = $_POST['tel'];
                              if(mb_send_mail($name, $email)){
                                echo "メールを送信しました";
                              } else {
                                echo "メールの送信に失敗しました";
                              };
                            ?>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- 中身終わり -->
        <!-- footer始まり -->
        <footer>
            <small>(C)2020 Momoko-C.</small>
        </footer>
    </body>
</html>