<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fgdfg</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <style>
        .swiper-slide {
            width: 500px;
            /* Same width for all slides */
            height: 550px;
            /* Same height for all slides */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            /* Hide extra cropped parts */
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Fill the space */
            object-position: center;
            /* Keep center in view */
        }

        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }
    </style>


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">JR FUTSAl</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">View Futsal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <div class="d-flex">

                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Register
                    </button>

                </div>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" shadow-none>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" shadow-none>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>



    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="image/qw.jpg" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="image/er.jpg" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="image/ty.JPG" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="image/ooo.JPG" class="w-100 d-block">
                </div>
            </div>
        </div>
    </div>



    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Futsal Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-in</label>
                            <input type="date" class="form-control" shadow-none>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Select Time Slot</label>
                            <select class="form-control" shadow-none>
                                <option value="">-- Select Time Slot --</option>
                                <option value="6-7">6:00 AM - 7:00 AM</option>
                                <option value="7-8">7:00 AM - 8:00 AM</option>
                                <option value="8-9">8:00 AM - 9:00 AM</option>
                                <option value="9-10">9:00 AM - 10:00 AM</option>
                                <option value="10-11">10:00 AM - 11:00 AM</option>
                                <option value="11-12">11:00 AM - 12:00 PM</option>
                                <option value="12-13">12:00 PM - 1:00 PM</option>
                                <option value="13-14">1:00 PM - 2:00 PM</option>
                                <option value="14-15">2:00 PM - 3:00 PM</option>
                                <option value="15-16">3:00 PM - 4:00 PM</option>
                                <option value="16-17">4:00 PM - 5:00 PM</option>
                                <option value="17-18">5:00 PM - 6:00 PM</option>
                                <option value="18-19">6:00 PM - 7:00 PM</option>
                                <option value="19-20">7:00 PM - 8:00 PM</option>
                                <option value="20-21">8:00 PM - 9:00 PM</option>
                            </select>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <form>
                                <label class="form-label">Select Team Size for Side A</label>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sideA_size" id="sideA_5" value="5">
                                    <label class="form-check-label" for="sideA_5">
                                        5 Players
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sideA_size" id="sideA_7" value="7">
                                    <label class="form-check-label" for="sideA_7">
                                        7 Players
                                    </label>
                                </div>
                            </form>
                        </div>
                        <div class="lg-1">
                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Services</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img class="card-img-top" src="image/HHH.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Futsal >>></a>
            </div>
        </div>
    </div>



    <br><br><br><br><br><br>
    <br><br><br><br><br><br>


    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                            User Registeration
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">

                        </span>
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" shadow-none>
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" shadow-none>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" shadow-none>
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Picture</label>
                                    <input type="file" class="form-control" shadow-none>
                                </div>
                                <div class="col-md-12 p-0 mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control shadow-none" rows="1"></textarea>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="number" class="form-control" shadow-none>
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" shadow-none>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" shadow-none>
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" shadow-none>
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
                        </div>
                </form>

            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });
    </script>
</body>

</html>