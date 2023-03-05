
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
        
        
        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        
    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }

    .fa-backward {
        z-index: 51;
        font-size: 3rem;
        position: absolute;
        top: 3rem;
        left: 5rem;
        color: white;
        cursor: pointer;
    }

    .fa-backward:hover {
        opacity: 0.7;
    }
    </style>

    <script>
    

        
    const goBack = () => {
        window.location.href = '/'
    }

    const submitForm = async () => {

        let email = document.querySelector('#email').value
        let password = document.querySelector('#password').value
        let request = await fetch('/api/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                email,
                password
            }),
        })

        let response = await request.json()

        if (response.status === 200) {
            window.location = '/success'
        }
        
        Toastify({
        text: `${response.message}`,
        className: 'info',
        position: 'center',
        gravity: 'top',
        style: {
            background: 'linear-gradient(to right, #A40606, #D98324)',
        },
    }).showToast();
        
    }
    </script>
</head>

<body class="antialiased">
    <section class="vh-100 gradient-custom"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <i onclick="goBack()" class="fa-solid fa-backward"></i>

        <div class="container py-5 h-100">
            <div
                class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white"
                        style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <form id="submit-form" class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Login
                                </h2>
                                <p class="text-white-50 mb-5">Please enter your
                                    login and password!</p>

                                <div class="form-outline form-white mb-4">
                                    <input type="email"
                                        placeholder="Enter your email or username"
                                        id="email"
                                        class="form-control form-control-lg" />
                                    <label class="form-label"
                                        for="typeEmailX"></label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="password"
                                        placeholder="Enter your password"
                                        class="form-control form-control-lg" />
                                    <label class="form-label"
                                        for="typePasswordX"></label>
                                </div>

                                <p class="small mb-5 pb-lg-2"><a
                                        class="text-primary" href="#!">Forgot
                                        password?</a></p>

                                <button
                                    class="btn btn-outline-light btn-lg px-5"
                                    onclick="submitForm()"
                                    type="button">Login</button>

                                <div
                                    class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i
                                            class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i
                                            class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i
                                            class="fab fa-google fa-lg"></i></a>
                                </div>

                            </form>

                            <div>
                                <p class="mb-0">Don't have an account? <a
                                        href="/signup"
                                        class="text-primary fw-bold">Sign
                                        Up</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>