<?php
$messages = array_reverse($messages);
			foreach($messages as $message) {
				echo '<div class = "' . $message->message_type . ' message">';
				echo "<p>";
				echo 'by : ' . $message->username;
				echo br();
				echo 'type : ' . $message->message_type;
				echo br();
				echo 'message : ' . br() . $message->message;
				echo br(2);
				echo anchor('welcome/delete/' . $message->id, 'Delete');
				echo "</p>";
				echo '</div>';
        }
?>