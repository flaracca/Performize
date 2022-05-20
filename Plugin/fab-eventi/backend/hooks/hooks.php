<?php
add_action( 'cmb2_init', 'fabev_register_pubblicita_metabox' );
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
		'date_format' => 'Y-m-d',
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
		'date_format' => 'Y-m-d',
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
		'id'               => 'fabev_pubblicita_evento_specifico',
		'type'             => 'select',
		'show_option_none' => 'Tutti',
		'options'          => GetPostsArray('evento')
	) );

    $cmb->add_field( array(
		'name'             => esc_html__( 'Target Evento', 'fabeventi' ),
		'desc'             => esc_html__( 'Target Evento. Se selezionato comparirà solo negli eventi di questo Target.', 'fabeventi' ),
		'id'               => 'fabev_pubblicita_evento_target',
		'type'             => 'select',
		'show_option_none' => 'Tutti',
		'options'          => GetPostsArray('tipoevento'),
	) );

}

add_action( 'cmb2_init', 'fabev_register_evento_metabox' );
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
		'object_types' => array( 'evento' ),
	) );

    $cmb->add_field( array(
		'name' => esc_html__( 'Dal', 'fabeventi' ),
		'desc' => esc_html__( 'Data inizio evento', 'fabeventi' ),
		'id'   => 'fabev_evento_dal',
		'type' => 'text_date',
		'date_format' => 'Y-m-d',
        'column' => array(
            'position' => 3,
            'name'     => 'Dal',
        ),
		'attributes' => array(
			'data-validation' => 'required',
		),
		'object_types' => array( 'evento' ),
	) );

    $cmb->add_field( array(
		'name' => esc_html__( 'Al', 'fabeventi' ),
		'desc' => esc_html__( 'Data fine evento', 'fabeventi' ),
		'id'   => 'fabev_evento_al',
		'type' => 'text_date',
		'date_format' => 'Y-m-d',
        'column' => array(
            'position' => 4,
            'name'     => 'Al',
        ),
		'attributes' => array(
			'data-validation' => 'required',
		),
		'object_types' => array( 'evento' ),
	) );

    $cmb->add_field( array(
        'name' => 'Indirizzo',
        'desc' => 'Indirizzo',
        'id'   => 'fabev_evento_indirizzo',
        'type' => 'textarea_small',
		'object_types' => array( 'evento' ),
    ) );

    $cmb->add_field( array(
        'name' => 'Contatti',
        'desc' => 'Inserisci eventuali contatti',
        'id'   => 'fabev_evento_contatti',
        'type' => 'textarea_small',
		'object_types' => array( 'evento' ),
    ) );

    $cmb->add_field( array(
		'name'             => esc_html__( 'Target', 'fabeventi' ),
		'desc'             => esc_html__( 'Target', 'fabeventi' ),
		'id'               => 'fabev_evento_target',
		'type'             => 'select',
		'show_option_none' => 'Tutti',
		'options'          => GetPostsArray('tipoevento'),
		'object_types' => array( 'evento' ),
		'column' => array(
            'position' => 5,
            'name'     => 'Target',
        ),
	) );
}

add_action( 'cmb2_init', 'fabev_register_localita_metabox' );
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
		'object_types' => array( 'localita' ),
	) );

    $cmb->add_field( array(
        'name' => 'Cosa vedere',
        'desc' => 'Cosa vedere (luoghi di interesse)',
        'id'   => 'fabev_localita_interesse',
        'type' => 'textarea_small',
		'object_types' => array( 'localita' ),
    ) );
}

function fabev_searchfilter($query) {
    
	if ($query->is_search && !is_admin() ) {
        
		if(isset($_GET['post_type'])) {
            
			$type 		= $_GET['post_type'];
			$localita 	= $_GET['city'];
			$tipoEvento = $_GET['tipoEvento'];
			$dataDal 	= $_GET['dataDal'];
			$dataAl 	= $_GET['dataAl'];

                if($type == 'evento') {
                    
					$query->set('post_type', array('evento'));

					if ($tipoEvento > 0){
						$query->set('category__in', array($tipoEvento));
					}

					$arrMetaQuery = [];

					if($localita > 0){

						$arrMetaQuery[] = array(
							'key' => 'fabev_evento_localita',
							'value' => $localita,
							'compare' => '='
						);
					}
					
					$arrMetaQuery[] = array(
							'key' => 'fabev_evento_dal',
							'value' => $dataDal,
							'compare' => '>=',
							'type' => 'DATE'
					);
					
					$arrMetaQuery[] = array(
							'key' => 'fabev_evento_al',
							'value' => $dataAl,
							'compare' => '<='
					);
					
					$query->set('meta_query', array(
						array(
							'relation' => 'AND', // Optional, defaults to "AND"
							$arrMetaQuery
						)
						
					));

					
					
                }
        }       
    }
	
	return $query;
}
add_filter('pre_get_posts','fabev_searchfilter');

