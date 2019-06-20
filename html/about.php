<?php
include ('common.php');
outputHeader('About');
outputNavbar('About');
?>

<div class="content">
  <!--Top navbar-->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            </div>
            <h1 style="text-align:center">About</h1>
        </div>
    </nav>
    <!--Container holding company logo, information and contact form-->
    <div class="container" style="padding-left:100px;text-align:center;">
        <!--Company Logo-->
        <img class="img-responsive img-thumbnail img-about"src="Images/logo.png" >
        <!--Company Information-->
        <h3>Who are we ?</h3>
        <p>We are a new age movie rental system trying to help un-digitize the movie experience</p>
        <h3>How do I contact to you ?</h3>
        <p>Well you can find our social media links on the side or you could leave a response in the contact form below</p>
        <h3>Contact Form</h3>
        <!--Contact Form-->
        <form>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="genre">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" class="form-control" id="message" placeholder="Enter message" name="message">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

<?php
    outputFooter();
?>
