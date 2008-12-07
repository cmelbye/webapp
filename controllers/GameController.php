<?php

class GameController extends WebApp_Controller {
	public function get() {
		?>
		<h2>Form</h2>
		<form action="/step4" method="post">
			<input type="hidden" name="testvalue" value="Hello from the get() method!" />
			<p>
				Submit: 
				<input type="submit" value="test" />
			</p>
		</form>
		<?php
	}
	
	public function post() {
		echo "Hello from the post() action!<br />";
		echo "<pre>";
		var_dump( $_POST );
		echo "</pre>";
	}
}