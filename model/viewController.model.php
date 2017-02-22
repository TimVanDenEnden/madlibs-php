<?php

	// Created by Tim Van den Enden on 22/02/2017.
	// Copyright © 2017 Tim Van den Enden. All rights reserved.

	// View Controller 
	function viewController($view) 
	{
		switch ($view) {
			case 'paniek':
				return "paniek";
				break;

			case 'paniekShow':
				return "paniekShow";
				break;

			case 'onkunde':
				return "onkunde";
				break;

			case 'onkundeShow':
				return "onkundeShow";
				break;
			
			default:
				echo "There is wrong input!";
				break;
		}
	}

?>