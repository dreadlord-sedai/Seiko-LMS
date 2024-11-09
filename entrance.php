<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/entrance.css">
    <title>Document</title>
</head>

<body class="container-fluid">
    <div class="row">
        <div class="m-auto">

            <!-- Registration Box -->

            <div class="offset-lg-4 col-12 col-lg-4 registeration-Login-box d-none" id="registration">
                <div class="row">
                    <div class="col-12 mt-1 mb-0">
                        <div class="logo"></div>
                        <h1 class="text-center mt-0">SEIKO</h1>
                        <p class="text-center fw-bold td-underlined">Welcome to <b style="color: rgb(63, 170, 206);">SEIKO Japanese Academy</b></p>
                        <p class="text-center fw-bold">REGISTER HERE</p>
                    </div>

                    <div class="col-12 d-block p-4 pt-0 pb-0" id="msgdiv">
                        <div class="alert alert-danger text-center mb-1" role="alert" id="msg">
                            Error Massage Here
                        </div>
                    </div>

                    <div class="col-12 p-4">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email">
                            <label for="email">First Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email">
                            <label for="email">Last Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email">
                            <label for="email">Email Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email">
                            <label for="email">Mobile Number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email">
                            <label for="email">NICN (Guardian or Student)</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password">
                            <label for="password">Password</label>
                        </div>

                        <div class="row">

                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-primary" onclick="">Register</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-dark" onclick="changeView();">Have an Account ? Login here </button>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <!-- Registration Box -->

            <!-- Login Box -->

            <div class="offset-lg-4 col-12 col-lg-4 registeration-Login-box d-block" id="login">
                <div class="row">
                    <div class="col-12 mt-3 mb-0">
                        <div class="logo"></div>
                        <h1 class="text-center mt-0">SEIKO</h1>
                        <p class="text-center fw-bold td-underlined">Welcome to <b style="color: rgb(63, 170, 206);">SEIKO Japanese Academy</b></p>
                        <p class="text-center fw-bold">LOGIN HERE</p>
                    </div>
                    <div class="col-12 p-4 g-3">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email">
                            <label for="email">Email Address</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password">
                            <label for="password">Password</label>
                        </div>

                        <div class="row g-3">

                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-primary" onclick="login();">Login</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-dark" onclick="changeView();">New to SEIKO ? Register here </button>
                            </div>

                            <div class="col-12 col-lg-12 d-grid">
                                <button class="btn Admins-Login-button" onclick="adminLogin();">Admins Login</button>
                            </div>

                            <div class="col-12 col-lg-6 fw-bolder mt-4 text-start">
                                <input type="checkbox" id="rememberMe">
                                <label for="rememberMe">Remember me</label>
                            </div>

                            <div class="col-12 col-lg-6 fw-bolder mt-4 text-end">
                                <a href="#" class="fw-bold">Forgot Password</a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <!-- Login Box -->
        </div>
    </div>

    <script src="../Seiko/Js/script.js"></script>
</body>

</html>
