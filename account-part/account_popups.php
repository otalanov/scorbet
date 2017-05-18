
<!-- Modal new mail -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="new-mail" class="modal fade" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
          </div>
          <div class="modal-body">

            <h6>New message</h6>

            <form role="form" class="form-horizontal">
              <div class="form-group">
                <label class="col-lg-2 control-label">To</label>
                  <div class="col-lg-10">
                    <input type="text" placeholder="" id="inputEmail1" class="form-control">
                  </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Cc / Bcc</label>
                <div class="col-lg-10">
                  <input type="text" placeholder="" id="cc" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Subject</label>
                <div class="col-lg-10">
                  <input type="text" placeholder="" id="inputPassword1" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Message</label>
                <div class="col-lg-10">
                  <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <span class="btn green fileinput-button">
                  <i class="fa fa-plus fa fa-white"></i>
                  <span>Attachment</span>
                    <input type="file" name="files[]" multiple="">
                  </span>
                  <button class="btn btn-send btn-primary pull-right" type="submit">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



<!-- balance modal -->


  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="balance" class="modal fade" style="display: none;">
    <div class="modal-dialog balance-popup" id="balance-popup">
      <div class="modal-content">
          <div class="modal-header">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
          </div>
          <div class="modal-body">

            <h6>Balance & Transactions</h6>
              
              <nav>
                <ul class="nav nav-pills balance-nav">
                  <li class="active"><a data-toggle="pill" class="btn btn-primary" href="#deposit">Deposit</a></li>
                  <li><a data-toggle="pill" class="btn btn-primary" href="#withdraw">Withdraw</a></li>
                  <li><a data-toggle="pill" class="btn btn-primary" href="#wallet">Wallet</a></li>
                  <li><a data-toggle="pill" class="btn btn-primary" href="#transactions">Transactions</a></li>
                </ul>
              </nav>

              <div class="tab-content balance-content">
                <div id="deposit" class="tab-pane fade in active">
                  <div class="aj-content"></div>
                  <div class="withdraw-content">
                    <ul>
                      <li class="deposit-group">Credit Card</li>
                      <li class="deposit-row">
                        <div class="deposit-inner">
                          <div class="tablecell img"><img src="images/icon_pay/visa.png" alt=""></div>
                          <div class="tablecell name"><span>Visa</span></div>
                          <div class="tablecell bankfee"><span>Comission: no</span></div>
                          <div class="tablecell max-min">
                            <span>Max: <span class="max">4000 EUR</span></span>
                            <br>
                            <span>Min: <span class="min">1,00 EUR</span></span>
                          </div>
                          <div class="tablecell withdraw-btn"><a class="btn btn-primary">deposit <i class="fa fa-angle-double-right"></i> </a></div>
                        </div>
                      </li>
                      <li class="deposit-row">
                        <div class="deposit-inner">
                          <div class="tablecell img"><img src="images/icon_pay/visa.png" alt=""></div>
                          <div class="tablecell name"><span>Visa</span></div>
                          <div class="tablecell bankfee"><span>Comission: no</span></div>
                          <div class="tablecell max-min">
                            <span>Max: <span class="max">4000 EUR</span></span>
                            <br>
                            <span>Min: <span class="min">1,00 EUR</span></span>
                          </div>
                          <div class="tablecell withdraw-btn"><a class="btn btn-primary">deposit <i class="fa fa-angle-double-right"></i> </a></div>
                        </div>
                      </li>
                      <li class="deposit-row">
                        <div class="deposit-inner">
                          <div class="tablecell img"><img src="images/icon_pay/visa.png" alt=""></div>
                          <div class="tablecell name"><span>Visa</span></div>
                          <div class="tablecell bankfee"><span>Comission: no</span></div>
                          <div class="tablecell max-min">
                            <span>Max: <span class="max">4000 EUR</span></span>
                            <br>
                            <span>Min: <span class="min">1,00 EUR</span></span>
                          </div>
                          <div class="tablecell withdraw-btn"><a class="btn btn-primary">deposit <i class="fa fa-angle-double-right"></i> </a></div>
                        </div>
                      </li>
                      <li class="deposit-row">
                        <div class="deposit-inner">
                          <div class="tablecell img"><img src="images/icon_pay/visa.png" alt=""></div>
                          <div class="tablecell name"><span>Visa</span></div>
                          <div class="tablecell bankfee"><span>Comission: no</span></div>
                          <div class="tablecell max-min">
                            <span>Max: <span class="max">4000 EUR</span></span>
                            <br>
                            <span>Min: <span class="min">1,00 EUR</span></span>
                          </div>
                          <div class="tablecell withdraw-btn"><a class="btn btn-primary">deposit <i class="fa fa-angle-double-right"></i> </a></div>
                        </div>
                      </li>
                    </ul>
                    <ul>
                      <li class="deposit-group">Credit Card</li>
                      <li class="deposit-row">
                        <div class="deposit-inner">
                          <div class="tablecell img"><img src="images/icon_pay/visa.png" alt=""></div>
                          <div class="tablecell name"><span>Visa</span></div>
                          <div class="tablecell bankfee"><span>Comission: no</span></div>
                          <div class="tablecell max-min">
                            <span>Max: <span class="max">4000 EUR</span></span>
                            <br>
                            <span>Min: <span class="min">1,00 EUR</span></span>
                          </div>
                          <div class="tablecell withdraw-btn"><a class="btn btn-primary">deposit <i class="fa fa-angle-double-right"></i> </a></div>
                        </div>
                      </li>
                      <li class="deposit-row">
                        <div class="deposit-inner">
                          <div class="tablecell img"><img src="images/icon_pay/visa.png" alt=""></div>
                          <div class="tablecell name"><span>Visa</span></div>
                          <div class="tablecell bankfee"><span>Comission: no</span></div>
                          <div class="tablecell max-min">
                            <span>Max: <span class="max">4000 EUR</span></span>
                            <br>
                            <span>Min: <span class="min">1,00 EUR</span></span>
                          </div>
                          <div class="tablecell withdraw-btn"><a class="btn btn-primary">deposit <i class="fa fa-angle-double-right"></i> </a></div>
                        </div>
                      </li>
                      <li class="deposit-row">
                        <div class="deposit-inner">
                          <div class="tablecell img"><img src="images/icon_pay/visa.png" alt=""></div>
                          <div class="tablecell name"><span>Visa</span></div>
                          <div class="tablecell bankfee"><span>Comission: no</span></div>
                          <div class="tablecell max-min">
                            <span>Max: <span class="max">4000 EUR</span></span>
                            <br>
                            <span>Min: <span class="min">1,00 EUR</span></span>
                          </div>
                          <div class="tablecell withdraw-btn"><a class="btn btn-primary">deposit <i class="fa fa-angle-double-right"></i> </a></div>
                        </div>
                      </li>
                      <li class="deposit-row">
                        <div class="deposit-inner">
                          <div class="tablecell img"><img src="images/icon_pay/visa.png" alt=""></div>
                          <div class="tablecell name"><span>Visa</span></div>
                          <div class="tablecell bankfee"><span>Comission: no</span></div>
                          <div class="tablecell max-min">
                            <span>Max: <span class="max">4000 EUR</span></span>
                            <br>
                            <span>Min: <span class="min">1,00 EUR</span></span>
                          </div>
                          <div class="tablecell withdraw-btn"><a class="btn btn-primary">deposit <i class="fa fa-angle-double-right"></i> </a></div>
                        </div>
                      </li>
                    </ul>

                  </div>
                </div>
                <div id="withdraw" class="tab-pane fade">
                  <div class="aj-content"></div>
                  <div class="withdraw-content">
                    <ul>
                      <li class="deposit-group" hidden></li>
                      <li class="deposit-row">
                        <div class="deposit-inner">
                          <div class="tablecell img"><img src="images/icon_pay/webmoney.png" alt=""></div>
                          <div class="tablecell name"><span>WebMoney</span></div>
                          <div class="tablecell bankfee"><span>Comission: no</span></div>
                          <div class="tablecell max-min">
                            <span>Max: <span class="max">4000 EUR</span></span>
                            <br>
                            <span>Min: <span class="min">1,00 EUR</span></span>
                          </div>
                          <div class="tablecell withdraw-btn"><a class="btn btn-primary">Withdraw <i class="fa fa-angle-double-right"></i> </a></div>
                        </div>
                      </li>
                      <li class="deposit-row">
                        <div class="deposit-inner">
                          <div class="tablecell img"><img src="images/icon_pay/webmoney.png" alt=""></div>
                          <div class="tablecell name"><span>WebMoney</span></div>
                          <div class="tablecell bankfee"><span>Comission: no</span></div>
                          <div class="tablecell max-min">
                            <span>Max: <span class="max">4000 EUR</span></span>
                            <br>
                            <span>Min: <span class="min">1,00 EUR</span></span>
                          </div>
                          <div class="tablecell withdraw-btn"><a class="btn btn-primary">Withdraw <i class="fa fa-angle-double-right"></i> </a></div>
                        </div>
                      </li>
                      <li class="deposit-row">
                        <div class="deposit-inner">
                          <div class="tablecell img"><img src="images/icon_pay/webmoney.png" alt=""></div>
                          <div class="tablecell name"><span>WebMoney</span></div>
                          <div class="tablecell bankfee"><span>Comission: no</span></div>
                          <div class="tablecell max-min">
                            <span>Max: <span class="max">4000 EUR</span></span>
                            <br>
                            <span>Min: <span class="min">1,00 EUR</span></span>
                          </div>
                          <div class="tablecell withdraw-btn"><a class="btn btn-primary">Withdraw <i class="fa fa-angle-double-right"></i> </a></div>
                        </div>
                      </li>
                      <li class="deposit-row">
                        <div class="deposit-inner">
                          <div class="tablecell img"><img src="images/icon_pay/webmoney.png" alt=""></div>
                          <div class="tablecell name"><span>WebMoney</span></div>
                          <div class="tablecell bankfee"><span>Comission: no</span></div>
                          <div class="tablecell max-min">
                            <span>Max: <span class="max">4000 EUR</span></span>
                            <br>
                            <span>Min: <span class="min">1,00 EUR</span></span>
                          </div>
                          <div class="tablecell withdraw-btn"><a class="btn btn-primary">Withdraw <i class="fa fa-angle-double-right"></i> </a></div>
                        </div>
                      </li>
                    </ul>

                  </div>

                </div>
                <div id="wallet" class="tab-pane fade">

