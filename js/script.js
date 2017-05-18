
$(window).on('load', function() { // makes sure the whole site is loaded 
  $('#status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(350).css({'overflow':'visible'});
})

        jQuery(document).ready(function(){
        			$(".icon_footer_pay").mCustomScrollbar({
					scrollButtons:{enable:true},
					theme:"light-thick",
					scrollbarPosition:"inside"
				});
    
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeft = document.getElementById( 'showLeft' ),
                showLeft2 = document.getElementById( 'showLeft2' ),
                showLeft3 = document.getElementById( 'showLeft3' ),
				body = document.body;

$(document).on('click','#showLeft',function(){
    classie.toggle( this, 'active' );
    classie.toggle( menuLeft, 'cbp-spmenu-open' );
    disableOther( 'showLeft' );
   });
			function disableOther( button ) {
				if( button !== 'showLeft' ) {
					classie.toggle( showLeft, 'disabled' );
				}
			}
            showLeft2.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeft2' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft2' ) {
					classie.toggle( showLeft2, 'disabled' );
				}
			}
             showLeft3.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeft3' );
			};
            function disableOther( button ) {
				if( button !== 'showLeft3' ) {
					classie.toggle( showLeft3, 'disabled' );
				}
			}
                 });

        			$(".favourites_game_box").mCustomScrollbar({
					scrollButtons:{enable:true},
					theme:"light-thick",
					scrollbarPosition:"inside"
				});


        jQuery(document).ready(function() {new WOW().init();});
        jQuery('#showLeft').click(function() {
          jQuery('.background-gray').toggleClass('in');
          jQuery('#showLeft').toggleClass('active');
        });
        
         jQuery('#showLeft2').click(function() {
          jQuery('.background-gray').toggleClass('in');
             jQuery('#showLeft').toggleClass('active');
        });
        jQuery('#showLeft3').click(function() {
          jQuery('.background-gray').removeClass('in');
        });
  
