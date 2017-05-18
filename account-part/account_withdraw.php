
<div class="withdraw-inner-content">
								<script>
									$( function() {
								  var country_list = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"]; 

								    $("#country-name").autocomplete({
								      source:country_list,
								    });
								  });

									$( function() {
								  var banks_list = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"]; 

								    $("#bank-name").autocomplete({
								      source:banks_list,
								    });
								  });

									$('#back-wth').click(function() {
									  $(this).parents('#withdraw').find('.withdraw-content').show();
									  $('.withdraw-inner-content').remove();
									});
									
								</script>
	<div class="row">
		<div class="col-md-3">
			<label for="country-name"     class="withdraw-label"> Country         </label>
			<label for="bank-name"        class="withdraw-label"> Bank name       </label>
			<label for="branch-code"      class="withdraw-label"> Branch code     </label>
			<label for="branch-name"      class="withdraw-label"> Branch name     </label>
			<label for="account-number"   class="withdraw-label"> Account number  </label>
			<label for="currency-code"    class="withdraw-label"> Currency code   </label>
			<label for="swift-code"       class="withdraw-label"> Swift code      </label>
			<label for="iban"             class="withdraw-label"> IBAN            </label>
			<label for="date-birth"       class="withdraw-label"> Date of birth   </label>
			<label for="amount"           class="withdraw-label"> Amount          </label>
			<label for="withdraw-amount"  class="withdraw-label"> Withdraw amount </label>
		</div>
		<div class="col-md-7">
			<div class="ui-widget"><input  type="text" id="country-name"    class="form-control" value="USA"></div>
			<div class="ui-widget"><input  type="text" id="bank-name"       class="form-control" value="Wells Fargo"></div>
			<div class="ui-widget"><input  type="text" id="branch-code"     class="form-control"></div>
			<div class="ui-widget"><input  type="text" id="branch-name"     class="form-control"></div>
			<div class="ui-widget"><input  type="text" id="account-number"  class="form-control"></div>
			<div class="ui-widget">
				<select name="currency-code"  id="currency-code"   class="form-control">
					<option value="USD">USD</option>
					<option value="EUR">EUR</option>
					<option value="TR">TR</option>
					<option value="UAH">UAH</option>
					<option value="CZ">CZ</option>
					<option value="RUB">RUB</option>
					<option value="BYR">BYR</option>
					<option value="PLN">PLN</option>
				</select>
			</div>
			<div class="ui-widget"><input  type="text" id="swift-code"      class="form-control"></div>
			<div class="ui-widget"><input  type="text" id="iban"            class="form-control"></div>
			<div class="ui-widget"><input  type="text" id="date-birth"      class="form-control"></div>
			<div class="ui-widget"><input  type="text" id="amount"          class="form-control mini"> <span>USD</span></div>
			<div class="ui-widget"><input  type="text" id="withdraw-amount" class="form-control mini" value="500,12" disabled > <span>USD</span></div>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="buttons">	
		<button class="btn btn-secondary wthbtn" id="back-wth">Back</button>
		<button class="btn btn-primary depbtn" id="withdraw">Withdraw</button>
	</div>
</div>


