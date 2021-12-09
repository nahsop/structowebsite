<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'spaces_box' => array(
		'title'   => __( 'Margin/Padding', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
				'enable_space'       => array(
					'type'         => 'multi-picker',
					'label'        => false,
					'desc'         => false,
					'picker'       => array(
						'space_status' => array(
							'label'        => __( 'Enable Space', 'unyson' ),
							'type'         => 'switch',
							'right-choice' => array(
								'value' => 'yes',
								'label' => __( 'Enabled', 'unyson' )
							),
							'left-choice'  => array(
								'value' => 'no',
								'label' => __( 'Disabled', 'unyson' )
							),
							'value'        => 'no',
							'desc'         => __( 'Do you want to enable default padding/margin',
								'unyson' ),
							
						)
					),
					'choices'      => array(
						'yes'  => array(
							'space_type' => array(
								'type' => 'select',
								'label' => 'Margin Type',
								'choices' => array(
									'x-small' => 'Extra Small',
									'small' => 'Small',
									'medium' => 'Medium',
									'x-medium' => 'Extra Medium',
									'large' => 'Large',
									'x-large' => 'Extra Large'
								)
							)
							
						),
						'no' => array(
							
						),
					),
					'show_borders' => false,
				),
				

		)
	)
);