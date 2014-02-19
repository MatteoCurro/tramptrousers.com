		<footer id="footer" class="source-org vcard copyright centered pad30">
			<img src="<?php bloginfo('template_directory'); ?>/img/tramp_logo_small.png" alt="Tramp Trousers 2013"><br/><br/>
      <p class="small_font">MARITEX S.R.L - Via della Borsa, 7, 31033 Castelfranco Veneto  TV - Phone: 0423 721272</p>
		</footer>

	</div>

	<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the Wordpress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.nicescroll.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.appear.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.ba-throttle-debounce.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<script>

	var body = jQuery('body');

	function scrollToSection(where) {
		body.scrollTo('.'+where, 600, { offset: -71, axis: 'y'});
	}

    // NICE SCROLL solo se lo schermo è più di 800px
    if ( Modernizr.mq('only all and (min-width: 800px)') ) {
      // jQuery("html").niceScroll({scrollspeed: 60, smoothscroll: true, cursorcolor:"#000",cursoropacitymin: "0.1", cursoropacitymax:"0.3",zindex:"101",cursorwidth:"10px",cursorborder:"none",cursorborderradius:"5px"});
      jQuery(".images_collection").niceScroll({scrollspeed: 60, cursorcolor:"#000",cursoropacitymin: "0.3", cursoropacitymax:"0.3",zindex:"99",cursorwidth:"10px",cursorborder:"none",cursorborderradius:"5px"});
    }

  


	(function($){

    	var body = $('body');

		$('#scroll_top').click(function(){
	    body.animate({ scrollTop: 0 }, 600);
	    return false;
	    });

    $('ul.top_menu li a').on('click', function(e) {
      e.preventDefault();
      var target = $(this).data('target-class');
      body.scrollTo('.'+target, 600, { offset: -71, axis: 'y'})
    })

    // KLUDGE: IL CODICE DEL SET INTERVAL SI RIPETE CAUSA POCO TEMPO, DA SISTEMARE.

    // Dichiaro la variabile del contenitore della collection
    var images_collection = $('.images_collection');

    // Imposto la classe current alla prima immagine
    images_collection.children().eq(0).addClass('current');

    var intervalId = null;
    // Imposto l'intervallo per ciascun contenitore di collection
    intervalId = setInterval(function(){
      images_collection.each(function(){
        console.log('chiamata funzione');
        // Rimuovo la classe current all'attuale
        // Salvo la corrente nella variabile cur
        var cur = images_collection.find('.current').removeClass('current');
        // Imposto la successiva sulla successiva se esiste
        // in caso contrario imposto la prima
        var next = cur.next().next().length ? cur.next() : images_collection.children().eq(0);
        // Scrollo con scrollTo alla successiva
        images_collection.scrollTo(next, 600, { offset: 0, axis: 'x'});
        // Aggiungo la classe current alla successiva
        next.addClass('current');   
      });
    },3000);

    images_collection.on('mouseover', function() {
      clearInterval(intervalId);
    }).on('mouseout', function() {
        intervalId = setInterval(function(){
        images_collection.each(function(){
          console.log('chiamata funzione');
          // Rimuovo la classe current all'attuale
          // Salvo la corrente nella variabile cur
          var cur = images_collection.find('.current').removeClass('current');
          // Imposto la successiva sulla successiva se esiste
          // in caso contrario imposto la prima
          var next = cur.next().next().length ? cur.next() : images_collection.children().eq(0);
          // Scrollo con scrollTo alla successiva
          images_collection.scrollTo(next, 600, { offset: 0, axis: 'x'});
          // Aggiungo la classe current alla successiva
          next.addClass('current');   
        });
      },3000);
    });


    // Ghirigori estetici
  // var menu_item = $('ul.top_menu li');
  
  // menu_item.css({top:'-20px', opacity:0});

  // var z = 0;  
  // var refreshId = setInterval(function() {  
      
  //     menu_item.eq(z).animate({top:'15px', opacity:100},{duration:1000, easing: 'linear'});
       
  //      z++;  
  //      if (z > menu_item.length) {  
  //         clearInterval(refreshId);  
  //      }  
  // }, 300);

  $(document).ready(function() {
    setTimeout(function() {
      $('header').addClass('header_loaded');
    }, 400);
    setTimeout(function() {
      $('.chino_sucks').addClass('viewed');
    }, 2000);
    setTimeout(function() {
      $('#abc_title').addClass('viewed');
    }, 1200);
    setTimeout(function() {
      $('#abc_small_title').addClass('viewed');
    }, 1400);
    setTimeout(function() {
      $('#abc_text').addClass('viewed');
    }, 1600);
  });

$('.zoomable').appear();
$(document.body).on('appear', '.zoomable', function(e, $affected) {
    // this code is executed for each appeared element
    $(this).addClass('viewed');

  });





	})(jQuery);

$(function(){
    $('.logo').data('size','big');
});

$(window).scroll($.debounce( 250,function(){
    if($(window).scrollTop() > 72)
    {
        if($('.logo').data('size') == 'big')
        {
            $('.logo').data('size','small');
            $('.logo').stop().animate({
          		opacity: 0
            },100, function() {
            	$('.logo').stop().animate({
          		height: 0
            },100);
        	});
        }
    }
    else
    {
        if($('.logo').data('size') == 'small')
        {
            $('.logo').data('size','big');
            $('.logo').stop().animate({
          		height: 72
            },100, function() {
            	$('.logo').stop().animate({
            		opacity: 1
          		
            },100);
        	});
        }  
    }

}));


  
</script>
	
</body>

</html>