<div class="balance-block">
    <h6 class="my-info-heading block">All balance</h6>  
    <table class="table balance-table">
        <thead>
            <tr>
                <th>
                    
                </th>
                <th>
                    Available
                </th>
                <th>
                    Closed
                </th>
                <th>
                    Bonus
                </th>
                <th>
                    Total 
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="balance-row"> 
                <td>
                    Main account
                </td>
                <td>
                    255.00 TRY
                </td>
                <td class="">
                    -55.00 TRY
                </td>
                <td class="">
                    0.00 TRY
                </td>
                <td class="">
                    200.00 TRY
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="balance-block">
    <h6 class="my-info-heading block">Different lobbies balances</h6>  
    <table class="table balance-table">
        <thead>
            <tr>
                <th>
                    
                </th>
                <th>
                    Available
                </th>
                <th>
                    Withdrawable
                </th>
                <th>
                    Locked
                </th>
                <th>
                    Bonus 
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="balance-row"> 
                <td class="lobby-name">
                    Casino
                </td>
                <td>
                    255.00 TRY
                </td>
                <td class="">
                    0.00 TRY
                </td>
                <td class="">
                    -55.00 TRY
                </td>
                <td class="">
                    0.00 TRY
                </td>
            </tr>
            <tr class="balance-row"> 
                <td class="lobby-name">
                    Live Casino
                </td>
                <td>
                    255.00 TRY
                </td>
                <td class="">
                    0.00 TRY
                </td>
                <td class="">
                    -55.00 TRY
                </td>
                <td class="">
                    0.00 TRY
                </td>
            </tr>
            <tr class="balance-row"> 
                <td class="lobby-name">
                    Sport
                </td>
                <td>
                    255.00 TRY
                </td>
                <td class="">
                    0.00 TRY
                </td>
                <td class="">
                    -55.00 TRY
                </td>
                <td class="">
                    0.00 TRY
                </td>
            </tr>
            <tr class="balance-row"> 
                <td class="lobby-name">
                    Poker
                </td>
                <td>
                    255.00 TRY
                </td>
                <td class="">
                    0.00 TRY
                </td>
                <td class="">
                    -55.00 TRY
                </td>
                <td class="">
                    0.00 TRY
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="buttons">
  <a href="#withdraw" data-toggle="pill" class="btn btn-secondary wthbtn">Withdraw</a>
  <a href="#deposit" data-toggle="pill" class="btn btn-primary depbtn">Deposit</a>
