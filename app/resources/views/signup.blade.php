<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link
        href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }
    </style>
</head>

<body class="antialiased">
    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div
                    class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 1rem">
                            <div class="card-body p-5"
                                style="background-color: #212529; border-radius: 1rem;">
                                <h2 style="color: white;"
                                    class="fw-bold text-uppercase text-center mb-5">
                                    Create an account</h2>

                                <form>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg"
                                            placeholder="Your Name"
                                            class="form-control form-control-lg" />
                                        <label class="form-label"
                                            for="form3Example1cg"></label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example3cg"
                                            placeholder="Your Email"
                                            class="form-control form-control-lg" />
                                        <label class="form-label"
                                            for="form3Example3cg"></label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password"
                                            id="form3Example4cg"
                                            placeholder="Password"
                                            class="form-control form-control-lg" />
                                        <label class="form-label"
                                            for="form3Example4cg"></label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password"
                                            id="form3Example4cdg"
                                            placeholder="Repeat your password"
                                            class="form-control form-control-lg" />
                                        <label class="form-label"
                                            for="form3Example4cdg"></label>
                                    </div>

                                    <div
                                        class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2"
                                            type="checkbox" value=""
                                            id="form2Example3cg" />
                                        <label
                                            class="form-check-label text-light"
                                            for="form2Example3g">
                                            I agree all statements in <a
                                                href="#!"
                                                class="text-primary"><u>Terms
                                                    of
                                                    service</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="button"
                                            class="btn btn-outline-light btn-lg px-5">Register</button>
                                    </div>



                                    <p class="text-center text-light mt-5 mb-0">
                                        Have already an account? <a
                                            href="/login"
                                            class="fw-bold text-primary"><u>Login
                                                here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>