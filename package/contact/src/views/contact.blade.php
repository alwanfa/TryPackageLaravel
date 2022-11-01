<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://kit.fontawesome.com/9be626d6af.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="{{ asset('style.css') }}" rel="stylesheet">
	<style>
		body{margin-top:20px;
    background:#eee;
    }

	

    .contact-area {
        background: url(../img/bg/contact-bg.png) no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
    }
    
    @media only screen and (max-width:768px) {
        .contact {
            margin-bottom: 60px;
        }
    }
	

    .contact input {
        background: #fff;
        border: 1px solid #fff;
        border-radius: 5px;
        -webkit-box-shadow: none;
		margin-bottom: 20px;
        box-shadow: none;
        color: #232434;
        font-size: 16px;
        height: 60px;
        padding: 10px;
        width: 100%;
        font-family: 'poppins', sans-serif;
        padding-left: 30px;
        -webkit-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }
    
    .contact textarea {
        background: #fff;
        border: 1px solid #fff;
        border-radius: 3px;
        -webkit-box-shadow: none;
        box-shadow: none;
        color: #232434;
        font-size: 16px;
        padding: 10px;
        width: 100%;
		margin-bottom: 20px;
        font-family: 'poppins', sans-serif;
        padding-left: 30px;
        -webkit-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }
    
    .contact input:focus {
        background: #fff;
        border: 1px solid #fff;
        color: #232434;
        -webkit-box-shadow: none;
        box-shadow: none;
        outline: 0 none;
    }
    
    .contact textarea:focus {
        background: #fff;
        border: 1px solid #fff;
        color: #232434;
        -webkit-box-shadow: none;
        box-shadow: none;
        outline: 0 none;
    }
    
    .form-control::placeholder {
        color: #232434;
        opacity: 1;
    }
    
    .btn-contact-bg {
        border-radius: 30px;
        color: #fff;
        outline: medium none !important;
        padding: 15px 27px;
        text-transform: capitalize;
        -webkit-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
        background: #7564e5;
        font-family: 'poppins', sans-serif;
        cursor: pointer;
        width: 100%;
    }
    
    .btn-contact-bg:hover,
    .btn-contact-bg:focus {
        background: #232434;
        color: #fff;
    }
    
    /*START ADDRESS*/
    
    .single_address {
        overflow: hidden;
        margin-bottom: 10px;
        padding-left: 40px;
		
    }
    
    @media only screen and (max-width:768px) {
        .single_address {
            padding-left: 0px;
        }
    }
    
    .single_address i {
        background: #f6f6f6;
        color: #7564e5;
        border-radius: 30px;
        width: 60px;
        height: 60px;
        line-height: 60px;
        text-align: center;
        float: left;
        margin-right: 14px;
        font-size: 22px;
        -webkit-box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.1);
        box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        -webkit-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }
    
    .single_address:hover i {
        background: #7564e5;
        color: #fff;
    }
    
    .single_address h4 {
        font-size: 18px;
        margin-bottom: 0px;
        overflow: hidden;
        font-weight: 600;
    }
    
    .single_address p {
        overflow: hidden;
        margin-top: 5px;
    }
    
    .section-title h1 {
        font-size: 44px;
        font-weight: 500;
        margin-top: 0;
        position: relative;
        text-transform: capitalize;
        margin-bottom: 15px;
    }
    .section-title p {
        padding: 0 10px;
        width: 70%;
        margin: auto;
        letter-spacing: 1px;
    }
    .section-title {
        margin-bottom: 60px;
    }
    .text-center {
        text-align: center!important;
    }
	</style>
    <title>Contact Us</title>
</head>
<body>
<div id="contact" class="contact-area section-padding">
	<div class="container">										
		<div class="section-title text-center">
			<h1>Contact Us</h1>
			<p>Feel free to contact us any time. We wil get back to you as soon as we can.</p>
		</div>					
		<div class="row">
			<div class="col-lg-7">	
				<div class="contact">
						<form class="form" name="enq" method="post" action="{{route('contact')}}" onsubmit="return validation();">
						<div class="row">
							<div class="form-group col-md-6">
								<input type="text" name="name" class="name" placeholder="Name" required="required">
							</div>
							<div class="form-group col-md-6">
								<input type="email" name="email" class="email" placeholder="Email" required="required">
							</div>
						</div>
							<div class="form-group col-md-12">
								<input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
							</div>
							<div class="form-group col-md-12">
								<textarea rows="6" name="message" class="form-control" placeholder="Your Message" required="required"></textarea>
							</div>
                            <div class="col-md-12 text-center">
                                <button type="submit" value="submit" name="submit" id="submitButton" class="btn btn-contact-bg" title="Submit Your Message!">Send Message</button>
                            </div>
						</div>
					</form>
                
				</div>

			<div class="col-lg-5">
				<div class="single_address">
					<i class="fa fa-map-marker"></i>
					<h4>Our Address</h4>
					<p>3481 Melrose Place, Beverly Hills</p>
				</div>
				<div class="single_address">
					<i class="fa fa-envelope"></i>
					<h4>Send your message</h4>
					<p>Info@example.com</p>
				</div>
				<div class="single_address">
					<i class="fa fa-phone"></i>
					<h4>Call us on</h4>
					<p>(+1) 517 397 7100</p>
				</div>
				<div class="single_address">
					<i class="fa fa-clock-o"></i>
					<h4>Work Time</h4>
					<p>Mon - Fri: 08.00 - 16.00. <br>Sat: 10.00 - 14.00</p>
				</div>					
			</div><!--- END COL --> 
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->	
</div>
</body>
</html>