/*
** Sostituisco il search form
*/
function fabev_search_template($template){
    global $wp_query;
    if (!$wp_query->is_search)
        return $template;
    
    return FABEV_DIR . '/templates/search-evento.php';

}

add_filter('template_include','fabev_search_template');

/*
** Sostituisco il form di ricerca
*/
function fabev_search_form($form, $args){
    
	$arrLocalita = GetPostsArray('localita');
    $arrTipoEvento = GetCategoriesArray('evento');

	foreach($arrLocalita as $id=>$nome){

		$optionLocalita .= '<option value="'. $id .'">'. $nome .'</option>';
	}

	foreach($arrTipoEvento as $id=>$nome){

		$optionTipoEvento .= '<option value="'. $id .'">'. $nome .'</option>';
	}

	$form = '<div class="container">
            <form role="search" method="get" class="search-form" action="'. home_url( '/' ) .'">
                
                
				<div class="row">
                    
                    <label for="localita" class="form-label col-md-2">'. _x( 'Search for:', 'label' ) .'</label>
                    <input type="search" class="search-field col-md-4" placeholder="'. esc_attr_x( 'Nome...', 'placeholder' ) .'" value="'. get_search_query() .'" name="s" title="' . esc_attr_x( 'Search for:', 'label' ) .'" />

				</div>

                <div class="row">
                    
                    <label for="city" class="form-label col-md-2">Località</label>
                    <select name="city" id="city" class="col-md-4">
                        <option value="0">Tutte</option>
                        '. $optionLocalita .'
                    </select>

                    <label for="tipoEvento" class="form-label col-md-2">Tipo di Evento</label>
                    <select name="tipoEvento" id="tipoEvento" class="col-md-4">
                        <option value="0">Tutti</option>
                        '. $optionTipoEvento .'
                    </select>
                    
                </div>

                <div class="row">
                    
                    <label for="dataDal" class="form-label col-md-2">Data Dal</label>
                    <input type="date" class="col-md-4" id="dataDal" name="dataDal" value="'. date('Y-m-d') .'">

                
                    <label for="dataAl" class="form-label col-md-2">Data Al</label>
                    <input type="date" class="col-md-4" id="dataAl" name="dataAl" value="'. date('Y-m-d', strtotime(date('Y-m-d') . ' +1 month')) .'">

                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary" id="btnRicercaEvento">Ricerca</button>
                </div>
                <input type="hidden" name="post_type" value="evento" />
            </form>
        </div>';

		return $form;
}

add_filter('get_search_form','fabev_search_form', 10, 2);


/*
** Sostituisco il single post
*/
function fabev_single_template($template){
    
    if ( is_singular() && !is_search() && is_main_query()){

		if (is_singular('evento')){
			return FABEV_DIR . '/templates/single-evento.php';
		}

		if (is_singular('localita')){
			return FABEV_DIR . '/templates/single-localita.php';
		}

	}
    
	return $template;

}

add_filter('template_include','fabev_single_template');


/**
 * Elenco a tendina dei target
 */
if (is_admin()){
	function fabev_filter_post_type_by_target() {
		global $typenow;
		$post_type = 'evento'; // change to your post type
		$customField = 'tipoevento';

		if ($typenow == $post_type) {

			$arr = GetPostsArray($customField);
			$current_v = isset($_GET['admin_evento_target'])? $_GET['admin_evento_target'] : '';

			foreach($arr as $id=>$nome){

				$selected = ($current_v == $id) ? 'selected="selected"' : '';

				$optionList .= '<option value="'. $id .'" '. $selected .'>'. $nome .'</option>';
			}

			$dropDown = '
				<div class="alignleft actions">
					<select name="admin_evento_target" id="admin_evento_target" class="postform">
					<option value="">Tutti i target</option>
					'. $optionList .'
					</select>
				</div>';

			echo $dropDown;
		}
		


	}
	add_action('restrict_manage_posts', 'fabev_filter_post_type_by_target');


	/*
	** Modifico la query di selezione
	*/
	function fabev_alter_query_post_list($query){
		global $pagenow;
		$post_type = 'evento'; // change to your post type
		$q_vars    = &$query->query_vars;

		if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($_GET['admin_evento_target']) && !empty($_GET['admin_evento_target'])) {
			
			$arrMetaQuery = array(
				'key' => 'fabev_evento_target',
				'value' => $_GET['admin_evento_target'],
				'compare' => '='
			);
			
			$query->set('meta_query', array(
						array(
							'relation' => 'AND', // Optional, defaults to "AND"
							$arrMetaQuery
						)
						
					));
		}
		
	}
	add_filter('parse_query', 'fabev_alter_query_post_list');
}