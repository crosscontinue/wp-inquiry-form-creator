<?php
//�T�j�^�C�Y
if (is_array($_POST)) {
	foreach($_POST as $key => $post) {
		$_POST[$key] = maybe_serialize( stripslashes_deep(trim($post)));
	}
}
	
$wpdb->update($wpdb->prefix."iqfm_inquiryform_component", array(
																	'field_sort'         => $_POST['field_sort'],
																	'update_dt'          => current_time('mysql')
																), 
																array( 'form_component_id' => $_POST['field_id'] ),
																array('%d','%s')
					);	
