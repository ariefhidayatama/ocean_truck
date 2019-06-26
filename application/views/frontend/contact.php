<div role="main" class="main">

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><?=$title?></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1><?=$title?></h1>
            </div>
        </div>
    </div>
</section>

<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
<div id="googlemaps" class="google-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7934.055158160994!2d106.72335022190246!3d-6.126991032254649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1d5221d340c9%3A0x86ba343b7213c212!2sPT+Indonesia+Ocean+Truck!5e0!3m2!1sid!2sid!4v1559455383213!5m2!1sid!2sid" width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="container">

    <div class="row">
        <div class="col-md-6">

            <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                <strong>Success!</strong> Your message has been sent to us.
            </div>

            <div class="alert alert-danger hidden mt-lg" id="contactError">
                <strong>Error!</strong> There was an error sending your message.
                <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
            </div>

            <h2 class="mb-sm mt-sm"><strong>Contact</strong> Us</h2>
            <form id="contactForm" action="php/contact-form.php" method="POST">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Your name *</label>
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="col-md-6">
                            <label>Your email address *</label>
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Subject</label>
                            <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Message *</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <p><?= $artikel->isi ?></p>
        </div>

    </div>

</div>

</div>