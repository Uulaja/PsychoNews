<?php 
session_start();
$logged = false;
if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
    $logged = true;
    $user_id = $_SESSION['user_id'];
}
$notFound = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Wonderful TanjungPinang</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <?php include 'inc/NavBar.php'; ?>
    <div class="container mt-5 contact-section text-center">
        <img src="img/contact.jpg" alt="Muhammad Aulia Syamsul Hadi" class="rounded-circle developer-photo">
        <h2 class="mt-3">Muhammad Aulia Syamsul Hadi</h2>
        <p class="text-muted">Student of Islamic State University Maulana Malik Ibrahim Malang</p>
        <div class="social-icons mt-4">
            <a href="https://www.facebook.com/OwLNwH/" class="fa fa-facebook"></a>
            <a href="https://www.instagram.com/m_a_syamsul_h" class="fa fa-instagram"></a>
            <a href="https://github.com/Uulaja" class="fa fa-github"></a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzC2XpsK3mI6b3L1bO9Y6XJ9f93rGXgK9E9oYbPvHWT+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-QFQtWu7e1P6boqmDeH6AzIEPFi8Zh9zSeCJ5pL1yt69b6uD55C4J8kewEI7C3Utw" crossorigin="anonymous"></script>
</body>
</html>
