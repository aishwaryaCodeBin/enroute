<?php include('connection.php'); ?>
<?php include('header.php'); ?>
			<!----- Contact ----->
			<div class="Contact">
				<!----- header-section ---->
				<div class="header-section">
					<div class="container">
						<h1>Register</h1>
					</div>
				</div>
				<!----- header-section ---->
				<!----- hosting-grids ----->
				<div class="contact-grids">
					<div class="container">

						<div class="contact-bottom-grids">

							<div class="contact-bottom-grid">

								<?php
								if(isset($_REQUEST['submit'])){
                                    $name = $_REQUEST['name'];
                                    $age = $_REQUEST['age'];
                                    $loc = $_REQUEST['loc'];
                                    $gender = $_REQUEST['gender'];
                                    $passion = $_REQUEST['passion'];


                                       $sql = 'INSERT INTO users (name,age, location, gender,passion) VALUES ("'.$name.'","'. $age.'","'.$loc.'","'. $gender.'","'.$passion.'" )';
                                       $retval = mysql_query( $sql, $conn );

}
								?>
								<form method="post">
									<div class="text">
										<div class="text-fild">
											<span>Name:</span>
											<input type="text" name="name" class="text" value="Your Name here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name here';}">
										</div>
										<div class="text-fild">
											<span>Age:</span>
											<input type="number" name="age" class="number" value="Your Age here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Age here';}">
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="msg-fild">
                                       <div class="text-fild">
                                                <span>Location:</span>
                                                <input type="text" name="loc" class="text" value="Your Location here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Location here';}">
                                        </div>
                                        <div class="text-fild">
                                                <span>Gender:</span>
                                                <input type="text" name="gender" class="text" value="Your Gender here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Gender here';}">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>


									<div class="message-fild">
											<span>Passion/Talent:</span>
											<textarea name="passion"> </textarea>
									</div>
									<input class="send-btn" type="submit" value="Send" name="submit" />
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