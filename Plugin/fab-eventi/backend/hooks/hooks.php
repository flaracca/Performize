<?php
add_action( 'cmb2_admin_init', 'fabev_register_pubblicita_metabox' );
/**
 * Hook in and register a metabox for the admin evento edit page.
 */
function fabev_register_pubblicita_metabox() {

    
    $cmb = new_cmb2_box( array(
        'id'           => 'fabev_pubblicita_metabox',
        'title'        => 'Dati Pubblicità',
        'object_types' => array( 'pubblicita' ),
    ) );

    

    $cmb->add_field( array(
		'name'             => esc_html__( 'Localita', 'fabeventi' ),
		'desc'             => esc_html__( 'Puoi scegliere una località specifica per questa pubblicità.', 'fabeventi' ),
		'id'               => 'fabev_pubblicita_localita',
		'type'             => 'select',
		'show_option_none' => 'Tutte',
		'options'          => GetPostsArray('localita'),
        'column' => array(
            'position' => 2,
            'name'     => 'Località',
        ),
	) );

    $cmb->add_field( array(
		'name' => esc_html__( 'Dal', 'fabeventi' ),
		'desc' => esc_html__( 'Data inizio pubblicità.  Può essere lasciato vuoto.', 'fabeventi' ),
		'id'   => 'fabev_pubblicita_dal',
		'type' => 'text_date',
		'date_format' => 'd-m-Y',
        'column' => array(
            'position' => 3,
            'name'     => 'Dal',
        ),
	) );

    $cmb->add_field( array(
		'name' => esc_html__( 'Al', 'fabeventi' ),
		'desc' => esc_html__( 'Data fine pubblicità. Può essere lasciato vuoto.', 'fabeventi' ),
		'id'   => 'fabev_pubblicita_al',
		'type' => 'text_date',
		'date_format' => 'd-m-Y',
        'column' => array(
            'position' => 4,
            'name'     => 'Al',
        ),
	) );

    $cmb->add_field( array(
		'name'             => esc_html__( 'Provincia', 'fabeventi' ),
		'desc'             => esc_html__( 'Provincia', 'fabeventi' ),
		'id'               => 'fabev_pubblicita_provincia',
		'type'             => 'select',
		'show_option_none' => false,
		'options'          => GetProvince(),
        'column' => array(
            'position' => 5,
            'name'     => 'Prov',
        ),
	) );

    

    $cmb->add_field( array(
		'name' => esc_html__( 'Link', 'fabeventi' ),
		'desc' => esc_html__( 'Link. Non obbligatorio.', 'fabeventi' ),
		'id'   => 'fabev_pubblicita_link',
		'type' => 'text_url',
	) );

    $cmb->add_field( array(
		'name'             => esc_html__( 'Evento', 'fabeventi' ),
		'desc'             => esc_html__( 'Seleziona un evento specifico.', 'fabeventi' ),
		'id'               => 'fabev_pubblicita_localita',
		'type'             => 'select',
		'show_option_none' => 'Tutti',
		'options'          => GetPostsArray('evento')
	) );

    $cmb->add_field( array(
		'name'             => esc_html__( 'Tipo Evento', 'fabeventi' ),
		'desc'             => esc_html__( 'Tipo Evento. Se selezionato comparirà solo negli eventi di questo tipo.', 'fabeventi' ),
		'id'               => 'fabev_pubblicita_evento_tipo',
		'type'             => 'select',
		'show_option_none' => 'Tutti',
		'options'          => GetPostsArray('tipoevento'),
	) );

}

add_action( 'cmb2_admin_init', 'fabev_register_evento_metabox' );
/**
 * Hook in and register a metabox for the admin evento edit page.
 */
function fabev_register_evento_metabox() {

    
    $cmb = new_cmb2_box( array(
        'id'           => 'fabev_evento_metabox',
        'title'        => 'Dati Evento',
        'object_types' => array( 'evento' ),
    ) );

    

    $cmb->add_field( array(
		'name'             => esc_html__( 'Localita', 'fabeventi' ),
		'desc'             => esc_html__( 'Localita', 'fabeventi' ),
		'id'               => 'fabev_evento_localita',
		'type'             => 'select',
		'show_option_none' => false,
		'options'          => GetPostsArray('localita'),
        'column' => array(
            'position' => 2,
            'name'     => 'Località',
        ),
		'attributes' => array(
			'data-validation' => 'required',
		),
	) );

    $cmb->add_field( array(
		'name' => esc_html__( 'Dal', 'fabeventi' ),
		'desc' => esc_html__( 'Data inizio evento', 'fabeventi' ),
		'id'   => 'fabev_evento_dal',
		'type' => 'text_date',
		'date_format' => 'd-m-Y',
        'column' => array(
            'position' => 3,
            'name'     => 'Dal',
        ),
		'attributes' => array(
			'data-validation' => 'required',
		),
	) );

    $cmb->add_field( array(
		'name' => esc_html__( 'Al', 'fabeventi' ),
		'desc' => esc_html__( 'Data fine evento', 'fabeventi' ),
		'id'   => 'fabev_evento_al',
		'type' => 'text_date',
		'date_format' => 'd-m-Y',
        'column' => array(
            'position' => 4,
            'name'     => 'Al',
        ),
		'attributes' => array(
			'data-validation' => 'required',
		),
	) );

    $cmb->add_field( array(
        'name' => 'Indirizzo',
        'desc' => 'Indirizzo',
        'id'   => 'fabev_evento_indirizzo',
        'type' => 'textarea_small'
    ) );

    $cmb->add_field( array(
        'name' => 'Contatti',
        'desc' => 'Inserisci eventuali contatti',
        'id'   => 'fabev_evento_contatti',
        'type' => 'textarea_small'
    ) );

    $cmb->add_field( array(
		'name'             => esc_html__( 'Target', 'fabeventi' ),
		'desc'             => esc_html__( 'Target', 'fabeventi' ),
		'id'               => 'fabev_evento_target',
		'type'             => 'select',
		'show_option_none' => 'Tutti',
		'options'          => array(
			'famiglia' => esc_html__( 'Famiglia', 'fabeventi' ),
			'giovani'   => esc_html__( 'Giovani', 'fabeventi' ),
			'sportivi'     => esc_html__( 'Sportivi', 'fabeventi' ),
            'coppie'     => esc_html__( 'Coppie', 'fabeventi' ),
		)
	) );
}

add_action( 'cmb2_admin_init', 'fabev_register_localita_metabox' );
/**
 * Hook in and register a metabox for the admin localita edit page.
 */
function fabev_register_localita_metabox() {

    
    $cmb = new_cmb2_box( array(
        'id'           => 'fabev_localita_metabox',
        'title'        => 'Dati Località',
        'object_types' => array( 'localita' ),
    ) );

    $cmb->add_field( array(
		'name'             => esc_html__( 'Provincia', 'fabeventi' ),
		'desc'             => esc_html__( 'Provincia', 'fabeventi' ),
		'id'               => 'fabev_localita_provincia',
		'type'             => 'select',
		'show_option_none' => false,
		'options'          => GetProvince(),
        'column' => array(
            'position' => 2,
            'name'     => 'Provincia',
        ),
		'attributes' => array(
			'data-validation' => 'required',
		),
	) );

    $cmb->add_field( array(
        'name' => 'Cosa vedere',
        'desc' => 'Cosa vedere (luoghi di interesse)',
        'id'   => 'fabev_localita_interesse',
        'type' => 'textarea_small'
    ) );
}