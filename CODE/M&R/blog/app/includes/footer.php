<?php

require_once 'app/database/message.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate form data
    if (empty($email) || empty($message)) {
        $error_message = "Please fill in all fields.";
    } else {
        try {
            // Insert the new message into the database
            $insert_message = $conn->prepare("INSERT INTO `messages` (email, message) VALUES (?, ?)");
            $insert_message->execute([$email, $message]);

            $success_message = 'Message sent successfully!';
        } catch (PDOException $e) {
            $error_message = 'Error inserting message: ' . $e->getMessage();
        }
    }
}
?>

<!-- footer -->
<div class="footer">
    <div class="footer-content">
        <div class="footer-section about">
            <h1 class="logo-text"><span>Follow</span>Diet</h1>
            <p>
                Our website offers a diverse selection of healthy meals and detox diet options to support your well-being.
                Explore our website for delicious and nutritious meals that are tailored to your dietary preferences and goals.
            </p>
            <div class="contact">
                <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
                <span><i class="fas fa-envelope"></i> &nbsp; info@diet.com</span>
            </div>
            <div class="socials">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <div class="footer-section links">
            <h2>Quick Links</h2>
            <br>
            <ul>
                <a href="#">
                    <li>Events</li>
                </a>
                <a href="#">
                    <li>Team</li>
                </a>
                <a href="#">
                    <li>Mentores</li>
                </a>
                <a href="#">
                    <li>Gallery</li>
                </a>
                <a href="#">
                    <li>Terms and Conditions</li>
                </a>
            </ul>
        </div>

        <div class="footer-section contact-form">
            <h2>Contact us</h2>
            <br>
            <form action="index.php" method="post">
                <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
                <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                <button type="submit" class="btn btn-big contact-btn">
                    <i class="fas fa-envelope"></i>
                    Send
                </button>
            </form>
            <?php if (isset($error_message)): ?>
                <p><?php echo $error_message; ?></p>
            <?php endif; ?>
            <?php if (isset($success_message)): ?>
                <p><?php echo $success_message; ?></p>
            <?php endif; ?>
        </div>
    </div>

    <div class="footer-bottom">
        &copy; codinG.com | Designed by M&R
    </div>
</div>
<!-- // footer -->
