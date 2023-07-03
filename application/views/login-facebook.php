<?php

include APPPATH . 'views/header.php'; ?>
<style>
	  .fa-facebook {
	  margin-right:20px;
	}
  
</style>

	<?php if (!empty($authURL)) { ?>
		
		<div class="container pt-3 text-center">
				<h2 class="m-3 pt-3">Login using facebook Account with Codeigniter</h2>
				<a href="<?php echo $authURL; ?>" class="btn btn-primary btn-lg"><i class="fa-brands fa-facebook"></i>login with facebook</a>
		</div>

		<?php } else { ?>

		<div class="container pt-3">
			<h2>Facebook Profile Details</h2>

			<div class="ac-data">
				<p><b>Facebook ID:</b> <?php echo $userData['login_oauth_uid']; ?></p>
        <p><b>Name:</b> <?php echo $userData['name']; ?></p>
        <p><b>Email:</b> <?php echo $userData['email']; ?></p>
				<a href="<?php echo base_url() .'fb_controller/logout'; ?>" class="btn btn-danger">Logout from facebook</a>
    	</div>

		<?php } ?>
		