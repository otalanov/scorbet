<?php include 'part/head.php';?>

<body class="virtual-betting">

<?php include 'part/header-top.php';?>

<header>

<?php include 'part/header-inside.php';?>
   
</header>
    

<div class="container">

    <div class="betslip-line-container">
        <?php include 'part/betslips.php';?>
    </div>  


        <div class="virtual-outer">
            <div class="panel with-nav-tabs stream-content panel-default">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs stream-nav">
                                <li class="active stream-nav-item unexp">
                                    <a href="virtual-betting.php"><img src="icon/soccer-ball-variant.svg" alt="Soccer" title="Soccer" class="virt-img">Soccer</a>
                                </li>
                                <li class="stream-nav-item">
                                    <a href="virtual-horse-riding.php"><img src="icon/horse-silhouette.svg" alt="Horse racing" title="Horse racing" class="virt-img">Horse rasing</a>
                                </li>
                                <li class="stream-nav-item">
                                    <a href="virtual-greyhounds.php"><img src="icon/shape.svg" alt="Greyhound" title="Greyhound" class="virt-img">Greyhound</a>
                                </li>
                                <li class="stream-nav-item">
                                    <a href="virtual-tennis.php"><img src="icon/tennis-ball.svg" alt="Tennis" title="Tennis" class="virt-img">Tennis</a>
                                </li>
                                <li class="stream-nav-item">
                                    <a href="virtual-basketball.php"><img src="icon/basketball.svg" alt="Basketball" title="Basketball" class="virt-img">Basketball</a>
                                </li>
                            </ul>
                        </div>
                        <div class="promo-iframe">
                            <iframe name="BetGamesWidget_iframe_1" frameborder="0" id="BetGamesWidget_iframe_1" scrolling="no" src="https://widget02.betgames.tv/app/ru/betadonis/5d2d3c13-7c55-49c2-8d77-9682c8e37d71/eur?iframe_url=https%3A%2F%2Fwww.betadonis.com%2Fru%2Fbetonpoker%2Fhome" width="291" height="398" style="display:block; margin:0 auto;"></iframe>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1default">                
                                    <iframe frameborder="0" allowtransparency="true" name="vfl_iframe" id="vfl_iframe" width="758px" height="520px" scrolling="no" src="https://www.betadonis.com/vflbb/vleague.php?clientid=1609&amp;lang=en&amp;style=betadonis"></iframe>
                                </div>
                                <div class="tab-pane fade" id="tab2default">
                                    <div class="lazy-loader">
                                        <div class='load-container'>
                                          <div class='triangle'></div>
                                          <div class='triangle'></div>
                                          <div class='triangle'></div>
                                          <div class='triangle'></div>
                                          <div class='triangle'></div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="tab-pane fade" id="tab3default">
                                    <div class="lazy-loader">
                                        <div class='load-container'>
                                          <div class='triangle'></div>
                                          <div class='triangle'></div>
                                          <div class='triangle'></div>
                                          <div class='triangle'></div>
                                          <div class='triangle'></div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="tab-pane fade" id="tab4default">
                                    <div class="lazy-loader">
                                        <div class='load-container'>
                                          <div class='triangle'></div>
                                          <div class='triangle'></div>
                                          <div class='triangle'></div>
                                          <div class='triangle'></div>
                                          <div class='triangle'></div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="virtual-bets-outer">
            <!-- football -->
            <div class="virtual-bets-container football">
                <div class="virtual-bets-filter flex">
                    <a href="#tab1" data-toggle="tab" class="virt-tab active"><span>Match winner</span></a>
                    <a href="#tab2" data-toggle="tab" class="virt-tab"><span>Halftime</span></a>
                    <a href="#tab3" data-toggle="tab" class="virt-tab"><span>Correct score</span></a>
                    <a href="#tab4" data-toggle="tab" class="virt-tab"><span>Next goal (0:0)</span></a>
                    <a href="#tab5" data-toggle="tab" class="virt-tab"><span>Handicap (SF)</span></a>
                    <a href="#tab6" data-toggle="tab" class="virt-tab"><span>Over/Under (SF)</span></a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active fade in" id="tab1">
                        <div id="privet"><?php include 'part/virtual-bets-football-1.php'; ?></div> 
                        <?php include 'part/virtual/virtual-bets-football-1.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-1.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-1.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-1.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-1.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-1.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-1.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-1.php'; ?>  
                    </div>
                    <div class="tab-pane fade" id="tab2">
                        <div id="privet"><?php include 'part/virtual-bets-football-2.php'; ?></div> 
                        <?php include 'part/virtual/virtual-bets-football-2.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-2.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-2.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-2.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-2.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-2.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-2.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-2.php'; ?>  
                    </div>
                    <div class="tab-pane fade score" id="tab3">
                        <div id="privet"><?php include 'part/virtual-bets-football-3.php'; ?></div> 
                        <?php include 'part/virtual/virtual-bets-football-3.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-3.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-3.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-3.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-3.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-3.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-3.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-3.php'; ?> 
                    </div>
                    <div class="tab-pane fade" id="tab4">
                        <div id="privet"><?php include 'part/virtual-bets-football-4.php'; ?></div> 
                        <?php include 'part/virtual/virtual-bets-football-4.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-4.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-4.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-4.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-4.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-4.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-4.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-4.php'; ?>                         
                    </div>
                    <div class="tab-pane fade" id="tab5">
                        <div id="privet"><?php include 'part/virtual-bets-football-5.php'; ?></div> 
                        <?php include 'part/virtual/virtual-bets-football-5.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-5.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-5.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-5.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-5.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-5.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-5.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-5.php'; ?>                          
                    </div>
                    <div class="tab-pane fade" id="tab6">
                        <div id="privet"><?php include 'part/virtual-bets-football-6.php'; ?></div> 
                        <?php include 'part/virtual/virtual-bets-football-6.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-6.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-6.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-6.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-6.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-6.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-6.php'; ?>             
                        <?php include 'part/virtual/virtual-bets-football-6.php'; ?>                          
                    </div>
                </div>           
            </div>
        </div>
    </div>
</div>

<?php include 'part/footer/footer-inside.php';?>
<?php include 'script.php'; ?>

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

</body>

</html>







