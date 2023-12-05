<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebek-shop | Cart</title>
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

    <section class="cart">
        <div class="container">
            <table class="table table-bordered table-hover">
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                </tr>
                <tr>
                    <td><img class="cart__image" src="../assets/images/t-shirt.png" alt="t-shirt">T-shirt "Picture of sebek"</td>
                    <td>4</td>
                    <td>75</td>
                </tr>
                <tr>
                    <td><img class="cart__image" src="../assets/images/t-shirt.png" alt="t-shirt">T-shirt "Picture of sebek"</td>
                    <td>1</td>
                    <td>75</td>
                </tr>
            </table>

            <form class="text-right mt-2" action="" method="post">
                <input class="confirm-button mt-2" value="Checkout" type="submit">
            </form>
        </div>
    </section>
</body>

</html>