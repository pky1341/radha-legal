<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radha Legal Advice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Navbar */
        .navbar {
            background-color: white;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            height: 50px;
        }

        .navbar-nav a {
            color: #007bff;
            font-weight: 500;
        }

        /* Main Content */
        .main-section {
            padding: 50px 0;
        }

        .main-section h1 {
            font-weight: 700;
            color: #333;
        }

        .main-section p {
            font-size: 18px;
            color: #555;
        }

        .services-container .card {
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 10px;
        }

        /* Steps Section */
        .steps-section {
            background-color: #eaf4fc;
            padding: 40px 0;
        }

        .steps-section h3 {
            font-weight: 600;
        }

        .steps-section .step-item {
            font-size: 18px;
        }

        /* Business Services */
        .business-services h4 {
            color: #007bff;
            font-weight: 600;
        }

        .business-services ul {
            list-style: none;
            padding-left: 0;
        }

        .business-services ul li a {
            color: #007bff;
            text-decoration: none;
        }

        /* Footer */
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }

        footer .social-icons a {
            color: white;
            font-size: 18px;
            margin: 0 10px;
        }

        footer p {
            margin-bottom: 0;
        }

        /* Form Styling */
        .contact-form textarea {
            resize: none;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar-brand img {
                height: 40px;
            }

            .contact-form {
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('assets/images/1.png')}}" alt="Radha Legal Advice">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="{{asset(url('/'))}}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Section -->
<section class="main-section">
    <div class="container d-flex justify-content-between align-items-center flex-wrap">
        <div class="content col-md-6">
            <h1>Your Legal Partner For Every Step Of Business</h1>
            <p>Professional guidance on everything from registration to trademarking, compliance to contracts—We're here to simplify your journey.</p>
            <h4 class="mt-4">Our Services</h4>
            <div class="row services-container">
                <div class="col-md-3">
                    <div class="card p-3 text-center">Business Setup</div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 text-center">Tax & Compliance</div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 text-center">Trademark & IP</div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 text-center">Documentation</div>
                </div>
            </div>
        </div>

        <div class="contact-form col-md-5">
            <h4>Talk To Lawyer, CA, CS</h4>
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="mb-3">
                    <input type="tel" class="form-control" placeholder="Mobile Number" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" placeholder="Message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit Details</button>
                <p class="mt-2 text-muted">We will get back to you as soon as possible!!</p>
            </form>
        </div>
    </div>
</section>

<!-- Steps Section -->
<section class="steps-section text-center">
    <div class="container">
        <h3>Steps to Get Consultation Online</h3>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="step-item">
                    <h4>1.</h4>
                    <p>Fill Out the Form</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="step-item">
                    <h4>2.</h4>
                    <p>Schedule an Appointment</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="step-item">
                    <h4>3.</h4>
                    <p>Make Payment</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="step-item">
                    <h4>4.</h4>
                    <p>You Get Your Service</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Services Section -->
<section class="business-services py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Business Setup Services</h4>
                <ul>
                    <li>Private Limited Company <a href="{{route('user-form')}}">Apply Here</a></li>
                    <li>Limited Liability Partnership <a href="{{route('user-form')}}">Apply Here</a></li>
                    <li>One Person Company <a href="{{route('user-form')}}">Apply Here</a></li>
                    <li>Startup India Registration <a href="{{route('user-form')}}">Apply Here</a></li>
                    <!-- Add other services similarly -->
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Tax & Compliance</h4>
                <ul>
                    <li>GST Registration <a href="{{route('user-form')}}">Apply Here</a></li>
                    <li>Income Tax Filing <a href="{{route('user-form')}}">Apply Here</a></li>
                    <li>Company Audits <a href="{{route('user-form')}}">Apply Here</a></li>
                    <li>TDS Returns <a href="{{route('user-form')}}">Apply Here</a></li>
                    <!-- Add other services similarly -->
                </ul>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <h4>Trademark & IP</h4>
                <ul>
                    <li>Trademark Registration <a href="{{route('user-form')}}">Apply Here</a></li>
                    <li>Patent Filing <a href="{{route('user-form')}}">Apply Here</a></li>
                    <li>Copyright <a href="{{route('user-form')}}">Apply Here</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Documentation</h4>
                <ul>
                    <li>Shareholder Agreement <a href="{{route('user-form')}}">Apply Here</a></li>
                    <li>Partnership Deeds <a href="{{route('user-form')}}">Apply Here</a></li>
                    <li>Employment Contracts <a href="{{route('user-form')}}">Apply Here</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('assets\images\2.png')}}" alt="Logo" style="height: 50px;">
            </div>
            <div class="col-md-6 text-md-end">
                <p>Contact Information</p>
                <p>Email: radhalegal1234@gmail.com | Phone: +91 999-999-9999</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <p class="mt-4">© 2024 All Rights Reserved</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif
    </script>
</body>
</html>
