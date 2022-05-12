<!-- content page -->
<section class="bgwhite p-t-60 p-b-25">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 p-b-80">
                <div class="p-r-50 p-r-0-lg">
                    <div class="p-b-40">
                        <div class="blog-detail-img wrap-pic-w">
                            <img src="<?= base_url() ?>assets/img/uploads/artikel/<?= $posting->gambar_name ?>" alt="IMG-BLOG">
                        </div>

                        <div class="blog-detail-txt p-t-33">
                            <h4 class="p-b-11 m-text24">
                                <?= $posting->judul ?>
                            </h4>

                            <div class="s-text8 flex-w flex-m p-b-21">
                                <span>
                                    By Admin
                                    <span class="m-l-3 m-r-6">|</span>
                                </span>

                                <span>
                                    <?php
                                    $dateMasuk = new DateTime($posting->date);
                                    ?>
                                    <?= $dateMasuk->format('d F Y') ?>
                                    <span class="m-l-3 m-r-6">|</span>
                                </span>

                                <span>
                                    <?= $posting->nama ?>
                                </span>

                                <!-- <span>
										8 Comments
									</span> -->
                            </div>

                            <!-- <p class="p-b-25">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.
								</p>

								<p class="p-b-25">
									Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.
								</p> -->
                            <?= $posting->konten ?>
                        </div>

                        
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3 p-b-80">
                <div class="rightbar">
                    <!-- Categories -->
                    <h4 class="m-text23 p-t-56 p-b-34">
                        Categories
                    </h4>

                    <ul>
                        <?php foreach ($kartikel as $key => $data) { ?>
                            <li class="p-t-6 p-b-8 bo6">
                                <a href="#" class="s-text13 p-t-5 p-b-5">
                                    <?= $data->nama ?>
                                </a>
                            </li>
                        <?php } ?>

                    </ul>


                    <!-- Featured Products -->
                    <h4 class="m-text23 p-t-65 p-b-34">
                        Featured Products
                    </h4>

                    <ul class="bgwhite">
                        <li class="flex-w p-b-20">
                            <a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                <img src="<?= base_url() ?>assets/client/images/item-16.jpg" alt="IMG-PRODUCT">
                            </a>

                            <div class="w-size23 p-t-5">
                                <a href="product-detail.html" class="s-text20">
                                    White Shirt With Pleat Detail Back
                                </a>

                                <span class="dis-block s-text17 p-t-6">
                                    $19.00
                                </span>
                            </div>
                        </li>

                        <li class="flex-w p-b-20">
                            <a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                <img src="<?= base_url() ?>assets/client/images/item-17.jpg" alt="IMG-PRODUCT">
                            </a>

                            <div class="w-size23 p-t-5">
                                <a href="product-detail.html" class="s-text20">
                                    Converse All Star Hi Black Canvas
                                </a>

                                <span class="dis-block s-text17 p-t-6">
                                    $39.00
                                </span>
                            </div>
                        </li>

                        <li class="flex-w p-b-20">
                            <a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                <img src="<?= base_url() ?>assets/client/images/item-08.jpg" alt="IMG-PRODUCT">
                            </a>

                            <div class="w-size23 p-t-5">
                                <a href="product-detail.html" class="s-text20">
                                    Nixon Porter Leather Watch In Tan
                                </a>

                                <span class="dis-block s-text17 p-t-6">
                                    $17.00
                                </span>
                            </div>
                        </li>

                        <li class="flex-w p-b-20">
                            <a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                <img src="<?= base_url() ?>assets/client/images/item-03.jpg" alt="IMG-PRODUCT">
                            </a>

                            <div class="w-size23 p-t-5">
                                <a href="product-detail.html" class="s-text20">
                                    Denim jacket blue
                                </a>

                                <span class="dis-block s-text17 p-t-6">
                                    $39.00
                                </span>
                            </div>
                        </li>

                        <li class="flex-w p-b-20">
                            <a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                <img src="<?= base_url() ?>assets/client/images/item-05.jpg" alt="IMG-PRODUCT">
                            </a>

                            <div class="w-size23 p-t-5">
                                <a href="product-detail.html" class="s-text20">
                                    Nixon Porter Leather Watch In Tan
                                </a>

                                <span class="dis-block s-text17 p-t-6">
                                    $17.00
                                </span>
                            </div>
                        </li>
                    </ul>

                    <!-- Archive
                    <h4 class="m-text23 p-t-50 p-b-16">
                        Archive
                    </h4>

                    <ul>
                        <li class="flex-sb-m">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                July 2018
                            </a>

                            <span class="s-text13">
                                (9)
                            </span>
                        </li>

                        <li class="flex-sb-m">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                June 2018
                            </a>

                            <span class="s-text13">
                                (39)
                            </span>
                        </li>

                        <li class="flex-sb-m">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                May 2018
                            </a>

                            <span class="s-text13">
                                (29)
                            </span>
                        </li>

                        <li class="flex-sb-m">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                April 2018
                            </a>

                            <span class="s-text13">
                                (35)
                            </span>
                        </li>

                        <li class="flex-sb-m">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                March 2018
                            </a>

                            <span class="s-text13">
                                (22)
                            </span>
                        </li>

                        <li class="flex-sb-m">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                February 2018
                            </a>

                            <span class="s-text13">
                                (32)
                            </span>
                        </li>

                        <li class="flex-sb-m">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                January 2018
                            </a>

                            <span class="s-text13">
                                (21)
                            </span>
                        </li>

                        <li class="flex-sb-m">
                            <a href="#" class="s-text13 p-t-5 p-b-5">
                                December 2017
                            </a>

                            <span class="s-text13">
                                (26)
                            </span>
                        </li>
                    </ul> -->
                    
                </div>
            </div>
        </div>
    </div>
</section>