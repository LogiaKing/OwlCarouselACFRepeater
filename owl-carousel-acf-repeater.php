//Add this CSS
<style>
.owl-carousel-global li {
  min-width: 100%;
  height: 45vh !important;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
.owl-prev {
  width: 10px;
  height: 10px;
  position: absolute;
  font-size: 10px;
  top: 45%;
  margin-left: -70px;
  display: block !important;
  background-color: transparent !important;
}
.owl-next {
  width: 10px;
  height: 10px;
  position: absolute;
  font-size: 10px;
  top: 44%;
  right: 70px;
  display: block !important;
  background-color: transparent !important;
}
.owl-prev i, .owl-next i {
  transform: scale(1, 6);
  color: #ccc;
}
.owl-controls {
  margin-top: -40px !important;
}
.owl-theme .owl-dots .owl-dot {
  position: absolute;
}
.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
  background: #ced200;
}
</style>

// Repeater code

<!---Slider repeater--->
<div class="container-fluid">
   <div class="row">
	   
       <ul id="owl-demo owl-demo-home" class="owl-carousel-global owl-carousel owl-theme" style="padding: 0px !important;">
	   
      <?php if(get_field('text_carousel')): ?>
	    <?php while(has_sub_field('text_carousel')): ?>
			 
            <li class="owl-slide d-flex" style="background-image: url('<?php the_sub_field('slide_image'); ?>')"></li>
		   
	    <?php endwhile; ?>
      <?php endif; ?>		
      
       </ul>
   </div>
</div>
<!----> 


//Init file
<script>
$('.owl-carousel-global').owlCarousel({
  loop: true,
  margin: 0,
  nav: true,
  autoWidth: false,
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,
  stagePadding: 0,
  singleItem: true,
  navText: ['<span class="fas fa-chevron-circle-left fa-2x"></span>', '<span class="fas fa-chevron-circle-right fa-2x"></span>'],
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});
<script>