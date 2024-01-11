<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style/index.css">
</head>

<body>
    <section class="auth-form">
        <form action="./function/auth/login.php" method="post">
            <h3>Sing in</h3>
            <div class="input__wrapper">
                <div class="input__field">
                    <p>Email</p>
                    <input type="text" placeholder="Email" name="email" required>
                </div>
                <div class="input__field">
                    <p>Password</p>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
            </div>
            <button>Sing in</button>
            <p class="form__bottom-text">Don’t have an account? <a href="./sign-up.php">Sign up</a></p>
        </form>
    </section>
</body>

</html>