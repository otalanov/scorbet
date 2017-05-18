<?php include 'theme-part/header.php'; ?>

<div class="livepage account_page">
<?php include 'theme-part/header-top-menu.php'; ?>
<?php include 'theme-part/header-right-menu.php'; ?>



<!--- Left Sidebar & content -->   

<div class="container">
            <div class="row">
        
                  
                 <div class="col-lg-12 col-md-12">
          <div class="account_box">
          
          
              <div class="my_account_box row">
                <div class="col-md-4">
                 <div class="login_live_box row">
                           
                    <div class="col-md-6">
                          
                           <div class="user_avatar_box">
                              
                                               <!--- Avatar --->
                                               
                                                <div class="avatar_area">
                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                </div>
                               
                                              <!--- Avatar --->  
                               
                               
                               <div class="user_logout"><a href="javascript:;" class="live-scorbet-logout"></a></div>
                           </div>
                       
                     </div>
                    <div class="col-md-6">
                        <div class="user_name_box">Hello, <a href="#">Samet Ateş</a> <span>(ID 77512)</span></div>
                             <div class="user_price_box"><span>24.18 TRY <a href="#balance" data-toggle="modal" >Balance</a></span></div>
                           
                                 <div class="acc_link acc_delete"><a href="#limitations" data-toggle="modal"><i class="fa fa-times-circle-o"></i> Personal Limits</a></div>
                                 <div class="acc_link"><a href="#doc-upload" data-toggle="modal"><i class="fa fa-upload"></i> Document upload</a></div>
                     
                                 
                             <div class="clearfix"></div>
                    </div>
                </div>  
                        

                  </div>
                  <div class="col-md-8">
                      
                        <div class="process">
                           <div class="process-row nav nav-tabs">
                            <div class="process-step">
                             <button type="button" class="btn btn-default btn-circle active" data-toggle="tab" href="#menu1"><i class="fa fa-cogs fa-3x"></i></button>
                             <p>Information</p>
                            </div>
                            <div class="process-step">
                             <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-file-text-o fa-3x"></i></button>
                             <p>Bet history</p>
                            </div>
                            <div class="process-step">
                             <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu3"><i class="fa fa-envelope fa-3x"></i></button>
                             <p>Inbox</p>
                            </div>
                            <div class="process-step">
                             <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu4"><i class="fa fa-check fa-3x"></i></button>
                             <p>Bonuses</p>
                            </div>
                           </div>
                          </div>
                      
  
                  </div>
              </div>
              
              
              <div class="row">
              
                  <div class="col-md-12">
                  
                           <div class="tab-content">
                               <div id="menu1" class="tab-pane fade active in">
                               <?php include 'account-part/account_general.php'; ?>
                               </div>
                               <div id="menu2" class="tab-pane fade">
        <?php include 'account-part/account_bethistory.php'; ?>
                               </div>
                               <div id="menu3" class="tab-pane fade">
        <?php include 'account-part/account_inbox.php'; ?>
                               </div>
                               <div id="menu4" class="tab-pane fade">
        <?php include 'account-part/account_bonuses.php'; ?>
                               </div>
                          </div>
                  
                  
                  </div>

              
              </div>
     
      </div>  
      

      
      
   </div>                  
</div>
</div>






<?php include 'account-part/account_popups.php'; ?>

<?php include 'theme-part/footer_line.php'; ?>  

</div>

<?php include 'theme-part/scripts.php'; ?>
 
 
   
<link href="css/livesport.css" rel="stylesheet">
<link href="css/flag-icon.min.css" rel="stylesheet">


<!-- account_page_style -->

<link href="css/account.css" rel="stylesheet">

<!-- account_page_style -->



<script>
      $('.mail-item').click(function(){
        $(this).parents('#inbox-body-inner').hide();
        $(this).parents('#inbox-body').find('#inbox-mail-inner').load('account-part/account_mailbody.php');
      });
      $('.mail-checkbox').parent().click(function(){
        event.stopPropagation();
      });
      $('.process-step .btn').click(function() {
        $(this).parents('.process-row.nav').find('.process-step>.btn.active').removeClass('active');
        $(this).addClass('active');
      });


      $('.tgl-outer #mail-tgl').on('click', function() {
        console.log('+');
        $('.tgl-outer').toggleClass('is-checked');
      });

</script>



<!-- Include Required Prerequisites -->
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script> -->
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" /> -->
 
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>

<script>
  $('input[name="daterange"]').daterangepicker({
    "ranges": {
        "Today": [
            "2017-05-01T11:50:04.600Z",
            "2017-05-01T11:50:04.600Z"
        ],
        "Yesterday": [
            "2017-04-30T11:50:04.600Z",
            "2017-04-30T11:50:04.600Z"
        ],
        "Last 7 Days": [
            "2017-04-25T11:50:04.600Z",
            "2017-05-01T11:50:04.600Z"
        ],
        "Last 30 Days": [
            "2017-04-02T11:50:04.600Z",
            "2017-05-01T11:50:04.600Z"
        ],
        "This Month": [
            "2017-04-30T21:00:00.000Z",
            "2017-05-31T20:59:59.999Z"
        ],
        "Last Month": [
            "2017-03-31T21:00:00.000Z",
            "2017-04-30T20:59:59.999Z"
        ]
    },
    "startDate": "04/25/2017",
    "endDate": "05/01/2017"
}, function(start, end, label) {
  console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
});
</script>


<!-- deposit-withdraw -->
<script>

$('#deposit .withdraw-btn').click(function(event) {
  $( "#deposit .withdraw-content " ).hide();
  $( "#deposit .aj-content" ).load( "account-part/account_deposit.php", function() {
    // alert( "Load was performed deposit." );
  });
});
$('#withdraw .withdraw-btn').click(function(event) {
  $( "#withdraw .withdraw-content " ).hide();
  $( "#withdraw .aj-content" ).load( "account-part/account_withdraw.php", function() {
  });
});

</script>

<!-- BONUSES PROGRESS BAR -->

<script>
    function css3RadialProgressBar() {
  /* Vars */
  var xvaluenow = Math.floor((Math.random() * 100) + 0); //Generates a random number (0-100) only for demonstration
  //var xvaluenow = 0; //Insert here a specific number (0-100) and remove the comment this var, and the above code
  var rotatenum = 'rotate(' + xvaluenow * 1.8 + 'deg)';
  var progress = document.getElementById('progress');
  var progress_circle = document.getElementById('progress-circle');
  var progress_style = document.getElementById('progress-style');
  
  /* Fix: Cover gap with shadow */
  if (xvaluenow == 0) {
    var shadowfix = "0";
  }
  else {
    var shadowfix = "1px";
  }
  
  /* Inserting values */
  progress.innerHTML = xvaluenow + '%';
  progress_circle.setAttribute("aria-valuenow", xvaluenow);  
  progress_style.innerHTML = " \
.p-h:before, .p-f, .p-f:before{ \
-moz-transform: " + rotatenum + "; \
-webkit-transform: " + rotatenum + "; \
-o-transform: " + rotatenum + "; \
-ms-transform: " + rotatenum + "; \
transform: " + rotatenum + "; \
-webkit-box-shadow: 0 0 0 " + shadowfix + " #828282; \
  box-shadow: 0 0 0 " + shadowfix + " #828282;}\
\ ";
}

document.body.onload = function() {css3RadialProgressBar()};
</script>

<?php include 'theme-part/footer.php'; ?>