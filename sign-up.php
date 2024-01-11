<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style/index.css">
</head>

<body>
    <section class="auth-form sign-up">
        <div class="auth-form__img">
            <img src="./assets/img/register.jpg" alt="register">
        </div>
        <form class="register" action="./function/auth/register.php" method="post">
            <h3>Sing up</h3>
            <div class="input__wrapper">
                <div class="input__field">
                    <p>Name</p>
                    <input type="text" placeholder="Alex" name="name" required>
                </div>
                <div class="input__field">
                    <p>Surname</p>
                    <input type="text" placeholder="Rembo" name="surname" required>
                </div>
                <div class="input__field span2">
                    <p>Email</p>
                    <input type="text" placeholder="Email" name="email" required>
                </div>
                <div class="input__field">
                    <p>Name company</p>
                    <input type="text" placeholder="SoftServe" name="name-company" required>
                </div>
                <div class="input__field">
                    <p>Employment position</p>
                    <input type="text" placeholder="Marketer" name="employment" required>
                </div>

                <div class="input__field">
                    <p>Password</p>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="input__field">
                    <p>Repeat password</p>
                    <input type="password" placeholder="Password" name="password2" required>
                </div>
            </div>
            <button>Sing up</button>

            <p class="form__bottom-text">Already have an account? <a href="./sign-in.php">Sign in</a></p>
        </form>
    </section>
</body>

</html>