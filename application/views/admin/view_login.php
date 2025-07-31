<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
        <title>Shop/login</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/style.css">
        <script src="<?php echo base_url() ?>bootstrap/js/jquery.min.js" type="text/javascript"></script>     
        <style>
            body{overflow-x: hidden}
            .h-100{
                height:100%;
            }
            .w-100{
                width:100%;
            }
            body{
                display:flex;
                flex-direction:column;
                align-items:center;
                justify-content:center;
            }
        
        </style>

        <!-- Latest compiled and minified JavaScript -->

    </head>
    <body>
        <div class="row clearfix w-100">
            <div class="col-md-12">
                    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="<?php echo base_url() ?>">Jewelry Shop</a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav pull-right">
                                <li class="active">
                                    <a href="<?php echo base_url() ?>"><i class="glyphicon glyphicon-th"></i>&nbsp;&nbsp;App</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
            </div>
        </div>

        <div class="container" style="margin-top: 62px;">
	<div class="row clearfix">
		<div class="col-md-4 column">
		</div>
            
            
		<div class="col-md-4 column well rounded-0">
                    <p id="ret" class="mb-0"></p>
                    <fieldset>
                        <legend class="text-center">Admin Login</legend>
                        <form role="form" id="form_login" method="POST" action="<?php echo base_url() ?>admin/login">
                            <div class="form-group">
                                <label for="username" class="control-label">Username</label>
                                <input type="text" name="username" class="form-control rounded-0" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Password</label>
                                <input type="password" name="password" class="form-control rounded-0" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary rounded-0 w-100" name="submit_login">Login</button>
                                </div>
                            </div>
                        </form>
                    </fieldset>
                    
                    
                    
		</div>
            
            
		<div class="col-md-4 column">
		</div>
	</div>
    </div>
            
            <div class="footer">
               Jewelry Shop System &copy; <?= date("Y") ?>
            </div>
        
        
        <script src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
        <script>
        
        $(function(){
        $( "#form_login" ).submit(function( event ) {
            $("#ret").html('<img src="<?php echo base_url() ?>bootstrap/images/loader.GIF"/>');
            var self = $(this);
            var url = self.attr('action');
            console.log(url);
            $.ajax({
                url: url,
                data: self.serialize(),
                type: self.attr('method')
              }).done(function(data) {
                  if(data !=='')
                      {
                  $("#ret").html(data);
                $('#form_login')[0].reset();
                      }
                      else
                          {
                           window.location.href='<?php echo base_url() ?>dashbord/';   
                          }
              });
            event.preventDefault();
        });
    });
        
        </script>
    </body>
</html>
