<?php include('header.php'); ?>
			<!----- Contact ----->
			<div class="Contact">
				<!----- header-section ---->
				<div class="header-section">
					<div class="container">
						<h1>Contact us</h1>
					</div>
				</div>
				<!----- header-section ---->
				<!----- hosting-grids ----->
				<div class="contact-grids">
					<div class="container">
						<!--div class="contact-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
						</div-->
						<div class="contact-bottom-grids">
							<div class="contact-bottom-grid-left">
								<h3>Contact info</h3>
								<p>House No. 559, First Floor, </br> Saraswati Vihar, Chkarpur </br> MG Road, Gurgaon </br></br> Phone: +91 9899933582</br> email: hello@enroutethursdays.com</p>
								<br/>
								<br/>
								<br/>
								<p>Code-Bin </br> Plot No. 69, Near MPEB office </br>Ratan Lok Colony,Scheme No. 53, </br> Vijay Nagar ,Indore</br></br> Phone: +91 9752456484</br> email: manas@techacadium.com</p>
							</div>
							<div class="contact-bottom-grid-right">
								<h3>Catch me</h3>
								<?php
								if(isset($_REQUEST['submit'])){
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$sbj = $_REQUEST['sbj'];
	$msg.= 'Name:- '.$name;
	$email.= 'Email:- '.$email; 
	$sbj.= 'Subject:- '.$sbj;
	$msg.= 'Message:- '.$_REQUEST['msg'];
	mail('nitin@techacadium.com',$sbj,$msg);
}
								?>
								<form method="post">
									<div class="text">
										<div class="text-fild">
											<span>Name:</span>
											<input type="text" name="name" class="text" value="Your Name here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name here';}">
										</div>
										<div class="text-fild">
											<span>Email:</span>
											<input type="email" name="email" class="text" value="Your Email here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email here';}">
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="msg-fild">
											<span>Subject:</span>
											<input type="text" name="sbj" class="text" value="Your Subject here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Subject here';}">
									</div>
									<div class="message-fild">
											<span>Message:</span>
											<textarea name="msg"> </textarea>
									</div>
									<input type="submit" value="Send" name="submit" />
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!----- hosting-grids ----->
			</div>
			<!----- About ----->
			
			<?php include('footer.php'); ?>