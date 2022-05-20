<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
            <div class="contact-overly"></div>
            <div class="container ">
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-mobile"></i>
                                <p>
                                    Call: 085 649 888 272<br>
                                    <span>Everyday (7am-11  pm)</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-instagram"></i>
                                <p>
                                    Instagram: @koopen_klojen
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    Email: admin@kopikoopen.com<br>
                                    <span>Web: www.kopikoopen.com</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div><br><br>
                <div class="row">

                    <!-- Start Google Map -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- Start Map -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.41339654824!2d112.62956451432827!3d-7.956159981480306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629b7da3ba6bb:0xb0837464f66cc0bc!2sKofluck Malang!5e0!3m2!1sid!2sid!4v1595535439929!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

                        <!-- End Map -->
                    </div>
                    <!-- End Google Map -->

                    <!-- Start  contact -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form contact-form">
                            <form action="<?= base_url('contact/send_message'); ?>" method="post" role="form" class="php-email-form">

                                <div class="bo4 of-hidden size15 m-b-20">
                                    <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Full Name">
                                </div>

                                <div class="bo4 of-hidden size15 m-b-20">
                                    <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone" placeholder="Phone Number">
                                </div>

                                <div class="bo4 of-hidden size15 m-b-20">
                                    <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
                                </div>

                                <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Message"></textarea>

                                <div class="w-size25">
                                    <!-- Button -->
                                    <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                                        Send
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Left contact -->
                </div>
            </div>
        </div>
    </div><!-- End Contact Section -->
</section>