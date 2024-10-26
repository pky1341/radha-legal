<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Services - Radha Legal Advice</title>
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

        /* Form Section */
        .form-section {
            padding: 50px 0;
        }

        .form-section h2 {
            font-weight: 700;
            color: #333;
        }

        .form-section p {
            font-size: 18px;
            color: #555;
        }

        .form-control {
            border-radius: 8px;
        }

        .submit-btn {
            background-color: #007bff;
            color: white;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        /* Footer */
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }

        footer p {
            margin-bottom: 0;
        }

        footer .social-icons a {
            color: white;
            font-size: 18px;
            margin: 0 10px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar-brand img {
                height: 40px;
            }

            .form-section {
                padding: 20px 0;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{ asset('assets/images/1.png') }}" alt="Radha Legal Advice">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Form Section -->
    <section class="form-section">
        <div class="container">
            <h2>Apply for Services</h2>
            <p>Please fill out the form below and we will get back to you shortly.</p>

            <form id="leadForm" action="{{ route('leads.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" name="full_name"
                        placeholder="Enter your full name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="mobileNumber" class="form-label">Mobile Number</label>
                    <input type="tel" class="form-control" name="mobile" id="mobileNumber"
                        placeholder="Enter your mobile number" required>
                </div>
                <div class="mb-3">
                    <label for="companyName" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="companyName" name="company_name"
                        placeholder="Enter your company name" required>
                </div>
                <div class="mb-3">
                    <label for="services" class="form-label">Select Services</label>
                    <select class="form-control" id="services" name="service" required>
                        <option value="">Select a service</option>
                        <option value="Trademark">Trademark</option>
                        <option value="Patent">Patent</option>
                        <option value="Copyright">Copyright</option>
                        <option value="Talk to Expert">Talk to Expert</option>
                    </select>
                </div>
                <button type="submit" class="submit-btn">Submit Application</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets\images\2.png') }}" alt="Logo" style="height: 50px;">
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
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif
    </script>
</body>

</html>
