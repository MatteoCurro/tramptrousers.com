<?php
/*
Template Name: Home page
*/
get_header(); ?>
	<div class="abc">
		<div class="width100 centered">
			<div class="content">
				<img class="content_left" src="<?php bloginfo('template_directory'); ?>/img/tramp_trousers_abc.jpg" alt="Tramp Trousers">
			</div>
		</div>

		<div class="content clearfix">
			<div id="abc" class="width100 centered content_right clearfix">
				<h3 id="abc_title" class="very_big_font zoomable secondary_color_font font2">ABC</h3>

				<h2 id="abc_small_title" class="zoomable">Anything but classic</h2>
				<div id="abc_text" class="content zoomable medium pad20">
					<p>Everything you exprect in an unexpected way.<br/>
					Take out the classic from the substance,<br/>
					but leave it in the <em>form</em>.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="about">
		<h2 class="title centered dark_background white_font">About</h2>
		
		<h3 class="centered font1 medium pad050 dark_background">
			<div id="intro" class="content zoomable white_font light">
				We are an italian brand, a special one.<br/>
				Maybe the best out there.<br/>
				Or we just like to think about us<br/>
				as the phantasmagoric ones who create<br/>
				something amazing.
			</div>
		</h3>

		
		<div class="width100  centered pad70 well_true">
		<h2 class="big_font zoomable">Well, it's true.</h2>
	</div>

		

		<div class=" clear_both content">
		<!-- <h3 class="centered font1 medium pad30 ">Everything you expect in an unexpected way.<br/>
			Take out the classic from the substance,<br/>
			but leave it in the <i>form</i>.
		</h3> -->
		</div>
	</div>

	<div class="collection">
		<?php /* $attachments = new Attachments( 'attachments' );  ?>
<?php if( $attachments->exist() ) : ?>
  <h3>Attachments</h3>
  <p>Total Attachments: <?php echo $attachments->total(); ?></p>
  <ul>
    <?php while( $attachments->get() ) : ?>
      <li>
        ID: <?php echo $attachments->id(); ?><br />
        Type: <?php echo $attachments->type(); ?><br />
        Subtype: <?php echo $attachments->subtype(); ?><br />
        URL: <?php echo $attachments->url(); ?><br />
        Image: <?php echo $attachments->image( 'thumbnail' ); ?><br />
        Source: <?php echo $attachments->src( 'full' ); ?><br />
        Size: <?php echo $attachments->filesize(); ?><br />
        Title Field: <?php echo $attachments->field( 'title' ); ?><br />
        Caption Field: <?php echo $attachments->field( 'caption' ); ?>
      </li>
    <?php endwhile; ?>
  </ul>
<?php endif; */ ?>
		<h2 class="title centered dark_background white_font">Collection</h2>
		<h3 class="primary_color_background centered font1 medium pad30">
			<div class="content zoomable">Spring / Summer 2014 is out!</div>
		</h3>
		<div class="content">
		<?php
		  // recupere la collezione con una nuova istanza di attachment
		// 7
		  $attachments = new Attachments( 'attachments', 7 );
		?>
		<?php if( $attachments->exist() ) : ?>
		  <div id="images_collection" class="images_collection centered pad30 content zoomable">
		    <?php while( $attachment = $attachments->get() ) : ?>
		        <img src="<?php echo $attachments->src( 'full' ); ?>" alt="Tramp Trouser">
		    <?php endwhile; ?>
		  </div>
		<?php endif; ?>
		</div>
	</div>

	<div class="stores">
		<h2 class="title centered dark_background white_font">Stores</h2>
		<h3 class="secondary_color_background centered font1 medium pad30">
			<div class="content zoomable">You need to want it.<br/>
				You gotta want it.
			</div>
		</h3>
		<div class="content clearfix medium_font">
			<div class="content_1-3 pad30">
				<h3>Europe</h3>
				<a href="http://www.sancarlodal1973.com/" title="Tramp Trouser store S.Carlo Torino">S.Carlo - Torino</a><br/>
				<!-- <a href="http://www.barrow-bibas.com/" title="Tramp Trouser store Biba's Bologna">Biba's Bologna</a><br/>
				<a href="http://www.altamodamodena.com/" title="Tramp Trouser store Altamoda Modena">Altamoda Modena</a> -->
				<a href="http://www.izimen.com/" title="Tramp Trouser store IZI Men - Santa Margherita Ligure">IZI Men Santa Margherita Ligure</a><br/>
			</div>

			<div class="content_1-3 pad30">
				<h3>Foreign</h3>
				<!-- <a href="http://chcmshop.com" title="Tramp Trouser store CHCM new york">CHCM new york</a><br/> -->
				<a href="/" style="cursor: default">Designer Best Bordeaux (FR)</a><br>
				<a href="/" style="cursor: default">Partner in Crime Parigi (FR)</a><br>
				<a href="/" style="cursor: default">Unlimited Lounge Nagoya (JP)</a><br>
				<a href="http://www.jeanpierrebua.com/" title="Tramp Trouser store Jean Pierre Bua - Barcellona">Jean Pierre Bua Barcellona (ES)</a><br>
				<a href="/" style="cursor: default">Formula Lekki (NG)</a>

			</div>
			<div class="content_1-3 pad30">
				<h3>Wish list</h3>
				<a href="#" title="Tramp Trouser store Beatiful Show">Beatiful Show</a><br/>
				<a href="#" title="Tramp Trouser store Amazing Store">Amazing Store</a><br/>
				<a href="#" title="Tramp Trouser store Only the best">Only the best</a><br/>
				<a href="#" title="Tramp Trouser store Fashion leader">Fashion leader</a><br/>
				<a href=href="#" title="Tramp Trouser store Brand new store">Brand new store</a><br/>
				
			</div>
		</div>
	</div>

	<div class="contact">
		<h2 class="title centered dark_background white_font">Contact us</h2>
		<h3 class="primary_color_background centered font1 medium pad30">
			<div class="content zoomable">Get in contact with us.<br/>
			Our team is like a firm handshake.
			</div>
		</h3>
		<div class="primary_color_background pad3030 width100">
			<div class="content clearfix">
				<div class="content_left">
					