</div>
                </div>
      


                <div id="transactions" class="tab-pane fade">



<div class="tab-container">
<div class="row">
<div class="col-md-12">
<div class="" style="overflow:hidden">


<!-- see initializaition for date-filtering in account-footer.php -->
<div class="datepick-field">
    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
    <span></span> <b class="caret"></b>
    <input class="form-control" type="text" name="daterange" value="01/01/2015 - 01/31/2015" />
</div>



</div>
<div class="bet-history-list">
    <table class="table bet-history-table">
        <thead>
            <tr>
                <th>
                    <a href="#" class="filter-transactions" >
                        Date
                    </a>
                </th>
                <th>
                    <a href="#" class="filter-transactions" >
                        Type
                    </a>
                </th>
                <th>
                    <a href="#" class="filter-transactions" >
                        Description
                    </a>
                </th>
                <th>
                    <a href="#" class="filter-transactions" >
                        Amount 
                    </a>
                </th>
                <th>
                    <a href="#" class="filter-transactions" >
                        Status
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr> 
                <td class="transaction-date">
                    21.01.2017
                </td>
                <td class="transaction-type">
                    Deposit
                </td>
                <td class="transaction-desc">
                    WebMoney
                </td>
                <td class="transaction-amount">
                    2000 TR
                </td>
                <td class="transaction-status">
                    Success
                </td>
            </tr>
            <tr> 
                <td class="transaction-date">
                    21.01.2017
                </td>
                <td class="transaction-type">
                    Deposit
                </td>
                <td class="transaction-desc">
                    WebMoney
                </td>
                <td class="transaction-amount">
                    2000 TR
                </td>
                <td class="transaction-status">
                    Success
                </td>
            </tr>
            <tr> 
                <td class="transaction-date">
                    21.01.2017
                </td>
                <td class="transaction-type">
                    Deposit
                </td>
                <td class="transaction-desc">
                    WebMoney
                </td>
                <td class="transaction-amount">
                    2000 TR
                </td>
                <td class="transaction-status">
                    Success
                </td>
            </tr>
            <tr> 
                <td class="transaction-date">
                    21.01.2017
                </td>
                <td class="transaction-type">
                    Deposit
                </td>
                <td class="transaction-desc">
                    WebMoney
                </td>
                <td class="transaction-amount">
                    2000 TR
                </td>
                <td class="transaction-status">
                    Success
                </td>
            </tr>            

        </tbody>
    </table>
