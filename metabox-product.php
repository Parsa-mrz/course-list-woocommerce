<?php
add_action('cmb2_admin_init', 'cmb2_sample_metaboxes');
function cmb2_sample_metaboxes()
{

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box(array(
		'id'            => 'courses_metabox',
		'title'         => __('عناصر دوره', 'cmb2'),
		'object_types'  => array('product',), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 		'closed'     => true, // Keep the metabox closed by default
	));
	$group_field_id = $cmb->add_field(array(
		'id'          => 'courses_metabox',
		'type'        => 'group',
		'description' => __('فصل های دوره', 'cmb2'),
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'       => __('فصل {#}', 'cmb2'), // since version 1.1.4, {#} gets replaced by row number
			'add_button'        => __('اقزودن فصل جدید', 'cmb2'),
			'remove_button'     => __('حذف فصل', 'cmb2'),
			'sortable'          => true,
			'closed'         => true, // true to have the groups closed by default
			'remove_confirm' => esc_html__('برای حذف این فصل مطمئن هستید؟', 'cmb2'), // Performs confirmation before removing group.
		),
	));

	// ==================================
	$cmb->add_group_field($group_field_id, array(
		'name' => ' عنوان بخش ۱:',
		'id'   => 'title_1',
		'type' => 'text',
	));

	$cmb->add_group_field($group_field_id, array(
		'name' => 'نوع دوره :',
		'desc' => 'بخش خصوصی',
		'id'   => 'private_course_1',
		'type' => 'checkbox',
	));

	$cmb->add_group_field($group_field_id, array(
		'name' => ' فایل درسی بخش :',
		'id'   => 'course_file_1',
		'type' => 'file',
	));

	$cmb->add_group_field($group_field_id, array(
		'name' => ' عنوان بخش ۲:',
		'id'   => 'title_2',
		'type' => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	));

	$cmb->add_group_field($group_field_id, array(
		'name' => 'نوع دوره :',
		'desc' => 'بخش خصوصی',
		'id'   => 'private_course_2',
		'type' => 'checkbox',
	));

	$cmb->add_group_field($group_field_id, array(
		'name' => ' فایل درسی بخش :',
		'id'   => 'course_file_2',
		'type' => 'file',
	));

	$cmb->add_group_field($group_field_id, array(
		'name' => ' عنوان بخش ۳:',
		'id'   => 'title_3',
		'type' => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	));

	$cmb->add_group_field($group_field_id, array(
		'name' => 'نوع دوره :',
		'desc' => 'بخش خصوصی',
		'id'   => 'private_course_3',
		'type' => 'checkbox',
	));

	$cmb->add_group_field($group_field_id, array(
		'name' => ' فایل درسی بخش :',
		'id'   => 'course_file_3',
		'type' => 'file',
	));

	$cmb->add_group_field($group_field_id, array(
		'name' => ' عنوان بخش ۴:',
		'id'   => 'title_4',
		'type' => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	));

	$cmb->add_group_field($group_field_id, array(
		'name' => 'نوع دوره :',
		'desc' => 'بخش خصوصی',
		'id'   => 'private_course_4',
		'type' => 'checkbox',
	));

	$cmb->add_group_field($group_field_id, array(
		'name' => ' فایل درسی بخش :',
		'id'   => 'course_file_4',
		'type' => 'file',
	));

	$cmb->add_group_field($group_field_id, array(
		'name' => ' عنوان بخش ۵:',
		'id'   => 'title_5',
		'type' => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	));

	$cmb->add_group_field($group_field_id, array(
		'name' => 'نوع دوره :',
		'desc' => 'بخش خصوصی',
		'id'   => 'private_course_5',
		'type' => 'checkbox',
	));

	$cmb->add_group_field($group_field_id, array(
		'name' => ' فایل درسی بخش :',
		'id'   => 'course_file_5',
		'type' => 'file',
	));
}
