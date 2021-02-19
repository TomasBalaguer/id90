<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME ?></title>

    <!-- css files -->
    <link rel="stylesheet" href="./public/css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="./public/css/home.css"> <!-- Style-CSS -->
    <link rel="stylesheet" href="./public/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
</head>

<body>
    <div class="card">
        <div class="text-center"> <img src="./public/images/white-logo.png" width="200"> <br></div>
        <?php if (isset($_SESSION['login_error'])) : ?>
            <div class="alert alert-danger" role="alert" style="margin-top: 20px">
                <?php echo $_SESSION['login_error']; ?>
            </div>
            <?php unset($_SESSION['login_error']); ?>
        <?php endif; ?>
        <form method="post" action="auth/login" name="login">
            <div class="form-group">
                <label for="airline">Airline</label>
                <select class="form-control" id="airline" name="airline" required>
                    <option value="">Select your airline</option>
                    <?php foreach ($datos['airlines'] as $airline) : ?>
                        <option value="<?php echo $airline['display_name'] ?>"><?php echo $airline['display_name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" id="login-btn" class="btn btn-primary text-center">Login</button>
        </form>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script>
    $(function() {
        $("form[name='login']").validate({
            rules: {
                airline: "required",
                username: "required",
                password: "required"
            },
            messages: {
                airline: "Please select your airline",
                username: "Please enter your username",
                password: "Please enter your password"
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>

</html>