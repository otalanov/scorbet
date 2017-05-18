<div class="notification_box error_box">
    <span class="notification_box_close"> 
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" enable-background="new 0 0 40 40"> <line x1="5" y1="5" x2="35" y2="35" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"></line> <line x1="35" y1="5" x2="5" y2="35" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"></line> </svg> 
    </span>
    
    <div class="notification_box_text">
        <div class="notification_box_text_heading">
            Error
        </div>
        <div class="notification_box_text_caption">
            Please Login to Your Account
        </div>
        
        <a href="#" class="btn btn-default">Login</a>
        <a href="#" class="btn btn-default">Registration</a>
        
    </div>
</div>




<div class="notification_box success_box">
    <span class="notification_box_close"> 
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" enable-background="new 0 0 40 40"> <line x1="5" y1="5" x2="35" y2="35" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"></line> <line x1="35" y1="5" x2="5" y2="35" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"></line> </svg> 
    </span>
    
    <div class="notification_box_text">
        <div class="notification_box_text_heading">
            Аccepted
        </div>
        <div class="notification_box_text_caption">
            Please Login to Your Account
        </div>
    </div>
</div>






<div class="notification_box warning_box">
    <span class="notification_box_close"> 
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" enable-background="new 0 0 40 40"> <line x1="5" y1="5" x2="35" y2="35" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"></line> <line x1="35" y1="5" x2="5" y2="35" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"></line> </svg> 
    </span>
    
    <div class="notification_box_text">
        <div class="notification_box_text_heading">
            Warning
        </div>
        <div class="notification_box_text_caption">
            Please Login to Your Account
        </div>
    </div>
</div>




<script>

    $('.show-error').click(function() {
        $(this).parents('body').find('.notification_box.error_box').addClass('active');
        setTimeout(function() {
            $('.notification_box.active').removeClass('active');
        }, 4000);
    });
    $('.notification_box_close').click(function() {
        $(this).parents('.notification_box.error_box').removeClass('active');
    });
    

     $('.show-success').click(function() {
        $(this).parents('body').find('.notification_box.success_box').addClass('active');
        setTimeout(function() {
            $('.notification_box.active').removeClass('active');
        }, 4000);
    });
    $('.notification_box_close').click(function() {
        $(this).parents('.notification_box.success_box').removeClass('active');
    });
    
         $('.show-warning').click(function() {
        $(this).parents('body').find('.notification_box.warning_box').addClass('active');
        setTimeout(function() {
            $('.notification_box.active').removeClass('active');
        }, 4000);
    });
    $('.notification_box_close').click(function() {
        $(this).parents('.notification_box.warning_box').removeClass('active');
    });
    
    
</script>








