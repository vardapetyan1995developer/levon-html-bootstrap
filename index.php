<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        input, button, a {
            box-shadow: none !important;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 col-lg-5 mt-3 m-auto">
                <h1>Register</h1>

                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="form-group mt-4">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" autocomplete="off">
                    </div>

                    <div class="form-group mt-4">
                        <input type="text" id="username" name="username" class="form-control" placeholder="Enter username" autocomplete="off">
                    </div>

                    <div class="form-group mt-4">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" autocomplete="off">
                    </div>

                    <div class="form-group mt-2">
                        <button type="submit" name="send" class="btn btn-primary">Register</button>
                        <button type="reset" class="btn btn-danger">Clear</button>
                    </div>
                </form>
            </div>

            <div class="col-md-6 col-lg-5 mt-3 m-auto">
                <h1>Login</h1>

                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="form-group mt-4">
                        <input type="text" id="username" name="username" class="form-control" placeholder="Enter username" autocomplete="off">
                    </div>

                    <div class="form-group mt-4">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" autocomplete="off">
                    </div>

                    <div class="form-group mt-2">
                        <button type="submit" name="send" class="btn btn-primary">Login</button>
                        <button type="reset" class="btn btn-danger">Clear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
