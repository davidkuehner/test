		<?php echo heading('The following message was successfully submitted !',1); ?>
		
		<div id="body">

			<?php 

			echo "<p>";
			echo 'by : ' . $username;
			echo br();
			echo 'type : ' . $message_type;
			echo br();
			echo 'message : ' . br() . $message;
			echo "</p>";

			echo "<p>";
			echo anchor('welcome', 'Try it again!');
			echo "</p>";
						
			?>
			
		</div>