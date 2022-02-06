<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Pineapple</title>
</head>
<body>
<div class="wrapper">
    <div class="wrapper_content">

        <header class="header">
            <div class="logo">
                <img class="logo_union" src="./image/logo_pineapple.svg" alt="logo">
                <img class="logo_text" src="./image/img_desktop/pineapple.svg" alt="pineapple">
            </div>
            <div class="nav">
                <div class="menu_wrapper">
                    <ul class="menu">
                        <li><a href="#">About</a></li>
                        <li><a href="#">How it works</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <main class="main">
            <div class="heading">
                <h1>Subscribe to newsletter</h1>
            </div>
            <div class="sub_heading">
                <p>Subscribe to our newsletter and get 10% discount on
                    pineapple glasses.</p>
            </div>

            <form action="validation-form/check.php" method="post" onsubmit="return validateForm()">
                <div class="wrap_email">
                    <input type="email" id="email" class="email" name="email" placeholder="Type your email address here…">
                    <button type="submit" class="submit"></button>
                </div>
                <div class="tos">
                    <label class="container-custom-checkbox">
                        <input type="checkbox"  id="checkbox" required>
                        <span class="checkmark"></span>
                    </label>
                    <span class="tos_text">I agree to <a href="#">terms of service</a> </span>
                </div>
                <hr>
            </form>

            <div class="wrap_social_icon">
                <div class="social_icon">
                    <div class="icon">
                        <a href="#" class="facebook"></a>
                    </div>
                    <div class="icon">
                        <a href="#" class="instagram"></a>
                    </div>
                    <div class="icon">
                        <a href="#" class="twitter"></a>
                    </div>
                    <div class="icon">
                        <a href="#" class="youtube"></a>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div class="wrapper_image">
    </div>
</div>

<script src="js/script.js"></script>

</body>
</html>