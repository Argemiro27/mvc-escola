<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/app.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
</head>

<body class="d-flex align-items-center justify-content-center">

    <div class="container card d-flex">
        <div class="row py-5 mt-4 align-items-center ">
            <!-- For Demo Purpose -->
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="assets/loginimg.svg" alt="" class="img-fluid mb-3 d-none d-md-block">

            </div>

            <!-- Registeration Form -->
            <div class="col-md-7 col-lg-6 ml-auto ">
                <h1>Faça login</h1>
                <form action="#">
                    <div class="row">

                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-envelope"></i>
                                </span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Email"
                                class="form-control bg-white border-left-0 border-md">
                        </div>


                        <!-- Password -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="bi bi-key"></i>
                                </span>
                            </div>
                            <input id="password" type="password" name="password" placeholder="Senha"
                                class="form-control bg-white border-left-0 border-md">
                        </div>



                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <a href="/dashboard" class="btn btn-primary btn-block py-2">
                                <span class="font-weight-bold">LOGIN</span>
                            </a>
                        </div>

                        <!-- Divider Text -->
                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                            <div class="border-bottom w-100 ml-5"></div>
                            <span class="px-2 small text-muted font-weight-bold text-muted">OU</span>
                            <div class="border-bottom w-100 mr-5"></div>
                        </div>

                        <!-- Already Registered -->
                        <div class="text-center w-100">
                            <p class="text-muted font-weight-bold">Não possui uma conta? <a href="/register"
                                    class="text-primary ml-2">Registre-se!</a></p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
