<h1>Administration</h1>
    
		<div id="body">
			
			<?php 
			echo validation_errors();
		
			
			echo form_open('admin');
			
			$data = array(
				'name' =>$username,
				'type'=>'text',
				'size' => '10',
				'value' => 'username',
				);
			echo form_input($data);
			echo br();
      
      $data = array(
				'name' =>$password,
				'type'=>'text',
				'size' => '10',
				'value' => 'username',
				);
			echo form_input($data);
			echo br();
			
			
			echo form_submit('submit', 'login');
			
			echo form_close();		
			?>
			
		</div><!-- #body -->