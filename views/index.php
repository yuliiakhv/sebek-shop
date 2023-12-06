<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebek-shop</title>
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <header class="header">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="header__logo">
                <a href="index.php"><img src="../assets/images/logo.jpg" alt="logo"></a>
            </div>

            <nav class="header__nav d-md-block d-none">
                <a href="index.php" class="mr-3">Store</a>
                <a href="faq.php" class="mr-3">FAQ</a>
                <a href="contacts.php">Contacts</a>
            </nav>

            <a href="cart.php" class="header__cart d-block">Cart -
                <span class="header__cart-counter">2</span>
            </a>
        </div>

        <div class="header__content d-flex flex-column justify-content-center">
            <h1 class="header__title">Hello, dear darlings!</h1>
        </div>
    </header>

    <section class="categories">
        <div class="container">
            <div class="section__title">Product categories</div>

            <div class="row">
                <div class="col-lg-3 col-6">
                    <a href="#" class="categories__block d-flex flex-column justify-content-center">
                        <img class="categories__image" src="../assets/images/t-shirt.png" alt="t-shirt">
                        <div class="categories__block-title">Clothes</div>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="#" class="categories__block d-flex flex-column justify-content-center">
                        <img class="categories__image" src="../assets/images/case.png" alt="case">
                        <div class="categories__block-title">Cases</div>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="#" class="categories__block d-flex flex-column justify-content-center">
                        <img class="categories__image" src="../assets/images/smoke.png" alt="smoke">
                        <div class="categories__block-title">Hookah mouthpieces</div>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="#" class="categories__block d-flex flex-column justify-content-center">
                        <img class="categories__image" src="../assets/images/goods.png" alt="goods">
                        <div class="categories__block-title">Accessories</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container d-flex justify-content-between">
            <div class="footer__rights">© 2023 All rights reserved</div>

            <div class="footer__social-links">
                <a href="https://www.instagram.com/00000000000001k" class="mr-2">Instagram</a>
                <a href="https://t.me/joinchat/AAAAAFdzT5znhxeC6xOf3Q">Telegram</a>
            </div>
        </div>
    </footer>
</body>

</html>