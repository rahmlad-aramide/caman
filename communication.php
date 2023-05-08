<?php
$title = 'Communication';
 include "header.php" ;
include("inner_banner.php");
?>
<main>
    <div class="container mt-5">
        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.2940090864654!2d3.3296593138274844!3d6.610343395219701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b91788483f08b%3A0xd22dcf84b5af837b!2s28%20Henry%20Carr%20St%2C%20Oba%20Akran%20102212%2C%20Lagos!5e0!3m2!1sen!2sng!4v1671502883936!5m2!1sen!2sng"
                width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>


        </div>
        <br><br><br>
        <div class="row">
            <div class="col-md-4">
                <h5 class="mb-3 style-title font-weight-bold">OUR CONTACT INFORMATION</h5>
                <p class="contact_detail"><i class="far fa-map-marker-alt"></i> 28 HENRY CARR STREET, IKEJA,
                    INDUSTRIAL ESTATE, P.M.B. 21253, IKEJA, LAGOS, NIGERIA</p>
                <p class="contact_detail"><i class="far fa-phone"></i> <a href="tel:+2348036065258"> +234 (0) 803 606 5258 </a></p>
                <p class="contact_detail"><i class="far fa-envelope-open"></i> <a href="mailto:info@caman.com"> info@caman.com </a></p>
            </div>
            <div class="col-md-8">
                <h5 class="mb-3 style-title font-weight-bold">CONTACT FORM</h5>
                <input type="text" placeholder="Name" class="form-control mb-3">
                <input type="text" placeholder="Phone" class="form-control mb-3">
                <textarea name="" id="" cols="30" rows="10" placeholder="Message" class="form-control mb-3"></textarea>
                <input type="submit" class="btn btn-warning mb-3">
            </div>

        </div>
        <br><br>
    </div>
</main>

<?php include "footer.php" ?>