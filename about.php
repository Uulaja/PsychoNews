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
    <title>About Us - PsychoNews</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'inc/NavBar.php'; ?>
    <div class="container mt-5 about-section">
        <h1>About PsychoNews</h1>
        <p>
            Welcome to <b>PsychoNews</b>, your trusted source for comprehensive information on mental health and well-being. Our mission is to provide valuable insights, expert advice, and inspiring stories to help individuals better understand and manage their mental health.
        </p>
        <p>
            At PsychoNews, we are dedicated to breaking the stigma surrounding mental health issues and promoting a culture of openness and support. Our platform offers a wide range of content, including:
        </p>
        <ul>
            <li><b>In-depth Articles:</b> Explore detailed write-ups on various mental health conditions, treatments, and the latest research. Our articles aim to educate and inform, empowering you to make well-informed decisions about your mental health.</li>
            <li><b>Expert Advice:</b> Benefit from the knowledge and experience of mental health professionals. Our expert columns provide practical tips and strategies for managing stress, anxiety, depression, and other common mental health challenges.</li>
            <li><b>Personal Stories:</b> Read inspiring stories from individuals who have faced and overcome mental health issues. Their journeys offer hope, encouragement, and a sense of community to those who may be struggling.</li>
            <li><b>Wellness Tips:</b> Discover holistic approaches to mental well-being, including mindfulness practices, nutrition, exercise, and self-care routines. Our wellness tips aim to support your overall mental and emotional health.</li>
            <li><b>Resources:</b> Access a curated list of mental health resources, including hotlines, support groups, and treatment centers. Our resource directory is designed to connect you with the help you need.</li>
        </ul>
        <p>
            Our team of dedicated writers, mental health professionals, and advocates is passionate about sharing accurate and engaging content that resonates with our readers. We strive to create a supportive environment where individuals can learn, connect, and grow.
        </p>
        <p>
            We invite you to join us on this journey towards mental wellness. Stay connected with PsychoNews through our blog, social media channels, and newsletters to ensure you never miss out on the latest updates and stories.
        </p>
        <p>
            Thank you for visiting PsychoNews. Together, let's foster a greater understanding and appreciation of mental health, one story at a time.
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzC2XpsK3mI6b3L1bO9Y6XJ9f93rGXgK9E9oYbPvHWT+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-QFQtWu7e1P6boqmDeH6AzIEPFi8Zh9zSeCJ5pL1yt69b6uD55C4J8kewEI7C3Utw" crossorigin="anonymous"></script>
</body>
</html>
