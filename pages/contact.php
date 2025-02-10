<section class="contact-first-section">
    <div class="container">
        <h2 class="section-heading text-center mb-5">We’d love to hear from you</h2>
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-first-info">
                    <div class="contact-first-block">
                        <h3>Phone</h3>
                        <p>+91 90 7151 7777</p>
                        <p>+91 98 8074 6117</p>
                    </div>
                    <div class="contact-first-block">
                        <h3>Email</h3>
                        <p>info@prismhue.in</p>
                        <p>Hello@prismhue.in</p>
                    </div>
                    <div class="contact-first-block">
                        <h3>Address</h3>
                        <h4>Corporate Office</h4>
                        <p>#86, 1st Main Road, Opp. DTDC off,<br> Chamrajpet, Bangalore - 560 018</p>
                    </div>
                    <div class="contact-first-block">
                        <h4>Manufacture Unit</h4>
                        <p>1st Main Road, 2nd 'A' Cross Road,<br> Domlur Layout, Bengaluru - 71</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="contact-first-form">
                    <form id="contactForm">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="firstName">First Name</label>
                                <input type="text" name="firstName" id="firstName" class="contact-first-input" required>
                                <div class="error-msg text-danger"></div>
                            </div>
                            <div class="col-md-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" name="lastName" id="lastName" class="contact-first-input" required>
                                <div class="error-msg text-danger"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="contact-first-input" required>
                            <div class="error-msg text-danger"></div>
                        </div>

                        <div class="mb-3">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" class="contact-first-input" rows="5" required></textarea>
                            <div class="error-msg text-danger"></div>
                        </div>

                        <div class="text-center">
                            <button type="submit" id="submitBtn" class="contact-first-submit">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-map-section">
    <div class="container">
        <h2 class="section-heading text-center mb-5">Google Map Location</h2>
        <div class="map-section-wrapper">
            <!-- Moved map buttons inside the wrapper -->
            <div class="map-buttons mb-4">
                <button class="map-toggle-btn active" data-location="corporate">
                    Corporate Office
                </button>
                <button class="map-toggle-btn" data-location="manufacture">
                    Manufacture Unit
                </button>
            </div>
            
            <div class="map-container">
                <div class="map-wrapper">
                    <!-- Corporate Office Map -->
                    <div class="map-frame active" id="corporate-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124421.77123797094!2d77.42567401640623!3d12.960308600000017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15f895555453%3A0x29ffb6b215d77546!2sPrismhue%20Chamrajpet!5e0!3m2!1sen!2sin!4v1736158895917!5m2!1sen!2sin" 
                                width="100%" 
                                height="450" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    
                    <!-- Manufacture Unit Map -->
                    <div class="map-frame" id="manufacture-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124424.5602967269!2d77.58034409104427!3d12.954726645258917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae141a29382577%3A0xcbf5c6f2da4665e8!2sPrismhue%20Domlur!5e0!3m2!1sen!2sin!4v1736158829872!5m2!1sen!2sin" 
                                width="100%" 
                                height="450" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $("#contactForm").on("submit", function (e) {
        e.preventDefault();

        // Regex Validation
        var nameRegex = /^[A-Za-z\s]+$/;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        var firstName = $("#firstName").val().trim();
        var lastName = $("#lastName").val().trim();
        var email = $("#email").val().trim();
        var message = $("#message").val().trim();

        var isValid = true;
        $(".error-msg").text(""); // Clear error messages

        if (!nameRegex.test(firstName)) {
            $("#firstName").next(".error-msg").text("Only letters are allowed.");
            isValid = false;
        }

        if (!nameRegex.test(lastName)) {
            $("#lastName").next(".error-msg").text("Only letters are allowed.");
            isValid = false;
        }

        if (!emailRegex.test(email)) {
            $("#email").next(".error-msg").text("Enter a valid email.");
            isValid = false;
        }

        if (message.length < 3) {
            $("#message").next(".error-msg").text("Message must be at least 3 characters.");
            isValid = false;
        }

        if (!isValid) return;

        // Disable Button with Light Background
        $("#submitBtn").prop("disabled", true).html("Submitting...").css({
            "background-color": "#e0e0e0",
            "color": "#888",
            "cursor": "not-allowed"
        });

        // AJAX Request
        $.ajax({
            url: "contact-process",
            type: "POST",
            data: { firstName, lastName, email, message },
            success: function (response) {
                alert("Your message has been successfully sent. We'll get back to you soon!");
                $("#contactForm")[0].reset();
                $("#submitBtn").prop("disabled", false).html("Submit").css({
                    "background-color": "",
                    "color": "",
                    "cursor": ""
                });
            },
            error: function () {
                alert("Error sending message. Try again.");
                $("#submitBtn").prop("disabled", false).html("Submit").css({
                    "background-color": "",
                    "color": "",
                    "cursor": ""
                });
            }
        });
    });
});
</script>