</div>
</div>
</div>
</div>




                </div>
              </div>

          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->





<!-- MODAL SELF EXCLUSION -->


<!-- Modal new mail -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="limitations" class="modal fade" style="display: none;">
    <div class="modal-dialog limitations">
      <div class="modal-content">
          <div class="modal-header">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
          </div>
          <div class="modal-body">

<div class="tab-container">
<div class="row">
  <div class="col-md-6 left-section">
    <div class="form-group limitations">
    <h5 class="my-info-heading block">Limitation</h5> 
    <p class="self-exclusion-text tab-inner-description">
      Use this service in case you need to limit your betting budget.
    </p>
    <div class="radio">
      <label><input type="radio" name="optradio" value="">No limit</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio" value="">Daily</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio" value="">Weekly</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio" value="">Monthly</label>
    </div>
    <div class="form-group">
      <label class="info-label" for="usr">Limit</label>
      <input type="text" class="form-control" id="usr" value="0">
    </div>
    </div>
  </div>
  <div class="col-md-6 right-section">
    <div class="form-group limitations">
    <h5 class="my-info-heading block">Self exclude</h5>
    <p class="self-exclusion-text tab-inner-description">
      If you want to close your account temporarily or permanently, please choose one of the options below.
    </p>
    <div class="radio">
      <label><input type="radio" name="optradio" value="">Close account for the next 7 days</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio" value="">Close account for the next 30 days</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio" value="">Close account for the next 3 months</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio" value="">Close account for the next 6 months</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio" value="">Permanent self exclusion</label>
    </div>
      </div>
  </div>
