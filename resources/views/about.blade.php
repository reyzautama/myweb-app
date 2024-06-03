<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            position: relative;
            min-height: 100vh; /* Ensure the body takes full height */
            display: flex;
            flex-direction: column;
        }
        .container {
            text-align: center;
            margin-top: 100px; /* Adjust this value to fit your design */
            flex: 1; /* Push the footer to the bottom */
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 48px; /* Larger font size for emphasis */
            font-weight: bold; /* Make it bold */
        }
        .hello-world {
            font-size: 36px;
            font-weight: bold;
            color: #3490dc;
            animation: fadeInUp 2s ease-in-out;
        }
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .marquee {
            font-size: 24px;
            font-weight: bold;
            color: #555;
            overflow: hidden;
            white-space: nowrap;
            box-sizing: border-box;
            animation: marquee 10s linear infinite;
        }
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
        .image-container {
            position: absolute;
            top: 20px;
            left: 20px;
        }
        .image-container img {
            width: 100px; /* Set the image width */
            height: auto;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        footer a {
            color: #ffc107;
            text-decoration: none;
        }
        footer a:hover {
            color: #fff;
            text-decoration: underline;
        }
        footer .social-icons {
            margin-top: 10px;
        }
        footer .social-icons a {
            margin: 0 10px;
            color: #fff;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">My Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about"><i class="fas fa-info-circle"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact"><i class="fas fa-envelope"></i> Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login"><i class="fas fa-sign-in-alt"></i> Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Main Content -->
<div class="container">
    <h1>About Me</h1>
    <p><i class="fas fa-map-marker-alt"></i> Born in Bandung, February 25, 1990.</p>
<p><i class="fas fa-graduation-cap"></i> Currently pursuing my undergraduate studies at Bandung Institute of Technology (ITB).</p>
    <p>I am a private company employee working in a Toyota spare parts warehouse. Born in Bandung, February 25, 1990. Currently pursuing my undergraduate studies at Bandung Institute of Technology (ITB).</p>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 My Website. All Rights Reserved.</p>
    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
</div>
</footer><!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
