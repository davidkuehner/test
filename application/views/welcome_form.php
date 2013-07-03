		<h1>Welcome to CodeIgniter!</h1>
    
		<div id="body">
			
			<?php 
			echo validation_errors();
		
			
			echo form_open('welcome');
			
			$data = array(
				'name' =>$username,
				'type'=>'text',
				'size' => '10',
				'value' => 'username',
				);
			echo form_input($data);
			echo br();
			
			$options = array(
				'standard'=>'standard',
				'warning'=>'warning',
				'error'=>'error',
				);
			echo form_dropdown($message_type,$options, 'standard');
			echo br();
			
			echo form_textarea($message, 'Message');
			echo br();
			
			echo form_submit('submit', 'Post !');
			
			echo form_close();		
			?>
			
		</div><!-- #body -->