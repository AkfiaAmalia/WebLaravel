@extends('template')
@section('index')
	<section id="fh5co-home" data-section="home" style="background-image: url(images/poto1.jpg);" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h1 class="animate-box"><span class="big">Portfolio</span> <br><span>of the collage student</span> <br><span class="medium">Akfia Amalia</span> 
							</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="fh5co-services" data-section="About">
		<div class="fh5co-services">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center">
						<div class="box-services">
							<div class="icon animate-box">
								<span> <i class="icon-people"></i></span>
							</div>
							<div class="fh5co-post animate-box">
								<h3>3 Saudara</h3>
								<p>Saya anak ke - tiga dari 3 saudara</p>
							</div>
						</div>

						<div class="box-services">
							<div class="icon animate-box">
								<span><i class="icon-screen-desktop"></i></i></span>
							</div>
							<div class="fh5co-post animate-box">
								<h3>Keahlian</h3>
								<p>Database, Android.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center">
						<div class="box-services">
							<div class="icon animate-box">
								<span><i class="icon-trophy"></i></span>
							</div>
							<div class="fh5co-post animate-box">
								<h3>Pencapaian</h3>
								<p>soon</p>
							</div>
						</div>

						
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="fh5co-explore" data-section="Education">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="animate-box">Pendidikan</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext animate-box">
							<h3>Berikut ini adalah pendidikan saya</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fh5co-project">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="fh5co-portfolio animate-box">
							<a href="#">
								<div class="portfolio-entry" style="background-image: url(images/tk.jpg);">
									<div class="desc">
										<p>TK Al-Istiqomah ini adalah tk yang berada di depok,tepatnya di jalan merdeka. Tk Al-istiqomah ini merupakan taman kanak-kanak islam.</p>
									</div>
								</div>
								<div class="portfolio-text text-center">
									<h3>Al-Istiqomah</h3>
									
								</div> 
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-portfolio animate-box">
							<a href="#">
								<div class="portfolio-entry" style="background-image: url(images/sd.jpg);">
									<div class="desc">
										<p>Yaspen Tugu Ibu 1 Depok berada di jalan sentosa depok 2 tenga. Disini terdapat jenjang untuk sekolah dasar, sekolah menengah pertama, dan juga sekolah menengah Atas.</p>
									</div>
								</div>
								<div class="portfolio-text text-center">
									<h3>Yaspen Tugu Ibu 1 Depok</h3>
								
								</div> 
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-portfolio animate-box">
							<a href="#">
								<div class="portfolio-entry" style="background-image: url(images/smp.jpg);">
									<div class="desc">
										<p>Sekolah Menengah Pertama Negeri 8 Depok ini berada di jalan komplek pelni, akses ui depok..</p>
									</div>
								</div>
								<div class="portfolio-text text-center">
									<h3>SMP NEGERI 8 DEPOK</h3>
								
								</div> 
							</a>
						</div>
					</div>
					<!-- kalau yg bawah gak kepake hapus aja -->

					<div class="col-md-4">
						<div class="fh5co-portfolio animate-box">
							<a href="#">
								<div class="portfolio-entry" style="background-image: url(images/sd.jpg);">
									<div class="desc">
										<p>SMA YASPEN TUGU IBU 1 DEPOK merupakan SMA swasta yang berada di nauangan yang sama dengan sd yaspen tugu ibu 1 depok</p>
									</div>
								</div>
								<div class="portfolio-text text-center">
									<h3>SMA YASPEN TUGU IBU 1</h3>
								
								</div> 
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-portfolio animate-box">
							<a href="#">
								<div class="portfolio-entry" style="background-image: url(images/kuliah.jpg);">
									<div class="desc">
										<p>Universitas Gunadarma terletak di Depok, Jawa Barat.</p>
									</div>
								</div>
								<div class="portfolio-text text-center">
									<h3>Universitas Gunadarma</h3>
								
								</div> 
							</a>
						</div>
					</div>
					<!-- hapus sampe sini -->
				</div>
			</div>	
		</div>
		
	</section>
	
	<section id="fh5co-pricing" data-section="Minat">
		<section class="pricing-section bg-3">
      	<div class="container">
      		<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="animate-box">Hobies</h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext animate-box">
								<h3>Hobi saya adalah</h3>
							</div>
						</div>
					</div>
				</div>
               @foreach ($manages as $s)
      		<div class="row">
              <div class="service d-flex h-100">
                <div>
                   
                    
                        <h3> <span><i class="{{$s->icon}} my-3"></i></span> &nbsp {{$s->title}}</h3>
                        <p>{{$s->content}}</p>
                    </div>
                </div>      
      		</div>
             @endforeach
      	</div>
     </section>
	</section>	
@endsection
