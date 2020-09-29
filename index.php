<?php include('index_header.php'); ?>
			<?php include('dbcon.php'); ?>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <!-- <div class="codrops-top">
                <div class="clr"><div class="title">Red Social ConfiguroWeb</div></div>
            </div>/ Codrops top bar -->
            <section>						
                <div id="container_demo" >
				
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div style="overflow:hidden;">
                        <div id="info_login" style="float: left;width:55%;">
                            <img src="./images/login_image.PNG" alt="" id="login_image" >
                        </div>
                        <div id="line_vertical" style="float: left;width:5%;">
                        </div>
                        <div style="float: left;width:30%;">
                            <div id="wrapper" style="margin:1px !important">         
                                <div class="animate form" id="content_login">
                                    <img src="./images/login_header.PNG" alt="" style="margin-left:15%">
                                    <?php include('login_form.php'); ?>
                                </div>
                                <div id="register" class="animate form">
                                        <?php include('sign_up_form.php'); ?>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
