<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebek-shop | Product</title>
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
            <div><img class="product__image" src="../assets/images/t-shirt.png" alt="t-shirt"></div>

            <div class="product__info ml-lg-5 ml-0 mt-lg-0 mt-5">
                <div class="product__title">T-shirt "Picture of sebek"</div>
                <div class="product__price mt-3">$75</div>
                <div class="product__subtitle mt-3">The T-shirt is suitable for creating both a sporty look and an urban casual bow.</div>
                <div class="product__tag mt-3"><span>Fabric Type</span>cotton 95%, elastane 5%</div>
                <div class="product__tag mt-3"><span>Size</span>Small &nbsp;&nbsp;&nbsp;Medium &nbsp;&nbsp;&nbsp;Large</div>

                <form class="text-left mt-2" action="" method="post">
                    <input class="confirm-button mt-2" value="Add to cart" type="submit">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
