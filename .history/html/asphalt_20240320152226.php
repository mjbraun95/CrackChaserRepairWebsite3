<?php $currentPage = 'Home'; ?>

<?php include('head.php'); ?>
<?php include('navbar.php'); ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<style>
    /* General page styles */
    body {
        font-family: Arial, sans-serif;
    }

    .header-image {
        max-width: 100%;
        height: auto;
    }

    .section {
        text-align: center;
        padding: 50px 20px;
    }

    .section-heading {
        font-size: 2.5em;
        color: #fff;
        background-color: #222;
        padding: 20px;
        margin-bottom: 20px;
    }

    .video-container {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        max-width: 100%;
        background: #000;
        margin: 20px 0;
    }

    .video-container iframe {
        position: absolute;
        top:0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1.5em;
        color: #fff;
        background-color: #f60;
        border: none;
        text-decoration: none;
        cursor: pointer;
        margin: 20px 0;
    }

    .button:hover {
        background-color: #e55d0e;
    }

    /* Responsive design for different devices */
    @media (max-width: 768px) {
        .section-heading {
            font-size: 2em;
        }

        .button {
            font-size: 1.2em;
        }
    }
</style>

<body>

<div class="section" style="background-image: url('https://www.pavementgroup.com/images/products/uep-1357.jpg');">
    <h1 class="section-heading">Asphalt Fusion Technology</h1>
    <p>More Eco-Friendly & Carbon Friendly</p>
    <a href="#learn-more" class="button">Find Out More</a>
</div>

<div class="section" id="learn-more">
    <h2>Let Us Help You Protect Your Investment in Asphalt Repairs</h2>
    <div class="video-container">
        <iframe src="your_video_link" frameborder="0" allowfullscreen></iframe>
    </div>
    <p>Infrared Heat Repair has 3 Major Advantages Vs. Conventional Repair Methods:</p>
    <ul>
        <li>Thermo-Bonding creates a seamless repair between the New & Existing Asphalt</li>
        <li>Infrared repair is less disturbing to businesses & residences vs industry practices</li>
        <li>Eco-Friendly Requiring minimal waist removal; less new asphalt; less oils & fuels</li>
    </ul>
    <a href="#services" class="button">Find Out More</a>
</div>

<div class="section" style="background-image: url('https://i.pinimg.com/originals/3d/22/2f/3d222fb89fa618dc976e51ff9bc4c158.jpg');">
    <h2 class="section-heading">Ask For Your Asphalt Assessment Today.</h2>
    <p>We Identify Repairs Into 3 Categories of Importance</p>
    <ul>
        <li>Most Urgent Repairs</li>
        <li>Important Repairs</li>
        <li>Future Repairs</li>
    </ul>
    <p>Offering a Budget Strategy for Today & Tomorrow</p>
</div>

</body>
</html>
