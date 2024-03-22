<?php $title = 'Crack Chaser Repair Solutions'; ?>
<?php $currentPage = 'Services'; ?>

<?php include('head.php'); ?>
<?php include('navbar.php'); ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    .service-section {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
    }

    .service-section:nth-child(even) {
        flex-direction: row-reverse;
    }

    .service-image {
        flex-basis: 50%;
        max-width: 50%;
        text-align: center;
    }

    .service-image img {
        max-width: 100%;
        border-radius: 5px;
    }

    .service-description {
        flex-basis: 50%;
        max-width: 50%;
        font-size: 1.1em;
        padding: 20px;
    }
</style>

<div class="content">
    <div class="service-section">
        <div class="service-description">
            High-quality epoxy floor coatings for a durable, resilient, and attractive finish.
        </div>
        <div class="service-image">
            <img src="./images/Backgrounds/Slideshow/Epoxy2.jpg" alt="Epoxy Floor Coatings">
        </div>
    </div>
    <!-- Repeat for each service, the CSS will handle the image position alternating -->
    <div class="service-section">
        <div class="service-description">
            Comprehensive drain repair services to prevent water damage and maintain proper drainage.
        </div>
        <div class="service-image">
            <img src="./images/services/drain_repair.jpg" alt="Drain Repair">
        </div>
    </div>

    <!-- Add other services in the same format -->
</div>

</html>
