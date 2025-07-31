<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php 
	include 'header.php' 
?>
<body class="hold-transition layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">
<div class="wrapper">
  
</head>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
    /* *{
        font-family: "Poppins";
        padding: 0;
        margin: 0;
        scroll-behavior: smooth;
        box-sizing: border-box;
    } */

body{
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
}    
 
.msg{
    padding-left: 600px;
}
.contact-container{
    max-width: 960px;
    margin: auto;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
    /* background: linear-gradient(white, rgb(168, 8, 168)); */
    box-shadow: 0 0 2rem hsla(0 0 0 /16%) ;
    border-radius: 0.5rem;
    overflow: hidden;
}

.form-container h3{
    color: black;
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 1rem;
    margin-left: 170px;
}
.contact-form{
    display: grid;
    row-gap: 1rem;
}

.contact-form input{
    width: 100%;
    border: none;
    outline: none;
    background: white;
    padding: 10px;
    font-size: 0.9rem;
    color: black;
    border-radius: 0.4rem;
}

.contact-form textarea{
    resize: none;
    height: 200px;
    background:  white;
}

.contact-form .send-button{
    border: none;
    outline: none;
    background: purple;
    font-size: 500;
    text-transform: uppercase;
    cursor: pointer;
}

.contact-form .send-button:hover{
    background: rgb(168, 40, 160);
    transition: 0,3s all linear;
}

.map iframe{
    width: 100%;
    height: 100%;
}

/* Reponsive */
@media (width < 860px) {
  #menu_toggle {
    display: block;
  }
  .nav {
    padding: 0 20px;
    background-color: #fff;
  }

  .menu_items {
    position: fixed;
    top: 0;
    width: 260px;
    background-color: #fff;
    height: 100%;
    left: -100%;
    padding: 50px 30px 30px;
    flex-direction: column;
    transition: all 0.5s ease;
  }
  .showMenu .menu_items {
    left: 0;
  }
  a {
    color: #333;
  }
  #menu_toggle {
    width: 20px;
    cursor: pointer;
  }
  .menu_items #menu_toggle {
    position: absolute;
    top: 20px;
    right: 20px;
  }
  @media (max-width:991px){

html{
   font-size: 55%;
}

}

@media (max-width:768px){

.products-preview .preview img{
   height: 25rem;
}

}

@media (max-width:450px){

html{
   font-size: 50%;
}

}
}
span{
  color: rgb(238, 177, 187);
  top: 0;
}
</style>
<script src="../custom-scripts.js" defer></script>
<body>
  <main>
    <!-- Header Start -->
    <header>
        <!--  Navbar Start -->
<div class="container">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-primary navbar-dark ">
    <!-- Left navbar links -->
    <div class="container">
      <ul class="navbar-nav">
        <?php if(isset($_SESSION['login_id'])): ?>
        <li class="nav-item">
          <!-- <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a> -->
        </li>
      <?php endif; ?>
        <li>
          <a class="nav-link text-white"  href="./" role="button"> <large><b><img src="B_B.png" style="height:150px; margin-left: -65px; margin-top: -55px; "></img> </b></large></a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
       
        <li class="nav-item">
          <a class="nav-link nav-home" href="index.php">
            <b>Home</b>
          </a>
        </li>
    </header>
     <!-- Header End -->
      <br>
      <br>
      <br>
      <br>

    <section>
        <div class="contact-container">
        <h4 style="padding-left: 320px;" >Message Us</h3>  <br>
            <form action="contact.php" method="POST">
                <div class="mb-3">
                    <label for="fn" class="form-label"><b>Full Name</b></label>
                    <input type="text" class="form-control" id="fn" name="fname" required>
                </div>
                <div class="mb-3">
                    <label for="em" class="form-label"><b>Email Address</b></label>
                    <input type="email" class="form-control" id="em" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="phnum" class="form-label"><b>Phone Number</b></label>
                    <input type="text" class="form-control" id="phnum" name="phonenum" required>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mb-5">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>


<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.1286325541587!2d67.03692389678957!3d24.927687500000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f9bbfffffff%3A0x21ad56e18eb2b3e8!2sZiauddin%20University%20Faculty%20of%20Engineering%20%26%20Management!5e0!3m2!1sen!2sus!4v1730220103389!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
        </div>
<section>
</div>
    <?php if (isset($_GET['status']) && $_GET['status'] == 'success') { ?>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="exampleModalLabel">Thank You</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flat_tick_icon.svg/768px-Flat_tick_icon.svg.png" alt="Success">
                        <p>Your message has been sent successfully!</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {});
            myModal.show();
        </script>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

<br>
<br>
<br>


    <footer class="main-footer">
    <strong>Copyright &copy; 2024 B&B.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b><i> B & B</i></b>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<!-- Bootstrap -->


   <!-- <script>
       function validate() {
                var name = document.getElementById("fn").value;
                var email = document.getElementById("em").value;
                var phone_number = document.getElementById("phnum").value;

          
                var namePattern = /^[A-Za-z ]{3,20}$/;
                var emailPattern = /^[a-zA-Z_.]{3,}[0-9]{0,9}@[a-zA-z]{3,}[.]{1}[a-zA-Z]{2,6}$/;
                var phone_numberPattern = /^[0-9]{10}$/;

    
                if(namePattern.test(name)){
                    document.getElementById("fnerror").innerHTML="";
                    document.getElementById("fn").style.borderColor = "green";
                }else{
                    document.getElementById("fnerror").innerHTML = "First Name is invalid!";
                    document.getElementById("fnerror").style.color = "red";
                }

                if(emailPattern.test(email)){
                    document.getElementById("emerror").innerHTML="";
                    document.getElementById("em").style.borderColor = "green";
                }else{
                    document.getElementById("emerror").innerHTML = "Email is invalid!";
                    document.getElementById("emerror").style.color = "red";
                }

                if(phone_numberPattern.test(phone_number)){
                    document.getElementById("phnumerror").innerHTML="";
                    document.getElementById("phnum").style.borderColor = "green";
                }else{
                    document.getElementById("phnumerror").innerHTML = "Invalid Phone Number!";
                    document.getElementById("phnumerror").style.color = "red";
                }
                if(namePattern.test(name)  != 0 && emailPattern.test(email)  != 0 && phone_numberPattern.test(phone_number))
                {
                    document.getElementById("fn").value = "";                
                    document.getElementById("em").value = "";
                    document.getElementById("phnum").value = "";
                    // alert("Form Submitted Successfully")
                }
    
                else{
                }
            }
              </script> -->
    
              <?php include 'footer.php' ?>
            </body>
</html>