</div>
<button class="send-info-btn apply-info btn btn-primary btn-center" id="self-close">Accept changes</button>    
</div>

          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->







<!-- Modal DOCS UPLOAD -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="doc-upload" class="modal fade" style="display: none;">
    <div class="modal-dialog doc-upload">
      <div class="modal-content">
          <div class="modal-header">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
          </div>
          <div class="modal-body">

<div class="tab-container">
  <div class="row">
    <div class="col-md-4"><span class="doc-type">Identity Card:</span></div>
    <div class="col-md-4"><label for="file-input1">Select files</label><input type="file" class="doc-upload-btn" id="file-input1" ></div>
  </div>
  <div class="row">
    <div class="col-md-4"><span class="doc-type">The Residence Permit:</span></div>
    <div class="col-md-4"><label for="file-input2">Select files</label><input type="file" class="doc-upload-btn" id="file-input2" ></div>
  </div>
  <div class="row">
    <div class="col-md-4"><span class="doc-type">Credit Card or Proof of Deposit:</span></div>
    <div class="col-md-4"><label for="file-input3">Select files</label><input type="file" class="doc-upload-btn" id="file-input3" ></div>
  </div>


<button class="send-info-btn apply-info btn btn-primary btn-center" id="">Accept changes</button>    


    <table class="table bet-history-table docs-table">
        <thead>
            <tr>
                <th>
                    <a href="#" class="filter-docs" >
                        ID
                    </a>
                </th>
                <th>
                    <a href="#" class="filter-docs" >
                        Status
                    </a>
                </th>
                <th>
                    <a href="#" class="filter-docs" >
                        Date
                    </a>
                </th>
                <th>
                    <a href="#" class="filter-docs" >
                        Type 
                    </a>
                </th>
                <th>
                    <a href="#" class="filter-docs" >
                        Preview
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="approved"> 
                <td class="docs-id">
                    2188017
                </td>
                <td class="docs-status status">
                    <span class="label label-success">
                    Approved
                    </span>
                </td>
                <td class="docs-date">
                    31.12.2018
                </td>
                <td class="docs-type">
                    The residence permit
                </td>
                <td class="docs-preview">
                    <a href="" class="click-preview"><span class="docname">Document name</span></a>
                </td>
            </tr>
            <tr class="approved"> 
                <td class="docs-id">
                    2188017
                </td>
                <td class="docs-status status">
                    <span class="label label-success">
                    Approved
                    </span>
                </td>
                <td class="docs-date">
                    31.12.2018
                </td>
                <td class="docs-type">
                    The residence permit
                </td>
                <td class="docs-preview">
                    <a href="" class="click-preview"><span class="docname">Document name</span></a>
                </td>
            </tr> 
            <tr class="hold"> 
                <td class="docs-id">
                    2188017
                </td>
                <td class="docs-status status">
                    <span class="label label-info">
                    Hold
                    </span>
                </td>
                <td class="docs-date">
                    31.12.2018
                </td>
                <td class="docs-type">
                    The residence permit
                </td>
                <td class="docs-preview">
                    <a href="" class="click-preview"><span class="docname">Document name</span></a>
                </td>
            </tr>
            <tr class="hold"> 
                <td class="docs-id">
                    2188017
                </td>
                <td class="docs-status status">
                    <span class="label label-info">
                    Hold
                    </span>
                </td>
                <td class="docs-date">
                    31.12.2018
                </td>
                <td class="docs-type">
                    The residence permit
                </td>
                <td class="docs-preview">
                    <a href="" class="click-preview"><span class="docname">Document name</span></a>
                </td>
            </tr>
            <tr class="reject"> 
                <td class="docs-id">
                    2188017
                </td>
                <td class="docs-status status">
                    <span class="label label-danger">
                    Rejected
                    </span>
                </td>
                <td class="docs-date">
                    31.12.2018
                </td>
                <td class="docs-type">
                    The residence permit
                </td>
                <td class="docs-preview">
                    <a href="" class="click-preview"><span class="docname">Document name</span></a>
                </td>
            </tr>        

        </tbody>
    </table>

</div>

          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  
