<?php $title = 'Crack Chaser Repair Solutions'; ?>
<?php $currentPage = 'Get A Quote'; ?>

        <?php include('head.php'); ?>
        <?php include('navbar.php'); ?>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <style>
            .responsive {
                max-width: 100%;
                height: auto;
                object-fit: scale-down;
                margin: auto;
            }
        </style>
        <div class="content">
            <p class="fullBox" style="padding-bottom: 20px; margin: 0 auto; text-align: center; float:none;">
            Thanks for your interest! We should get back to you fairly shortly after you send a message.
                <form method="post" action="getaquote.php" style="text-align: center;">
                    <div id="div1">
                        <p>Email</p>
                        <textarea name="email"></textarea>
                        <!-- <textarea name="email"   placeholder="Please enter your message"></textarea> -->
                    </div>
                    <div id="div1">
                        <p>Phone Number</p>
                        <textarea name="number"></textarea>
                        <!-- <textarea name="message-area"   placeholder="Please enter your message"></textarea> -->
                    </div>
                    <div id="div1">
                        <p>Message</p>
                        <textarea name="textarea"></textarea>
                        <!-- <textarea name="message-area" placeholder="Type your message here"></textarea> -->
                    </div>
                    <div id="div1">
                        <!-- <p>Message</p> -->
                        <input style="align-content: center;" type="submit" name="submit" >
                    </div>
                </form>
            </p>
        </div>
    </body>
</html>