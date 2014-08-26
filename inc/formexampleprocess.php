<?php

$errors = array();
$data = array();

// validation ==================================================================

if (empty($_POST['name']))
	$errors['name'] = 'Name is required.';

if (empty($_POST['email']))
	$errors['email'] = 'Email is required.';

if (empty($_POST['shoeSize']))
	$errors['shoeSize'] = 'Shoe size is required.';

// return esponse ==============================================================

if (!empty($errors)) {
	$data['success'] = false;
	$data['errors']  = $errors;
} else {

	// FORM PROCESSING GOES HERE
	// FOR EXAMPLE LOGIN, SAVE, UPDATE ETC...

	$data['success'] = true;
	$data['message'] = 'Success!';
}

	// return data to AJAX call
echo json_encode($data);
?>