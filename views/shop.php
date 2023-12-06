<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebek-shop | Магазин</title>
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
    </header>

    <div class="container">
        <div class="d-flex flex-column flex-lg-row catalog">
            <section class="filter d-flex flex-column">
                <div class="filter__title">Categories</div>

                <div class="d-flex flex-column mt-1 mb-3">
                    <a href="#" class="filter__category">Clothes</a>
                    <a href="#" class="filter__category">Cases</a>
                    <a href="#" class="filter__category">Hookah mouthpieces</a>
                    <a href="#" class="filter__category">Accessories</a>
                    <a href="#" class="filter__category">All products</a>
                </div>
            </section>

            <div class="product-cards d-flex flex-wrap">
                <a href="product.php" class="product-card d-flex flex-column justify-content-between mt-2">
                    <div><img class="product-card__image" src="../assets/images/t-shirt.png" alt="t-shirt"></div>
                    <div class="product-card__title mt-3">T-shirt "Picture of sebek"</div>
                    <div class="product-card__price mt-1">$75</div>
                </a>

                <a href="product.php" class="product-card d-flex flex-column justify-content-between mt-2">
                    <div><img class="product-card__image" src="../assets/images/t-shirt.png" alt="t-shirt"></div>
                    <div class="product-card__title mt-3">T-shirt "Picture of sebek"</div>
                    <div class="product-card__price mt-1">$75</div>
                </a>

                <a href="product.php" class="product-card d-flex flex-column justify-content-between mt-2">
                    <div><img class="product-card__image" src="../assets/images/t-shirt.png" alt="t-shirt"></div>
                    <div class="product-card__title mt-3">T-shirt "Picture of sebek"</div>
                    <div class="product-card__price mt-1">$75</div>
                </a>

                <a href="product.php" class="product-card d-flex flex-column justify-content-between mt-2">
                    <div><img class="product-card__image" src="../assets/images/t-shirt.png" alt="t-shirt"></div>
                    <div class="product-card__title mt-3">T-shirt "Picture of sebek"</div>
                    <div class="product-card__price mt-1">$75</div>
                </a>

                <a href="product.php" class="product-card d-flex flex-column justify-content-between mt-2">
                    <div><img class="product-card__image" src="../assets/images/t-shirt.png" alt="t-shirt"></div>
                    <div class="product-card__title mt-3">T-shirt "Picture of sebek"</div>
                    <div class="product-card__price mt-1">$75</div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>