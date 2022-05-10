<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?= base_url()?>assets/client/images/blognameasd092u123.jpg);">
	<h2 class="l-text2 t-center">
		Blog
	</h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-60">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-9 p-b-75">
				<div class="p-r-50 p-r-0-lg">
					<!-- item blog -->
					<?php foreach ($blog as $key => $data) {
						$dateMasuk = new DateTime($data->date);
					?>
						<div class="item-blog p-b-80">
							<a href="#" class="item-blog-img pos-relative dis-block hov-img-zoom">
								<img src="<?= base_url() ?>assets/img/uploads/artikel/<?= $data->gambar_name?>" alt="IMG-BLOG">

								<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
									<?= $dateMasuk->format('d F Y') ?>
								</span>
							</a>

							<div class="item-blog-txt p-t-33">
								<h4 class="p-b-11">
									<a href="#" class="m-text24">
										<?= $data->judul ?>
									</a>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By Admin
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										<?= $data->nama ?>
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										8 Comments
									</span>
								</div>

								<!-- view limit char konten -->
								<?= character_limiter($data->konten, 250) ?>
								<br>

								<a href="blog-detail.html" class="s-text20">
									Continue Reading
									<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					<?php } ?>

				</div>

				<!-- Pagination -->
				<div class="pagination flex-m flex-w p-r-50">
					<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
					<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
				</div>
			</div>

			<div class="col-md-4 col-lg-3 p-b-75">
				<div class="rightbar">
					<!-- Search -->
					<div class="pos-relative bo11 of-hidden">
						<input class="s-text7 size16 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search">

						<button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
							<i class="fs-13 fa fa-search" aria-hidden="true"></i>
						</button>
					</div>

					<!-- Categories -->
					<h4 class="m-text23 p-t-56 p-b-34">
						Kategori Artikel
					</h4>

					<ul>
						<?php foreach ($kartikel as $key => $data) { ?>
							<li class="p-t-6 p-b-8 bo6">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									<?= $data->nama?>
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
								<img src="images/item-16.jpg" alt="IMG-PRODUCT">
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
								<img src="images/item-17.jpg" alt="IMG-PRODUCT">
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
								<img src="images/item-08.jpg" alt="IMG-PRODUCT">
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
								<img src="images/item-03.jpg" alt="IMG-PRODUCT">
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
								<img src="images/item-05.jpg" alt="IMG-PRODUCT">
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



				</div>
			</div>
		</div>
	</div>
	</div>
</section>