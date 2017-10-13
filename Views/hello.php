<h1>View</h1>
<?php foreach ($users as $user) { ?>
	<h3><?=$user->email?> | <?=$user->password?></h3>
<?php } ?>
