<?php
	require 'configure.php';
	$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS );
	print "Server found" . "<BR>";

	$database = "hnginterns";

	$db_found = mysqli_select_db($db_handle, $database);

	if ($db_found)
	{
		$SQL = "SELECT * FROM internsprofile";
		$result = mysqli_query($db_handle, $SQL);

		while ( $db_field = mysqli_fetch_assoc($result))
		{
			print $db_field['Name'] . "<BR>";
			print $db_field['Category'] . "<BR>";
			print $db_field['Level'] . "<BR>";

		}

	}
	else
	{
		print " Database NOT found ";

	}
	mysqli_close($db_handle);

?>	