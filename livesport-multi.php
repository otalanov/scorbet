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
                    
               <?php include 'livesport-part/left-sidebar-multi.php'; ?>
                    
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
                                 <a href="/livesport.php">off</a>
                                 <a href="/livesport-multi.php" class="active">on</a>
                                </div>
                            </div>
                            
                        </div>                        
                     </div>
                     
      <!--Multiple lobiPanels-->
                <div id="lobipanel-multiple">
                    <div class="bs-example">
                        <div class="row">
                            <div class="col-md-6">
                               
                                <div class="panel panel-default" data-initial-index="4">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Panel One</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                     
                                        <div class="brandimage football_img">
                                            <div class="line_of_command">
                                            <div class="center_half_command"><span>Georgia</span>1:0<span>Cyprus</span></div>
                                            
                                            </div>
                                        </div>
                                     <div class="mCustomScrollbar multiview_scrollbar">
                                      <?php include 'livesport-part/betslips_onecolumb.php'; ?>  
                                        </div>
                                    </div>
                                </div>
                                
                                
                    
                            </div>
                            <div class="col-md-6">
                     
                     
                                             <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Panel Two</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                           <div class="brandimage football_img">
                                            <div class="line_of_command">
                                            <div class="center_half_command"><span>Georgia</span>0:1<span>Ukraine</span></div>
                                            
                                            </div>
                                        </div>
                                         <div class="mCustomScrollbar multiview_scrollbar">
                                        <?php include 'livesport-part/betslips_twocolumb.php'; ?>  
                                        </div>
                                    </div>
                                </div>
                     
                           
                            </div>
                        </div>
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
    <script type="text/javascript" src="js/lobipanel.min.js"></script>
    
    
    <script>
        $(function(){
            $('#lobipanel-multiple').find('.panel').lobiPanel({
                sortable: true,
                  reload: false,
    editTitle: {
        icon: 'fa fa-edit',
        icon2: 'fa fa-save'
    },
    unpin: {
        icon: 'fa fa-arrows'
    },
    minimize: {
        icon: 'fa fa-chevron-up',
        icon2: 'fa fa-chevron-down'
    },
    close: {
        icon: 'fa fa-times-circle'
    },
    expand: {
        icon: 'fa fa-expand',
        icon2: 'fa fa-compress'
    }
            });
        });
    </script>
    
    
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
$(document).ready(function() {
  $('#openleftmenu').click(function() {
      $('.right_sidebar').toggleClass('active');
      $('#openleftmenu').children('.navbar-toggle-inside').toggleClass('active');
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
<link href="css/livesport-multi.css" rel="stylesheet">
<link href="css/flag-icon.min.css" rel="stylesheet">

<?php include 'theme-part/footer.php'; ?>