<h4 class="zoomable">Showroom</h4>
<p class="light zoomable">NO SEASON<br/>
8 bis, rue de Braque 75003<br/>
+33 (0)1 42 78 50 20<br/>
noseason.con@wanadoo.fr<br/>
Paris France</p>
<br/>
<h4 class="zoomable">Communication</h4>
<p class="light zoomable">Lucia Leoni<br/>
l.leoni@e-2.it</p>
<br/>
<h4 class="zoomable">Sales</h4>
<p class="light zoomable">Roberto Gallo<br/>
r.gallo@e-2.it</p>
					

				</div>
				<div class="content_right zoomable">
					<?php
					// recupero il contenuto della pagina contact da fuori il loop
					// 17
					$id = 17;
					$p = get_page($id);
					echo apply_filters('the_content', $p->post_content);
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="socials">
		<h2 class="title centered dark_background white_font">Social networks</h2>
		<h3 class=" centered font1 medium pad30">Follow the white rabbit.</h3>
		<div class="content clearfix">
			<a href="http://www.facebook.com/pages/TRAMP-TROUSERS/77511834988" target="_blank" title="Tramp Trousers Facebook">
				<div class="social centered zoomable" id="facebook">
					<img src="<?php bloginfo('template_directory'); ?>/img/facebook.png" alt="Tramp Trouser Facebook">
				</div>
			</a>

			<a href="http://twitter.com/TrousersTramp" target="_blank" title="Tramp Trousers Twitter">
				<div class="social centered zoomable" id="twitter">
					<img src="<?php bloginfo('template_directory'); ?>/img/twitter.png" alt="Tramp Trouser Twitter">
				</div>
			</a>

			<!-- <a href="#">
				<div class="social centered zoomable" id="instagram">
					<img src="<?php bloginfo('template_directory'); ?>/img/instagram.png" alt="Tramp Trouser Instagram">
				</div>
			</a> -->
		</div>
	</div>

		<div class="go_top mar500" id="scroll_top">
			<div class="arrow_up centered"></div>
			<div class="go_top_content width100 centered grey_background pad30">
				<h4 class="medium_font black_font">BACK TO TOP!</h4>
			</div>
		</div>


<?php get_footer(); ?>
