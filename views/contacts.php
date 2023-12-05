<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebek-shop | Contacts</title>
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

    <section class="contacts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="d-flex">
                        <div class="contacts__type">Phone:</div>
                        <div class="contacts__item">
                            +1 234 567 8901<br>
                            +1 234 567 8901
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="contacts__type">Email:</div>
                        <div class="contacts__item">contacts@sebek.shop</div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div>Do you have a question? Let us know!</div>
                    <form class="text-right mt-2" action="" method="post">
                        <input class="form-control" type="text" placeholder="Email" required>
                        <textarea class="form-control mt-2" placeholder="Questions..." cols="30" rows="10"></textarea>
                        <input class="confirm-button mt-2" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>