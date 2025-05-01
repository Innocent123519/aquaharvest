<?php include 'header.php'; ?>

<section class="section" id="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <form action="send_contact.php" method="POST" class="contact-form">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
        <div class="contact-info">
            <p><strong>Email:</strong> contact@aquaharvest.com</p>
            <p><strong>Phone:</strong> +255 784 839 831</p>
            <p><strong>Location:</strong> Morogoro, Tanzania</p>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
