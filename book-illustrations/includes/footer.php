<footer class="bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <a href="./" class="f-logo">
                    <img src="assets/images/logo.webp" alt="" loading="lazy" width="100px" height="100px">
                </a>

            </div>
            <div class="col-lg-4 col-md-4">
                <ul>
                    <li>
                        <span class="hdng">Address</span>
                        <p>
                            <?php echo $address;?>
                        </p>
                    </li>
                    <li>
                        <span class="hdng">Phone</span>
                        <a href="tel:<?php echo $phone;?>"><?php echo $phone;?></a>
                    </li>
                    <li>
                        <span class="hdng">Email</span>
                        <a href="tel:<?php echo $email;?>"><?php echo $email;?></a>
                    </li>

                    <li>
                    <span class="hdng">Quick Links</span>
                        <a href="terms.php">Terms & Conditions</a>
                    
                        <a href="privacy-policy.php">Privacy Policy</a>
                    </li>

                </ul>
            </div>
            <div class="col-lg-4 col-md-8">
                <form action="" class="footer-form">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <h3>Get In Touch</h3>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" placeholder="Enter your Name" required>
                        </div>
                        <div class="col-lg-6">
                            <input type="email" placeholder="Enter your Email" required>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Enter your Number" required>
                        </div>
                        <div class="col-lg-12">
                            <textarea name="" id="" rows="4" required placeholder="Enter your Message"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>