<div class="mail-box-outer">
<!-- <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'> -->
 <div class="mail-box" style="">
                  <div class="lg-side">
                      <div class="inbox-head">
                          <h5 class="my-info-heading">
                            Inbox
                          </h5>
                          <form action="#" class="pull-right position">
                            <div class="search-input">
                              <input type="search" class="form-control search" id="searchMail" placeholder="Search mail">
                              <button class="search-submit-btn" id="search-submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                              </button>
                            </div>
                          </form>
                      </div>


                      <div class="inbox-body" id="inbox-body">
                        <div id="inbox-mail-inner"></div>
                        <div class="inbox-body-inner" id="inbox-body-inner">
                         <div class="mail-option">
                          <div class="row">


                            <a href="#new-mail" data-toggle="modal"  title="Compose"    class="btn btn-compose">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Compose
                            </a>
                              <div class="tgl-outer">  
                                <input class="tgl" id="mail-tgl" type="checkbox"/>
                                <label class="tgl-btn" data-tg-off="Inbox" data-tg-on="Sent" for="mail-tgl"></label>
                              </div>
                            </div>
                            <div class="row mail-controls">
                             <div class="btn-group">
                              <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                               <a data-toggle="dropdown" href="#" class="btn mini dropdown-toggle all" aria-expanded="false">
                                   All
                                   <i class="fa fa-angle-down "></i>
                               </a>
                               <ul class="dropdown-menu">
                                   <li><a href="#"> None</a></li>
                                   <li><a href="#"> Read</a></li>
                                   <li><a href="#"> Unread</a></li>
                               </ul>
                             </div>

                             <div class="btn-group">
                                 <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                     <i class=" fa fa-refresh"></i>
                                 </a>
                             </div>
                             <div class="btn-group hidden-phone">
                                 <a data-toggle="dropdown" href="#" class="btn mini dropdown-toggle blue" aria-expanded="false">
                                     More
                                     <i class="fa fa-angle-down "></i>
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                     <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                     <li class="divider"></li>
                                     <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                 </ul>
                             </div>
                             <div class="btn-group">
                                 <a data-toggle="dropdown" href="#" class="btn mini dropdown-toggle blue">
                                     Move to
                                     <i class="fa fa-angle-down "></i>
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                     <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                     <li class="divider"></li>
                                     <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                 </ul>
                             </div>
                             <ul class="unstyled inbox-pagination pull-right">
                                 <li>
                                     <a class="np-btn disabled" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                 </li>
                                 <li><span>1-50 of 234</span></li>
                                 <li>
                                     <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                 </li>
                             </ul>
                          </div>
                         </div>
                        <div class="loader-outer" id="inbox-loader">
                          <div class="lazy-loader">
                            <div id="block_1" class="barlittle"></div>
                            <div id="block_2" class="barlittle"></div>
                            <div id="block_3" class="barlittle"></div>
                            <div id="block_4" class="barlittle"></div>
                            <div id="block_5" class="barlittle"></div>
                          </div>                  
                        </div>
                          <table class="table table-inbox table-hover">
                            <tbody>
                              <tr class="mail-item unread">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message  dont-show">PHPClass</td>
                                  <td class="view-message ">Added a new class: Login Class Fast Site</td>
                                  <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                  <td class="view-message  text-right mail-time">9:27 AM</td>
                              </tr>
                              <tr class="mail-item unread">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message dont-show">Google Webmaster </td>
                                  <td class="view-message">Improve the search presence of WebSite</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right mail-time">Mar, 15</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message dont-show">JW Player</td>
                                  <td class="view-message">Last Chance: Upgrade to Pro for </td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right mail-time">Mar, 15</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message dont-show">Tim Reid, S P N</td>
                                  <td class="view-message">Boost Your Website Traffic</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right mail-time">Apr, 01</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message dont-show">Freelancer.com <span class="label label-danger pull-right">urgent</span></td>
                                  <td class="view-message">Stop wasting your visitors </td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right mail-time">May, 23</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message dont-show">WOW Slider </td>
                                  <td class="view-message">New WOW Slider v7.8 - 67% off</td>
                                  <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                  <td class="view-message text-right mail-time">Mar, 14</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message dont-show">LinkedIn Pulse</td>
                                  <td class="view-message">The One Sign Your Co-Worker Will Stab</td>
                                  <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                  <td class="view-message text-right mail-time">Feb, 19</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message dont-show">Drupal Community<span class="label label-success pull-right">megazine</span></td>
                                  <td class="view-message view-message">Welcome to the Drupal Community</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right mail-time">Mar, 04</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message dont-show">Facebook</td>
                                  <td class="view-message view-message">Somebody requested a new password </td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right mail-time">Jun, 13</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message dont-show">Skype <span class="label label-info pull-right">family</span></td>
                                  <td class="view-message view-message">Password successfully changed</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right mail-time">Mar, 24</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message dont-show">Google+</td>
                                  <td class="view-message">alireza, do you know</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right mail-time">Mar, 09</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="dont-show">Zoosk </td>
                                  <td class="view-message">7 new singles we think you'll like</td>
                                  <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                  <td class="view-message text-right mail-time">May, 14</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message dont-show">LinkedIn </td>
                                  <td class="view-message">Alireza: Nokia Networks, System Group and </td>
                                  <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                  <td class="view-message text-right mail-time">Feb, 25</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="dont-show">Facebook</td>
                                  <td class="view-message view-message">Your account was recently logged into</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right mail-time">Mar, 14</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message dont-show">Twitter</td>
                                  <td class="view-message">Your Twitter password has been changed</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right mail-time">Apr, 07</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message dont-show">InternetSeer Website Monitoring</td>
                                  <td class="view-message">http://golddesigner.org/ Performance Report</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right mail-time">Jul, 14</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message dont-show">AddMe.com</td>
                                  <td class="view-message">Submit Your Website to the AddMe Business Directory</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right mail-time">Aug, 10</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message dont-show">Terri Rexer, S P N</td>
                                  <td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
                                  <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                  <td class="view-message text-right mail-time">Apr, 14</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message dont-show">Bertina </td>
                                  <td class="view-message">IMPORTANT: Don't lose your domains!</td>
                                  <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                  <td class="view-message text-right mail-time">Jun, 16</td>
                              </tr>
                              <tr class="mail-item ">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="view-message dont-show">Laura Gaffin, S P N </td>
                                  <td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right mail-time">Aug, 10</td>
                              </tr>
                          </tbody>
                          </table>
                        </div>
                      </div>
                  </div>
              </div>
</div>