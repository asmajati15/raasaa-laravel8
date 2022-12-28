<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Raasaa Resto</title>
        <meta name="description" content="A responsive folded flyer-like restaurant menu with some 3D" />
        <meta name="keywords" content="css3, perspective, 3d, jquery, transform3d, responsive, template, restaurant, menu, leaflet, folded, flyer, concept" />
        <meta name="author" content="Codrops" />
        {{-- <link rel="shortcut icon" href="../favicon.ico">  --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('3dmenu/css/style.css') }}" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:300,500|Arvo:700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="{{ asset('3dmenu/js/modernizr.custom.79639.js') }}"></script> 
		<!--[if lte IE 8]><style>.support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
        <div class="container">
			
			<section class="main">

				<div id="rm-container" class="rm-container">

					<div class="rm-wrapper">

						<div class="rm-cover">

							<div class="rm-front">
								<div class="rm-content">

									{{-- <div class="rm-logo"> --}}
										<img class="rm-logo" src="{{ asset('img/carousel-img0.jpg') }}" alt="">
									{{-- </div> --}}
									<h2>Raasaa Resto</h2>
									<h3>Fine Dining &amp; Gourmet Takeaway</h3>

									<a href="#" class="rm-button-open">View the Menu</a>
									<div class="rm-info">
										<p>
										<strong>Raasaa Resto Kebun Raya</strong><br>
										Jl. Ir. H. Juanda No.13<br>
										Paledang, Bogor Tengah, Bogor<br>
										<strong>Phone</strong> 626.511.1170<br>
										<strong>Fax</strong> 626.992.1020</p>
									</div>

								</div><!-- /rm-content -->
							</div><!-- /rm-front -->

							<div class="rm-back">
								<div class="rm-content" id="left">
									<h4>Drinks & Beverages</h4>
									<dl>
										@foreach ($menu as $menu)
      									@if ($menu->types->getAttribute('filters_id') == '2')
											@if ($menu->availabilities->getAttribute('id') == '1')
												<dt><a href="#" class="rm-viewdetails" data-thumb="{{ asset('storage/' . $menu->gambar) }}" data-harga="{{ $menu->harga }}" data-kategori="{{ $menu->types->nama }}" data-tidak="" data-overlay="">{{ $menu->nama }}</a></dt>
											@else
												<dt><a href="#" class="rm-viewdetails-not" data-thumb="{{ asset('storage/' . $menu->gambar) }}" data-harga="{{ $menu->harga }}" data-kategori="{{ $menu->types->nama }}" data-tidak="Menu Sedang Tidak Tersedia" data-overlay="overlay">{{ $menu->nama }}</a></dt>
											@endif
											<dd>{{ $menu->deskripsi }}</dd>
										@endif
										@endforeach
									</dl>
								</div><!-- /rm-content -->
								<div class="rm-overlay"></div>

							</div><!-- /rm-back -->

						</div><!-- /rm-cover -->

						<div class="rm-middle">
							<div class="rm-inner">
								<div class="rm-content" id="middle">
									<h4>Main Courses</h4>
									<dl>
										@foreach ($menu1 as $menu)
      									@if ($menu->types->getAttribute('filters_id') == '1')
										  	@if ($menu->availabilities->getAttribute('id') == '1')
												<dt><a href="#" class="rm-viewdetails" data-thumb="{{ asset('storage/' . $menu->gambar) }}" data-harga="{{ $menu->harga }}" data-kategori="{{ $menu->types->nama }}" data-tidak="" data-overlay="">{{ $menu->nama }}</a></dt>
											@else
												<dt><a href="#" class="rm-viewdetails-not" data-thumb="{{ asset('storage/' . $menu->gambar) }}" data-harga="{{ $menu->harga }}" data-kategori="{{ $menu->types->nama }}" data-tidak="Menu Sedang Tidak Tersedia" data-overlay="overlay">{{ $menu->nama }}</a></dt>
											@endif
											<dd>{{ $menu->deskripsi }}</dd>
										@endif
										@endforeach
									</dl>
								</div><!-- /rm-content -->
								<div class="rm-overlay"></div>
							</div><!-- /rm-inner -->
						</div><!-- /rm-middle -->

						<div class="rm-right">

							<div class="rm-front">
								
							</div>

							<div class="rm-back">
								<span class="rm-close">Close</span>
								<div class="rm-content" id="right">
									<h4>Desserts</h4>
									<dl>
										@foreach ($menu2 as $menu)
      									@if ($menu->types->getAttribute('filters_id') == '3')
										  	@if ($menu->availabilities->getAttribute('id') == '1')
												<dt><a href="#" class="rm-viewdetails" data-thumb="{{ asset('storage/' . $menu->gambar) }}" data-harga="{{ $menu->harga }}" data-kategori="{{ $menu->types->nama }}" data-tidak="" data-overlay="">{{ $menu->nama }}</a></dt>
											@else
												<dt><a href="#" class="rm-viewdetails-not" data-thumb="{{ asset('storage/' . $menu->gambar) }}" data-harga="{{ $menu->harga }}" data-kategori="{{ $menu->types->nama }}" data-tidak="Menu Sedang Tidak Tersedia" data-overlay="overlay">{{ $menu->nama }}</a></dt>
											@endif
											<dd>{{ $menu->deskripsi }}</dd>
										@endif
										@endforeach
									{{-- <div class="rm-order">
										<p><strong>Would you like us to cater your event?</strong> Call us &amp; we'll help you find a venue and organize the event: <strong>626.511.1170</strong></p>
									</div> --}}
									</dl>
								</div><!-- /rm-content -->
							</div><!-- /rm-back -->

						</div><!-- /rm-right -->
					</div><!-- /rm-wrapper -->

				</div><!-- /rm-container -->

			</section>
			
        </div>
		<!-- jQuery if needed -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('3dmenu/js/menu.js') }}"></script>
		<script type="text/javascript">
			$(function() {

				Menu.init();
			
			});
		</script>
    </body>
</html>
