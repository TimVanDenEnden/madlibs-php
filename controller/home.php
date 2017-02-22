<?php
	
	// Created by Tim Van den Enden on 22/02/2017.
	// Copyright © 2017 Tim Van den Enden. All rights reserved.
	
	require(_ROOT_ . "/model/viewController.model.php");

	// This with input!
	if ( isset( $_POST['view'] ) && !empty( $_POST['view'] ) )
	{
		$view = $_POST['view'];

		if ($view == "paniekShow")
		{
			$v1 = $_POST['v1'];
			$v2 = $_POST['v2'];
			$v3 = $_POST['v3'];
			$v4 = $_POST['v4'];
			$v5 = $_POST['v5'];
			$v6 = $_POST['v6'];
			$v7 = $_POST['v7'];
			$v8 = $_POST['v8'];
		} 
		else 
		{
			$v1 = $_POST['v1'];
			$v2 = $_POST['v2'];
			$v3 = $_POST['v3'];
			$v4 = $_POST['v4'];
			$v5 = $_POST['v5'];
			$v6 = $_POST['v6'];
			$v7 = $_POST['v7'];
		}
		


	}

	// This checks if there is pressed any navigation item!
	else if ( isset( $_GET['view'] ) && !empty( $_GET['view'] ) )
	{
		$view = $_GET['view'];
	} 

	// if booth are not just at the start!
	else 
	{
		$view = null;
	}

	// This makes the view visable!
	if ($view != null)
	{
		$content = viewController($view);
	} else {
		$content = viewController("paniek");
	}

	require(_ROOT_ . "/view/main.view.php");

?>