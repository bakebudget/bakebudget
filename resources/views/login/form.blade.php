<html>
<head>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <style>
        .gradient-custom {

        background: #cba011;

        background: -webkit-linear-gradient(to right, rgb(255, 216, 77), rgb(254, 255, 215));

        background: linear-gradient(to right,rgb(255, 216, 77), rgb(254, 255, 215))
        }
    </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card bg-light text-black" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                    <div class="mb-md-2 mt-md-2 pb-1">
    
                            <h1 class="fw-bold mb-3 text-uppercase">Login here</h1>
    
                            <form action="/login" method="post">
                                @csrf
    
                            <div class="form-outline form-white mb-2">
                                <label for="user" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control form-control-lg">
                            </div>
    
                            <div class="form-outline form-white mb-2">
                                <label for="pass" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control form-control-lg">
                            </div>
    
                                <button type="submit" class="btn btn-outline-dark btn-lg px-5">login</button>
                            </form>
                            <!-- <a href="register.php">belum punya akun?</a> -->
                            <div>
                            <p class="mb-0">Belum punya akun? <a href="register.php" class="text-blue-50 fw-bold">Register disini</a>
                            </p>
                            </div>
    
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>