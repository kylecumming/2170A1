<?php include "includes/header.php";
/*
 * CSCI 2170: ONLINE EDITION, WINTER 2021
 * STARTER CODE FOR ASSIGNMENT 1
 * 
 * This code was customized by Dr. Raghav V. Sampangi (raghav@cs.dal.ca)
 * using the code from the Bootstrap "Album" example available at:
 * https://getbootstrap.com/docs/5.0/examples/album/ (accessed 11 Jan 2021)
 * (Created by: Mark Otto, Jacob Thornton, and Bootstrap contributors)
 * The Album example is (c) Bootstrap, and is free to download and customize.
 *
 */
?>
		<main>
			<div class="py-5 text-center container">
				<div class="row py-lg-5">
					<div class="col-lg-6 col-md-8 mx-auto">
						<h1 class="fw-light">JediMail</h1>
						<p class="lead text-muted">Sometimes, the email interface simply needs to be a simple one. For what the Jedi do, we start here with a simple, no clutter, email interface.</p>
					</div>
				</div>
			</div>

			<!-- ADD YOUR CODE HERE -->
			
			<div>
				<div>
					<table class="table caption-top">
					<caption>Inbox</caption>
						
					  	<tbody>
					  		
							
					<?php include "includes/inbox.php"; ?>
							
						</tbody>
					</table>
				</div>
			</div>

			<div>
				<div>
					<table class="table caption-top">
					<caption>Sent</caption>
						
					  	<tbody>
					  		
							
					<?php include "includes/sent.php"; ?>
							
						</tbody>
					</table>
				</div>
			</div>

			<div>
				<div class="mb-3">
					<h1 class="fw-light">Compose Email</h1>

					<form action="index.php" method="post">
						<label for="to-input" class="form-label">To</label>
						<input type="text" class="form-control" name="to" id="to-ID">
						<label for="subject-input" class="form-label">Subject</label>
						<input type="text" name="subject" class="form-control" id="subject-ID">
						<label for="message-input" class="form-control">Message</label>
						<textarea type="text" class="form-control" name="message" id="message-ID" rows="3"></textarea>
						<input type="submit" name="submit-email-form">
						</form>

						<?php include "includes/compose.php"; ?>
				</div>
			</div>

		</main>

		<?php include "includes/footer.php"; ?>
