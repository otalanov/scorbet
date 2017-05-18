
	<button id="mail-back"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to inbox</button>


    <form class="form-horizontal">
            <div class="panel mail-wrapper rounded shadow">
                <div class="panel-sub-heading inner-all">
                    <div class="pull-left">
                        <h3 class="lead no-margin">Mail object</h3>
                    </div>
                    <div class="pull-right mail-controls">
                        <button class="btn btn-info btn-sm tooltips" data-container="body" data-original-title="Print" type="button" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-print"></i> </button>
                        <button class="btn btn-danger btn-sm tooltips" data-container="body" data-original-title="Trash" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-trash-o"></i></button>
                        <a href="#mail-compose.html" class="btn btn-success btn-sm"><i class="fa fa-reply"></i> Reply</a>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-sub-heading -->
                <div class="panel-sub-heading inner-all">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-7 athr-inf">
                            <img src="/images/logos.png" alt="scorbet" class="senden-img">
                            <a href="mailto:" class="sender-name"></a>
                            to
                            <strong>Me</strong>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-5">
                            <p class="pull-right"> 10:15AM 02 FEB 2014</p>
                        </div>
                    </div>
                </div><!-- /.panel-sub-heading -->
                <div class="panel-body">
                    <div class="view-mail">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                        <p>
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        </p>
                    </div><!-- /.view-mail -->
                    <div class="attachment-mail">
                        <p>
                            <span><i class="fa fa-paperclip"></i> 3 attachments — </span>
                            <a href="#">Download all attachments</a>
                            |
                            <a href="#">View all images</a>
                        </p>
                        <ul>
                            <li>
                                <a class="atch-thumb" href="#" data-toggle="modal" data-target=".bs-example-modal-photo1">
                                    <img  src="http://lorempixel.com/200/200/nature/5/" alt="...">
                                </a>

                                <a class="name" href="#">
                                    IMG_001.jpg
                                    <span>20KB</span>
                                </a>

                                <div class="links">
                                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-photo1">View</a> -
                                    <a href="#">Download</a>
                                </div>

                            </li>

                            <li>
                                <a class="atch-thumb" href="#" data-toggle="modal" data-target=".bs-example-modal-photo2">
                                    <img  src="http://lorempixel.com/200/200/nature/6/" alt="...">
                                </a>

                                <a class="name" href="#">
                                    IMG_002.jpg
                                    <span>15KB</span>
                                </a>

                                <div class="links">
                                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-photo2">View</a> -
                                    <a href="#">Download</a>
                                </div>
                            </li>

                            <li>
                                <a class="atch-thumb" href="#" data-toggle="modal" data-target=".bs-example-modal-photo3">
                                    <img  src="http://lorempixel.com/200/200/nature/7/" alt="...">
                                </a>

                                <a class="name" href="#">
                                    IMG_003.jpg
                                    <span>13KB</span>
                                </a>

                                <div class="links" data-toggle="modal" data-target=".bs-example-modal-photo3">
                                    <a href="#">View</a> -
                                    <a href="">Download</a>
                                </div>
                            </li>

                        </ul>
                    </div><!-- /.attachment mail -->
                </div><!-- /.panel-body -->
                <div class="panel-footer">
                    <div class="pull-right">
                        <a href="#mail-compose.html" class="btn btn-success btn-sm"><i class="fa fa-reply"></i> Reply</a>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-arrow-right"></i> Forward</button>
                        <button class="btn btn-info btn-sm tooltips" data-container="body" data-original-title="Print" type="button" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-print"></i> </button>
                        <button class="btn btn-danger btn-sm tooltips" data-container="body" data-original-title="Trash" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-trash-o"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-footer -->
            </div><!-- /.panel -->
        </form>
        <!--/ End form compose mail -->


<script>
    $('#mail-back').click(function(){
      $(this).parents('#inbox-body').children('#inbox-body-inner').show();
      $(this).parents('#inbox-body').children('#inbox-mail-inner').empty();
    });
</script>