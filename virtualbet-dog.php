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
                    <span class="live-scorbet-football"></span> Soccer
                </a>
                <a href="/virtualbet-horse.php">
                    <span class="horseracint_icon"></span> Horse Rasing
                </a>
                <a href="/virtualbet-dog.php" class="active">
                    <span class="dogint_icon"></span> Greyhounds
                </a>
                <a href="/virtualbet-tenis.php">
                    <span class="live-scorbet-tennis-ball"></span> Tennis
                </a>
                <a href="/virtualbet-basketball.php">
                    <span class="live-scorbet-ball-of-basketball"></span> Basketball
                </a>
            </div>

            <div class="col-md-10 col-md-offset-2">
                <iframe frameborder="0" allowtransparency="true" name="vfl_iframe" id="vfl_iframe" width="758px" height="520px" scrolling="no" src="https://www.betadonis.com/vflbb/vleague.php?clientid=1609&amp;lang=en&amp;style=betadonis"></iframe>

            </div>
            <div class="col-md-10 col-md-offset-2">

                <div class="virtual-bets-outer">

                    <div class="virtual-bets-container greyhounds">
                        <div class="virtual-bets-filter flex">
                            <a href="#tab1" data-toggle="tab" class="virt-tab active"><span>Winner Place</span></a>
                            <a href="#tab2" data-toggle="tab" class="virt-tab"><span>Dual Forecast</span></a>
                            <a href="#tab3" data-toggle="tab" class="virt-tab"><span>Trial Forecast</span></a>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active fade in" id="tab1">
                                <div class="row table-head">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-2">Race winner</div>
                                    <div class="col-md-2">To place 3rd</div>
                                    <div class="col-md-2">Show</div>
                                </div>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-1.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-1.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-1.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-1.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-1.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-1.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-1.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-1.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-1.php'; ?>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <div class="row">
                                    <div class="col-md-6">Straight Forecast</div>
                                    <div class="col-md-6">Dual Forecast</div>
                                </div>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-2.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-2.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-2.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-2.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-2.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-2.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-2.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-2.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-2.php'; ?>
                            </div>
                            <div class="tab-pane fade" id="tab3">
                                <div class="row">
                                    <div class="col-md-6">Straight Tricast</div>
                                    <div class="col-md-6">Dual Tricast</div>
                                </div>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-3.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-3.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-3.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-3.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-3.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-3.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-3.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-3.php'; ?>
                                <?php include 'virtual-part/virtual/virtual-bets-greyhounds-3.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>



        </div>
    </div>
    <?php include 'livesport-part/betslips_block.php'; ?>
    <!--- Left Sidebar & content -->

</div>

<?php include 'theme-part/footer_line.php'; ?>


<?php include 'theme-part/scripts.php'; ?>



<script type="text/javascript" src="js/interact.min.js"></script>


<script>
    $('.panel-heading > a').click(function() {
        if ($(this).parent().children('.in').length > 0 || $(this).parent().parent().children('.in').length > 0) {
            $(this).children('.fa-chevron-down').removeClass('chevron-animate');
        } else {
            if ($(this).parent()[0].tagName.toLowerCase() == 'div') {
                $(this).closest('div.menu-live').find('div > div > a .fa-chevron-down').removeClass('chevron-animate');
            } else {
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
        x = 0,
        y = 0;

    interact(element)
        .draggable({
            snap: {
                targets: [
                    interact.createSnapGrid({
                        x: 30,
                        y: 30
                    })
                ],
                range: Infinity,
                relativePoints: [{
                    x: 0,
                    y: 0
                }]
            },
            inertia: true,
            restrict: {
                restriction: element.parentNode,
                elementRect: {
                    top: 0,
                    left: 0,
                    bottom: 1,
                    right: 1
                },
                endOnly: true
            }
        })
        .on('dragmove', function(event) {
            x += event.dx;
            y += event.dy;

            event.target.style.webkitTransform =
                event.target.style.transform =
                'translate(' + x + 'px, ' + y + 'px)';
        });

</script>

<script>
    $('.show-detail').click(function() {
        $(this).parents('.row').next().toggle();
    });
    $('.show-detail-handicap').click(function() {
        $(this).parents('.row').next().next().toggle();
    });
    $('.virt-tab').click(function() {
        $(this).parents('.virtual-bets-filter')
            .find('.virt-tab.active')
            .removeClass('active');
        $(this).addClass('active');
    });

</script>


<link href="css/livesport.css" rel="stylesheet">
<link href="css/flag-icon.min.css" rel="stylesheet">

<?php include 'theme-part/footer.php'; ?>
