
<div class="withdraw-inner-content">
								<script>

									$('#back-dep').click(function() {
									  $(this).parents('#deposit').find('.withdraw-content').show();
									  $('.withdraw-inner-content').remove();
									});
									
								</script>

  <div class="deposit-row">
    <div class="deposit-row-inner">
      <div class="img"><img src="images/icon_pay/visa.png" alt=""></div>
      <div class="name"><span>Credit card</span></div>
    </div>
  </div>

	<div class="row">
		<div class="col-md-3">
			<label for="amount"        class="withdraw-label"> Amount       </label>
			<label for="total-amount"  class="withdraw-label"> Total amount </label>
		</div>
		<div class="col-md-7">
			<div class="ui-widget"><input  type="text" id="amount"          class="form-control mini"> <span>USD</span></div>
			<div class="ui-widget"><input  type="text" id="withdraw-amount" class="form-control mini" value="500,12" disabled > <span>USD</span></div>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="buttons">	
		<button class="btn btn-secondary wthbtn" id="back-dep">Back</button>
		<button class="btn btn-primary depbtn" id="deposit">Deposit</button>
	</div>
</div>


