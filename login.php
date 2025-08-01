<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Online Jewelry </b>Shop</a>
  </div>


  <div class="card">
    <div class="card-body login-card-body">
      
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" id="login-form">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" required placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">


              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" required placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">


              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">

                Remember Me
              </label>
            </div>
          </div>

          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>

       
        </div>
      </form>
      <p class="mb-0">
        <a href="signup.php" class="text-center">Create Account</a>
      </p>
    </div>

  </div>
</div>

<script>
	$(document).ready(function(){
		$('#login-form').submit(function(e){
		e.preventDefault()
		start_load()
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'admin/ajax.php?action=login2',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
				end_load();

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					end_load();
				}
			}
		})
	})
	})
</script>
<?php include 'footer.php' ?>

</body>
</html>
