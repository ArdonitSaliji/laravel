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
        
        let name = document.querySelector('#name').value
        let email = document.querySelector('#email').value
        let password = document.querySelector('#password').value
        let password2 = document.querySelector('#password2').value
        let form = document.querySelector('#signup-form')
        
        if(password !== password2) {
            
            Toastify({
                text: 'Passwords are not matching!',
                className: 'info',
                position: 'center',
                gravity: 'top',
                close: true,
                style: {
                    background: 'linear-gradient(to right, #A40606, #D98324)',
                },
            }).showToast();
            
            form.preventDefault()
        } else {
            let request = await fetch('/api/signup', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                name,
                email,
                password
            }),
        })

        let response = await request.json()

        if (response.status === 200) {
            setTimeout(() => {
                window.location = '/login'
            }, 2000); 
            Toastify({
                text: `${response.message}`,
                className: 'info',
                position: 'center',
                close: true,
                gravity: 'top',
                style: {
                    background: 'linear-gradient(to right, #5AFF15, #00B712)',
                },
            }).showToast();
        } else {
            if(response.status === 405) {
            Toastify({
                text: `${response.message}`,
                className: 'info',
                position: 'center',
                close: true,
                gravity: 'top',
                style: {
                    background: 'linear-gradient(to right, #A40606, #D98324)',
                },
            }).showToast();
            } else {
                Toastify({
                    text: `${response.message}`,
                    className: 'info',
                    position: 'center',
                    close: true,
                    gravity: 'top',
                    style: {
                        background: 'linear-gradient(to right, #5AFF15, #00B712)',
                    },
                }).showToast();
            }
        }
        }
    }

    </script>
</head>

<body class="antialiased">
    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <i onclick="goBack()" class="fa-solid fa-backward"></i>
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

                                <form onsubmit="event.preventDefault(); submitForm();" id="signup-form" >

                                    <div class="form-outline mb-4">
                                        <input type="text" id="name"
                                            placeholder="Your Name"
                                            class="form-control form-control-lg"
                                            required />
                                            
                                        <label class="form-label"
                                            for="form3Example1cg"></label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="email"
                                            placeholder="Your Email"
                                            class="form-control form-control-lg" />
                                        <label class="form-label"
                                            for="form3Example3cg"></label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password"
                                            id="password"
                                            placeholder="Password"
                                            class="form-control form-control-lg" />
                                        <label class="form-label"
                                            for="form3Example4cg"></label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password"
                                            id="password2"
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
                                        <button type="submit" 
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