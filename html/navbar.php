<header>
    <div id="navbar">
        <a href="index.php" <?php if ($currentPage === 'Home') {echo 'class="active"';} ?>>Home</a></li>
        <a href="about.php" <?php if ($currentPage === 'About') {echo 'class="active"';} ?>>About</a></li>
        <a href="services.php" <?php if ($currentPage === 'Services') {echo 'class="active"';} ?>>Services</a></li>
        <a href="contact.php" <?php if ($currentPage === 'Contsact') {echo 'class="active"';} ?>>Contact</a></li>
        <!-- <a href="getaquote.php" <?php if ($currentPage === 'Get A Quote') {echo 'class="active"';} ?>>Get A Quote</a></li> -->
        <a href="beforeandafter.php" <?php if ($currentPage === 'Before & After') {echo 'class="active"';} ?>>Before & After</a></li>
        <div class="navbar-title">Crack Chaser Repair Solutions</div>
        
    </div>
    <script src="navbar.js"></script>
</header>
<body>