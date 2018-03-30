<!DOCTYPE html>
<html>
<head>
    <?php $title = 'Contact'; include 'inc/head.php'; ?>
</head>
<body>
    <div class="container">
        <?php include 'inc/header.php'; ?>

        <main>
            <?php if ( $_GET['send'] == true ) : ?>
            
            <div class="success">
                <h4>Message Sent</h4>
                <p>You'll hear back.</p>
            </div>
            
            <?php elseif ( $_GET['send'] == false ) : ?>
            
            <div class="failure">
                <h4>Message Failed to Send</h4>
                <p>Sorry, please try again.</p>
            </div>
            
            <?php endif; ?>

            <h2>Contact Us</h2>
            
            <p>Email us using the form below. You can also reach us at <span class="sc">(314) 351-0666</span>.</p>

            <form name="contact_form" method="post" action="/contact-send.php">
                <p>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </p>

                <p>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </p>

                <p>
                    <label for="phone">Telephone</label>
                    <input type="tel" name="telephone" id="telephone">
                </p>

                <p>
                    <label for="message">Message</label>
                    <textarea name="message" id="message"></textarea>
                </p>

                <p>
                    <input type="submit" name="submit" id="submit" value="Send Message">
                </p>
            </form>
        </main>

        <?php include 'inc/footer.php'; ?>
    </div>
</body>
</html>