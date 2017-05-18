<?php include 'theme-part/header.php'; ?>

<div class="livepage">
<?php include 'theme-part/header-top-menu-live.php'; ?>
<?php include 'theme-part/header-right-menu.php'; ?>


<!--- Drop Menu -->   
    <div class="drop_menu">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-lg-3 col-md-3 col-sm-4">
                    
                    <a href="#" id="openleftmenu">
                    <div class="navbar-toggle-inside">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </div>
                    Open left menu</a>
                    
                </div>
                 <div class="col-lg-9 col-lg-9 col-sm-8">
                     
                     <ul class="nav navbar-nav drop-nav">
                        <li class="active"><a href="#">All games</a></li>
                        <li><a href="#">Live Overview</a></li>
                        <li><a href="#">Live calendar</a></li>
                        <li><a href="#">Live scores</a></li>
                    </ul>
                     
                     
                 </div>
                
            </div>
        </div>
    </div>
    
    
<!--- Drop Menu -->   


<!--- Left Sidebar & content -->   

<div class="container-fluid">
            <div class="row">
        
               
                
                <div class="col-lgh-2 col-lg-3 col-md-3">
                    
               <?php include 'livesport-part/left-sidebar.php'; ?>
                    
                </div>
                
                 <div class="col-lgh-10 col-lg-9 col-md-9">
                     
                     <div class="row">
                        <div class="col-md-4">
                           
                            <div id="searchbox">
                               
                                <form class="form" role="form">
                                      <div class="form-group">
                                        <input type="text" class="form-control" id="serchinput" placeholder="Search">
                                      </div>
                                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                </form>
                                
                            </div>
                        
                        </div>
                        <div class="col-md-5 col-md-offset-3">
                            
                            <div class="multiviewbox">
                                <div class="multiviewbox_name">Multiview mode</div>
                                <div class="multiviewbox_button">
                                 <a href="/livesport.php" class="active">off</a>
                                 <a href="/livesport-multi.php">on</a>
                                </div>
                            </div>
                            
                        </div>                        
                     </div>
                  
                    
                    <?php include 'livesport-part/command_line_live.php'; ?>
                    
                    
                    
                    <div class="row centerstatistic_livesport">
                        
                        <div class="col-md-6">
                           
                     
                             <?php include 'livesport-part/betslips_onecolumb.php'; ?>
                            
                        </div>
                        
                        <div class="col-md-6">
                           <?php include 'livesport-part/betslips_twocolumb.php'; ?>
                            
                        </div>
                        
                        
                    </div>
                    
                    
                    
                    
                 </div>
                  
  
                    
    </div>
</div>

 <?php include 'livesport-part/betslips_block.php'; ?>
<!--- Left Sidebar & content -->   






<?php include 'theme-part/footer_line.php'; ?>  

</div>

<?php include 'theme-part/scripts.php'; ?>
 
 
 
  <script type="text/javascript" src="js/interact.min.js"></script>
  
  
<script>
$('.panel-heading > a').click(function() { 
    if ( $(this).parent().children('.in').length > 0 || $(this).parent().parent().children('.in').length > 0 ) {
        $(this).children('.fa-chevron-down').removeClass('chevron-animate'); 
 }else{  
 if($(this).parent()[0].tagName.toLowerCase() == 'div'){  
  $(this).closest('div.menu-live').find('div > div > a .fa-chevron-down').removeClass('chevron-animate');
 }else{
  $(this).closest('.menu-live').find('.fa-chevron-down').removeClass('chevron-animate');
 }
        $(this).children('.fa-chevron-down').addClass('chevron-animate');
    };
});
</script>




<script>
$(document).ready(function() {
  $('#openleftmenu').click(function() {
      $('.right_sidebar').toggleClass('active');
      $('#openleftmenu').children('.navbar-toggle-inside').toggleClass('active');
  });
});
</script>
 
 
 
  
 
 
 
  <script>
$(document).ready(function() {
    
  $('.teamone_betslipbox').click(function() {
      $('.button_betslips').toggleClass('blob');
      $('.card_betslips').toggleClass('blob');
      $('.betslips_box_fly').toggleClass('totop');
      $('.betslip-active-tab').toggleClass('betslip-active-blob');
      $('.none_bet').hide();
  });
    
  $('.button_betslips').click(function() {
      $('.button_betslips').next().toggle();
  });
    
    
});
</script>
  
   
  <script> 
var element = document.getElementById('grid-snap'),
    x = 0, y = 0;

interact(element)
  .draggable({
    snap: {
      targets: [
        interact.createSnapGrid({ x: 30, y: 30 })
      ],
      range: Infinity,
      relativePoints: [ { x: 0, y: 0 } ]
    },
    inertia: true,
    restrict: {
      restriction: element.parentNode,
      elementRect: { top: 0, left: 0, bottom: 1, right: 1 },
      endOnly: true
    }
  })
  .on('dragmove', function (event) {
    x += event.dx;
    y += event.dy;

    event.target.style.webkitTransform =
    event.target.style.transform =
        'translate(' + x + 'px, ' + y + 'px)';
  });
</script>    
   


   
<link href="css/livesport.css" rel="stylesheet">
<link href="css/flag-icon.min.css" rel="stylesheet">

<?php include 'theme-part/footer.php'; ?>