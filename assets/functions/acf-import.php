<?php
/**
 * ACF helper functions
 */

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5bd7485987834',
		'title' => 'Component',
		'fields' => array(
			array(
				'key' => 'field_5bd74887b9faa',
				'label' => 'Introduction',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_5bd7491faf306',
				'label' => 'Introduction/rationale',
				'name' => 'intro',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 1,
			),
			array(
				'key' => 'field_5bd7494aaf307',
				'label' => 'Design',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_5bd7495baf308',
				'label' => 'Design section',
				'name' => 'design_section',
				'type' => 'flexible_content',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layouts' => array(
					'5bd749745609c' => array(
						'key' => '5bd749745609c',
						'name' => 'text_block_section',
						'label' => 'Text block section',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_5bd749baaf309',
								'label' => 'Section title',
								'name' => 'section_title',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
							),
							array(
								'key' => 'field_5bd749cbaf30a',
								'label' => 'Section content',
								'name' => 'section_content',
								'type' => 'wysiwyg',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'tabs' => 'all',
								'toolbar' => 'basic',
								'media_upload' => 1,
								'delay' => 1,
							),
						),
						'min' => '',
						'max' => '',
					),
					'layout_5bd749f9ad2f0' => array(
						'key' => 'layout_5bd749f9ad2f0',
						'name' => 'bulleted_list',
						'label' => 'Bulleted List',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_5bd74a1dad2f1',
								'label' => 'Section title',
								'name' => 'section_title',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
							),
							array(
								'key' => 'field_5bd74a2ead2f2',
								'label' => 'Bullet points',
								'name' => 'bullet_points',
								'type' => 'repeater',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'collapsed' => 'field_5bd74a4bad2f3',
								'min' => 0,
								'max' => 0,
								'layout' => 'block',
								'button_label' => 'Add point',
								'sub_fields' => array(
									array(
										'key' => 'field_5bd74a4bad2f3',
										'label' => '°',
										'name' => 'point',
										'type' => 'textarea',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '100',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'placeholder' => '',
										'maxlength' => '',
										'rows' => 2,
										'new_lines' => '',
									),
								),
							),
						),
						'min' => '',
						'max' => '',
					),
					'layout_5bd74b210ca7b' => array(
						'key' => 'layout_5bd74b210ca7b',
						'name' => 'examples',
						'label' => 'Freeform',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_5bd74bdc0ca7c',
								'label' => 'Example',
								'name' => 'example',
								'type' => 'group',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'layout' => 'block',
								'sub_fields' => array(
									array(
										'key' => 'field_5c1423d68f634',
										'label' => 'Layout',
										'name' => 'layout',
										'type' => 'radio',
										'instructions' => 'Choose a layout for this example. Full width spans the whole page, grid will display multiple examples in a multiple column grid if the screen size allows.',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'choices' => array(
											'full' => 'Full width',
											'grid' => 'Grid',
										),
										'allow_null' => 0,
										'other_choice' => 0,
										'default_value' => '',
										'layout' => 'horizontal',
										'return_format' => 'value',
										'save_other_choice' => 0,
									),
									array(
										'key' => 'field_5c1425058f635',
										'label' => 'Example Title',
										'name' => 'example_title_full',
										'type' => 'text',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array(
											array(
												array(
													'field' => 'field_5c1423d68f634',
													'operator' => '==',
													'value' => 'full',
												),
											),
										),
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'maxlength' => '',
									),
									array(
										'key' => 'field_5c1425428f636',
										'label' => 'Example',
										'name' => 'example_full',
										'type' => 'wysiwyg',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array(
											array(
												array(
													'field' => 'field_5c1423d68f634',
													'operator' => '==',
													'value' => 'full',
												),
											),
										),
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'tabs' => 'text',
										'media_upload' => 1,
										'toolbar' => 'full',
										'delay' => 0,
									),
									array(
										'key' => 'field_5c14257b8f637',
										'label' => 'Example group',
										'name' => 'example_group',
										'type' => 'repeater',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array(
											array(
												array(
													'field' => 'field_5c1423d68f634',
													'operator' => '==',
													'value' => 'grid',
												),
											),
										),
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'collapsed' => '',
										'min' => 0,
										'max' => 0,
										'layout' => 'block',
										'button_label' => 'Add Example',
										'sub_fields' => array(
											array(
												'key' => 'field_5c1425af8f638',
												'label' => 'Example Title',
												'name' => 'example_title_grid',
												'type' => 'text',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array(
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'default_value' => '',
												'placeholder' => '',
												'prepend' => '',
												'append' => '',
												'maxlength' => '',
											),
											array(
												'key' => 'field_5c1425c88f639',
												'label' => 'Example',
												'name' => 'example_grid',
												'type' => 'wysiwyg',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array(
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'default_value' => '',
												'tabs' => 'text',
												'media_upload' => 1,
												'toolbar' => 'full',
												'delay' => 0,
											),
										),
									),
								),
							),
						),
						'min' => '',
						'max' => '',
					),
					'layout_5c2d19fee7914' => array(
						'key' => 'layout_5c2d19fee7914',
						'name' => 'live_examples',
						'label' => 'Live Examples',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_5c2d19fee7915',
								'label' => 'Example',
								'name' => 'example',
								'type' => 'group',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'layout' => 'block',
								'sub_fields' => array(
									array(
										'key' => 'field_5c2d19fee7916',
										'label' => 'Layout',
										'name' => 'layout',
										'type' => 'radio',
										'instructions' => 'Choose a layout for this example. Full width spans the whole page, grid will display multiple examples in a multiple column grid if the screen size allows.',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'choices' => array(
											'full' => 'Full width',
											'grid' => 'Grid',
										),
										'allow_null' => 0,
										'other_choice' => 0,
										'save_other_choice' => 0,
										'default_value' => '',
										'layout' => 'horizontal',
										'return_format' => 'value',
									),
									array(
										'key' => 'field_5c2d19fee7917',
										'label' => 'Example Title',
										'name' => 'example_title_full',
										'type' => 'text',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array(
											array(
												array(
													'field' => 'field_5c2d19fee7916',
													'operator' => '==',
													'value' => 'full',
												),
											),
										),
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'maxlength' => '',
									),
									array(
										'key' => 'field_5c2d1a5be791c',
										'label' => 'Language',
										'name' => 'language',
										'type' => 'radio',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array(
											array(
												array(
													'field' => 'field_5c2d19fee7916',
													'operator' => '==',
													'value' => 'full',
												),
											),
										),
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'choices' => array(
											'html' => 'HTML',
											'scss' => 'CSS/SCSS',
										),
										'allow_null' => 0,
										'other_choice' => 0,
										'default_value' => '',
										'layout' => 'horizontal',
										'return_format' => 'value',
										'save_other_choice' => 0,
									),
									array(
										'key' => 'field_5c2d19fee7918',
										'label' => 'Example (HTML)',
										'name' => 'example_full_html',
										'type' => 'acf_code_field',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array(
											array(
												array(
													'field' => 'field_5c2d19fee7916',
													'operator' => '==',
													'value' => 'full',
												),
												array(
													'field' => 'field_5c2d1a5be791c',
													'operator' => '==',
													'value' => 'html',
												),
											),
										),
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'placeholder' => '',
										'mode' => 'htmlmixed',
										'theme' => 'monokai',
									),
									array(
										'key' => 'field_5c2d1af7e791e',
										'label' => 'Example (CSS/SCSS)',
										'name' => 'example_full_scss',
										'type' => 'acf_code_field',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array(
											array(
												array(
													'field' => 'field_5c2d19fee7916',
													'operator' => '==',
													'value' => 'full',
												),
												array(
													'field' => 'field_5c2d1a5be791c',
													'operator' => '==',
													'value' => 'scss',
												),
											),
										),
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'placeholder' => '',
										'mode' => 'css',
										'theme' => 'monokai',
									),
									array(
										'key' => 'field_5c2d19fee7919',
										'label' => 'Example group',
										'name' => 'example_group',
										'type' => 'repeater',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array(
											array(
												array(
													'field' => 'field_5c2d19fee7916',
													'operator' => '==',
													'value' => 'grid',
												),
											),
										),
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'collapsed' => '',
										'min' => 0,
										'max' => 0,
										'layout' => 'block',
										'button_label' => 'Add Example',
										'sub_fields' => array(
											array(
												'key' => 'field_5c2d19fee791a',
												'label' => 'Example Title',
												'name' => 'example_title_grid',
												'type' => 'text',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array(
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'default_value' => '',
												'placeholder' => '',
												'prepend' => '',
												'append' => '',
												'maxlength' => '',
											),
											array(
												'key' => 'field_5c2d1e917cf98',
												'label' => 'Language',
												'name' => 'language',
												'type' => 'radio',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array(
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'choices' => array(
													'html' => 'HTML',
													'scss' => 'CSS/SCSS',
												),
												'allow_null' => 0,
												'other_choice' => 0,
												'default_value' => '',
												'layout' => 'horizontal',
												'return_format' => 'value',
												'save_other_choice' => 0,
											),
											array(
												'key' => 'field_5c2d19fee791b',
												'label' => 'Example (HTML)',
												'name' => 'example_grid_html',
												'type' => 'acf_code_field',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => array(
													array(
														array(
															'field' => 'field_5c2d1e917cf98',
															'operator' => '==',
															'value' => 'html',
														),
													),
												),
												'wrapper' => array(
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'default_value' => '',
												'placeholder' => '',
												'mode' => 'htmlmixed',
												'theme' => 'monokai',
											),
											array(
												'key' => 'field_5c2d1ee97cf99',
												'label' => 'Example (CSS/SCSS)',
												'name' => 'example_grid_scss',
												'type' => 'acf_code_field',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => array(
													array(
														array(
															'field' => 'field_5c2d1e917cf98',
															'operator' => '==',
															'value' => 'scss',
														),
													),
												),
												'wrapper' => array(
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'default_value' => '',
												'placeholder' => '',
												'mode' => 'css',
												'theme' => 'monokai',
											),
										),
									),
								),
							),
						),
						'min' => '',
						'max' => '',
					),
				),
				'button_label' => 'Add section',
				'min' => '',
				'max' => '',
			),
			array(
				'key' => 'field_5bd74d5f2279f',
				'label' => 'Code',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_5bd74d6d227a0',
				'label' => 'Code section',
				'name' => 'code_section',
				'type' => 'flexible_content',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layouts' => array(
					'5bd749745609c' => array(
						'key' => '5bd749745609c',
						'name' => 'text_block_section',
						'label' => 'Text block section',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_5bd74d6d227a1',
								'label' => 'Section title',
								'name' => 'section_title',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
							),
							array(
								'key' => 'field_5bd74d6d227a2',
								'label' => 'Section content',
								'name' => 'section_content',
								'type' => 'wysiwyg',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'tabs' => 'all',
								'toolbar' => 'basic',
								'media_upload' => 1,
								'delay' => 1,
							),
						),
						'min' => '',
						'max' => '',
					),
					'layout_5bd74b210ca7b' => array(
						'key' => 'layout_5bd74b210ca7b',
						'name' => 'code_block',
						'label' => 'HTML Code block',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_5bd74e28227ac',
								'label' => 'Section title',
								'name' => 'section_title',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
							),
							array(
								'key' => 'field_5bd74e34227ad',
								'label' => 'Code',
								'name' => 'code',
								'type' => 'acf_code_field',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'mode' => 'htmlmixed',
								'theme' => 'monokai',
							),
						),
						'min' => '',
						'max' => '',
					),
					'layout_5c084d0fa93de' => array(
						'key' => 'layout_5c084d0fa93de',
						'name' => 'style_code_block',
						'label' => 'SCSS Code block',
						'display' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_5c084d0fa93df',
								'label' => 'Section title',
								'name' => 'section_title',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
							),
							array(
								'key' => 'field_5c084d0fa93e0',
								'label' => 'Code',
								'name' => 'code',
								'type' => 'acf_code_field',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'mode' => 'css',
								'theme' => 'monokai',
							),
						),
						'min' => '',
						'max' => '',
					),
				),
				'button_label' => 'Add section',
				'min' => '',
				'max' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'component',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'the_content',
			1 => 'excerpt',
			2 => 'tags',
		),
		'active' => 1,
		'description' => '',
	));

endif;