<?php include 'theme-part/header.php'; ?>
<link rel="stylesheet" href="css/virtual.css">
<?php include 'theme-part/header-right-menu.php'; ?>

<div class="livepage virtual soccer">
<?php include 'theme-part/header-top-menu-virtual.php'; ?>
<?php include 'theme-part/header-right-menu-virtual.php'; ?>



<!--- Left Sidebar & content -->   

<div class="container">
            <div class="row virtual-box">
                
                <div class="menuleft" data-spy="affix" data-offset-top="205">
                        <a href="/virtualbet.php">
                            <span class="live-scorbet-football"></span>
                            Soccer
                        </a>
                        <a href="/virtualbet-horse.php">
                            <span class="horseracint_icon"></span>
                            Horse Rasing
                        </a>
                        <a href="/virtualbet-dog.php">
                            <span class="dogint_icon"></span>
                           Greyhounds
                        </a>
                         <a href="/virtualbet-tenis.php">
                            <span class="live-scorbet-tennis-ball"></span>
                            Tennis
                        </a>
                         <a href="/virtualbet-basketball.php" class="active">
                            <span class="live-scorbet-ball-of-basketball"></span>
                            Basketball
                        </a>
                        
                    </div>

                <div class="col-md-10 col-md-offset-2">
                    <iframe frameborder="0" allowtransparency="true" name="vfl_iframe" id="vfl_iframe" width="758px" height="520px" scrolling="no" src="https://www.betadonis.com/vflbb/vleague.php?clientid=1609&amp;lang=en&amp;style=betadonis"></iframe>
                </div>
                <div class="col-md-10 col-md-offset-2">
        <div class="virtual-bets-outer">
            <!-- football -->
            <div class="virtual-bets-container basketball">
                <div class="virtual-bets-filter flex">
                    <a href="#tab1" data-toggle="tab" class="virt-tab active"><span>Match winner</span></a>
                    <a href="#tab2" data-toggle="tab" class="virt-tab"><span>Total</span></a>
                    <a href="#tab3" data-toggle="tab" class="virt-tab"><span>Winning margins</span></a>
                    <a href="#tab4" data-toggle="tab" class="virt-tab"><span>Handicap</span></a>
                    <a href="#tab5" data-toggle="tab" class="virt-tab"><span>Race to X</span></a>
                    <a href="#tab6" data-toggle="tab" class="virt-tab"><span>Team's Total</span></a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active fade in" id="tab1">
                        <div class="row table-head">
                            <div class="col-md-5"></div>
                            <div class="col-md-2">Winner</div>
                            <div class="col-md-5">Highest Scoring Quarter</div>
                        </div>
                        <div class="row table-head m0">
                            <div class="col-md-1"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                            <div class="col-md-1">Q1</div>
                            <div class="col-md-1">Q2</div>
                            <div class="col-md-1">Q3</div>
                            <div class="col-md-1">Q4</div>
                            <div class="col-md-1">Eql.</div>
                        </div>
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-1.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-1.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-1.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-1.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-1.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-1.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-1.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-1.php'; ?>  
                    </div>

                    <div class="tab-pane fade" id="tab2">
                        <div class="row p0">
                            <div class="col-md-6"><a class="inner-tab">Match Result</a></div>
                            <div class="col-md-6"><a class="inner-tab">1.Half</a></div>
                        </div>
                        <div class="row table-head m0">
                            <div class="col-md-6" style="text-align: center">Total Match Result (+overtime)</div>
                            <div class="col-md-1">Over</div>
                            <div class="col-md-1">Under</div>
                            <div class="col-md-1">Over</div>
                            <div class="col-md-1">Under</div>
                            <div class="col-md-1">Over</div>
                            <div class="col-md-1">Under</div>
                        </div>
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-2.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-2.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-2.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-2.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-2.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-2.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-2.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-2.php'; ?>  
                    </div>
                    <div class="tab-pane fade score" id="tab3">
                        <div class="row p0">
                            <div class="col-md-6"><a class="inner-tab">Match Result</a></div>
                            <div class="col-md-6"><a class="inner-tab">1.Half</a></div>
                        </div>
                        <div class="row table-head" style="text-align: center">
                            <div class="col-md-6">Winning Margins Match Result (+overtime)</div>
                            <div class="col-md-2">1-5</div>
                            <div class="col-md-2">6-10</div>
                            <div class="col-md-2">>10</div>
                        </div>
                        <div class="row table-head m0" style="text-align: center">
                            <div class="col-md-1"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                        </div>                        
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-3.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-3.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-3.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-3.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-3.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-3.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-3.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-3.php'; ?> 
                    </div>
                    <div class="tab-pane fade" id="tab4">
                        <div class="row p0">
                            <div class="col-md-6"><a class="inner-tab">Match Result</a></div>
                            <div class="col-md-6"><a class="inner-tab">1.Half</a></div>
                        </div>
                        <div class="row m0 table-head" style="text-align: center">
                            <div class="col-md-6">Winning Margins Match Result (+overtime)</div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                        </div>
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-4.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-4.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-4.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-4.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-4.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-4.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-4.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-4.php'; ?>                         
                    </div>
                    <div class="tab-pane fade" id="tab5">
                        <div class="row table-head m0" style="text-align: center">
                            <div class="col-md-6">Winning Margins Match Result (+overtime)</div>
                            <div class="col-md-2">1-5</div>
                            <div class="col-md-2">6-10</div>
                            <div class="col-md-2">>10</div>
                        </div>
                        <div class="row table-head m0">
                            <div class="col-md-1"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                        </div>                      
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-5.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-5.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-5.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-5.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-5.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-5.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-5.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-5.php'; ?>                          
                    </div>
                    <div class="tab-pane fade" id="tab6">
                        <div class="row table-head m0" style="text-align: center">
                            <div class="col-md-6">Winning Margins Match Result (+overtime)</div>
                            <div class="col-md-1">Over</div>
                            <div class="col-md-1">Under</div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1">Over</div>
                            <div class="col-md-1">Under</div>
                        </div>                       
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-6.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-6.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-6.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-6.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-6.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-6.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-6.php'; ?>             
                        <?php include 'virtual-part/virtual/virtual-bets-basketball-6.php'; ?>                          
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
   

<script>
    $('.show-detail').click(function(){
        $(this).parents('.row').next().toggle();
    });
    $('.show-detail-handicap').click(function(){
        $(this).parents('.row').next().next().toggle();
    });
    $('.virt-tab').click(function(){
        $(this).parents('.virtual-bets-filter')
               .find('.virt-tab.active')    
               .removeClass('active');
        $(this).addClass('active');
    });
</script>
   
<link href="css/livesport.css" rel="stylesheet">
<link href="css/flag-icon.min.css" rel="stylesheet">

<?php include 'theme-part/footer.php'; ?>