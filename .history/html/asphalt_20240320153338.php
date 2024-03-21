<?php $currentPage = 'Home'; ?>

<?php include('head.php'); ?>
<?php include('navbar.php'); ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<style>
    /* Reset default margins and paddings */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* General page styles */
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
    }

    /* Header styles */
    header {
        background-image: url('header_background_image.jpg'); /* Replace with your header image */
        background-size: cover;
        background-position: center;
        color: #fff;
        text-align: center;
        padding: 100px 20px; /* Adjust padding as needed */
    }

    header h1 {
        font-size: 3em;
        margin-bottom: 20px;
    }

    header p {
        font-size: 1.2em;
        margin-bottom: 40px;
    }

    /* Button styles */
    .button {
        display: inline-block;
        background: #f60;
        color: #fff;
        padding: 10px 20px;
        font-size: 1.2em;
        text-decoration: none;
        border: none;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .button:hover {
        background-color: #e55d0e;
    }

    /* Video container */
    .video-container {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
        height: 0;
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }

    /* Main content styles */
    .main-content {
        text-align: center;
        padding: 50px 20px;
        background: #eee; /* Light background for the content */
    }

    /* Responsive design */
    @media (max-width: 768px) {
        header h1 {
            font-size: 2.5em;
        }

        header p {
            font-size: 1em;
        }
    }
</style>

<header>
    <h1>Crack Chaser Repair Solutions</h1>
    <p>Asphalt Fusion Technology</p>
    <p>More Eco-Friendly & Carbon Friendly</p>
    <a href="#video-demo" class="button">Find Out More</a>
</header>

<section id="video-demo" class="main-content">
    <h2>Let Us Help You Protect Your Investment in Asphalt Repairs</h2>
<div class="video-container">
<!-- Replace 'your_video_url' with the link to your actual video -->
<iframe src="your_video_url" frameborder="0" allowfullscreen></iframe>
</div>
<p>Infrared Heat Repair has 3 Major Advantages Vs. Conventional Repair Methods:</p>
<ul>
<li>Thermo-Bonding creates a seamless repair between the New & Existing Asphalt</li>
<li>Infrared repair is less disturbing to businesses & residences vs industry practices</li>
<li>Eco-Friendly Requiring minimal waste removal; less new asphalt; less oils & fuels</li>
</ul>
<a href="#services" class="button">Find Out More</a>

</section>
<section style="background-image: url('https://i.pinimg.com/originals/3d/22/2f/3d222fb89fa618dc976e51ff9bc4c158.jpg'); text-align: center; padding: 50px 20px; color: #fff;">
    <h2>Ask For Your Asphalt Assessment Today.</h2>
    <p>We Identify Repairs Into 3 Categories of Importance</p>
    <ul>
        <li>Most Urgent Repairs</li>
        <li>Important Repairs</li>
        <li>Future Repairs</li>
    </ul>
    <p>Offering a Budget Strategy for Today & Tomorrow</p>
    <a href="#contact" class="button">Get a Quote</a>
</section>
</body>
</html>
