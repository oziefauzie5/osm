<?php
include "./template/header.php";
?>


<main class="main">
    <div class="page-title dark-background" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Kontak Kami</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="contact" class="contact section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <div><span>Check Our</span> <span class="description-title">Contact</span></div>
        </div>

        <div class="container" data-aos="fade" data-aos-delay="100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.70460514536634!2d106.75541003706965!3d-6.612878624752541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c56c4bbe2909%3A0xe8fc3a8a750a20b9!2sJl.%20Gn.%20Tampomas%20Blok%20D5%20No.6%2C%20Pagelaran%2C%20Kec.%20Ciomas%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat%2016610!5e0!3m2!1sid!2sid!4v1728945292618!5m2!1sid!2sid" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>Perum. Alam Tirta Lestari Jl. Tampomas Blok D05 no 06 Bogor, Jawa Barat</p>
                        </div>
                    </div>

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>0251-2027233</p>
                        </div>
                    </div>

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>info@osm.net.id</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8">
                    <div action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

</main>
<?php
include "./template/footer.php";
?>