<div>
    <?php require('views/partials/html-head.php'); ?>

    <main id="contact">
        <!-- BANNER -->
        <section id="banner"></section>

        <!-- CONTACT FORM -->
        <section class="form">
            <h1 class="contact-title">Contact Us</h1>

            <form method="post" id="queryForm">
                <div class="fieldinput">
                    <label for="name">Name</label>:
                    <input type="text" id="name-input" name="name" placeholder="Your Name" autocomplete="off" required>
                </div>

                <div class="fieldinput">
                    <label for="contact">Contact</label>:
                    <input type="tel" id="mobile-input" name="contact" placeholder="Your Contact Number" autocomplete="off" required>
                </div>

                <div class="fieldinput">
                    <label for="dob">Date of Birth</label>:
                    <input type="date" id="dob-input" name="dob" autocomplete="off" required>
                </div>

                <div class="fieldinput">
                    <label for="gender">Gender</label>:
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>

                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                </div>

                <div class="fieldinput textarea">
                    <label for="query">Your Query</label>:
                    <textarea id="query" name="message" placeholder="Type your query" autocomplete="off"></textarea>
                </div>

                <button type="submit">Submit Query</button>
            </form>

            <p class="response-msg">
                <span class="success" style="display:none;">
                    <img src="public/images/icons/success.svg" alt="">
                    <span>Your query is successfully submitted to us.</span>
                </span>
                <span class="error" style="display:none;">
                    <img src="public/images/icons/error.svg" alt="">
                    <span id="error-msg"></span>
                </span>
            </p>

            <!-- Link to the external JavaScript file -->
            <script src="form-validation.js"></script>


            <p class="response-msg">
                <span class="success">
                    <img src="public/images/icons/success.svg" alt="">
                    <span>Your query is successfully submitted to us.</span>
                </span>
                <span class="error">
                    <img src="public/images/icons/error.svg" alt="">
                    <span id="error-msg"></span>
                </span>
            </p>

        </section>
    </main>

    <?php require('views/partials/html-foot.php'); ?>
</div>