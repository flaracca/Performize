<?php
/*
** Arrays defining SQL, Pages, Buttons for Dashboard
*/

class Constants{

    public static $AziendaRagioneSociale   = 'InItalia Srls';
    public static $AziendaIndirizzo        = 'Via Privata Serenella 31';
    public static $AziendaCap              = '18018';
    public static $AziendaCitta            = 'Sanremo';
    public static $AziendaProvincia        = 'IM';
    public static $AziendaTelefono         = '333.813.3990';
    public static $AziendaEmail            = '';


    public function __construct(){

    }

    
    /*
    ** Main Buttons list for Dashboard
    */ 
    public function DashboardButtons() : array {

        /*
        ** type: button | ahref
        ** column : left | middle
        ** color: https://www.rapidtables.com/web/color/html-color-codes.html
        */
        /*
        $btnList[] = array(

            'text' => 'Impostazioni',
            'color' => '#FFFFFF',
            'background' => '#5D6D7E',
            'type' => 'button',
            'category' => 'FABEV-utenti',
            "column" => 'left',
            'icon' => 'fas fa-cogs',
            'availablefor' => array('direzione'),
            'link' => array(
                array(

                    'text' => 'Utenti',
                    'href' => '/FABEV-utenti',
                    'icon' => 'fas fa-users-cog',                    
                    'availablefor' => array('direzione')
        
                )
            )
        );
        */
        $btnList[] = array(

            'text' => 'Anagrafiche',
            'color' => '#FFFFFF',
            'background' => '#1E8449',
            'type' => 'button',
            'category' => 'gestione-anagrafiche',
            "column" => 'left',
            'icon' => 'fas fa-users',
            'availablefor' => array('direzione', 'responsabile_sede'),
            'link' => array(
                array(

                    'text' => 'Fornitori',
                    'href' => '/FABEV-fornitori',
                    'icon' => 'fas fa-user-friends',                    
                    'availablefor' => array('direzione', 'responsabile_sede')
        
                ),
                array(

                    'text' => 'Clienti',
                    'href' => '/FABEV-clienti',
                    'icon' => 'fas fa-users',
                    'availablefor' => array('direzione', 'responsabile_sede')
        
                ),
                array(

                    'text' => 'Trasportatori',
                    'href' => '/FABEV-trasportatori',
                    'icon' => 'fas fa-truck-moving',
                    'availablefor' => array('direzione', 'responsabile_sede')
        
                ),
                array(

                    'text' => 'Categorie',
                    'href' => '/FABEV-nominativi-categorie',
                    'icon' => 'fas fa-id-card-alt',
                    'availablefor' => array('direzione')
        
                )
            )

        );
        
        $btnList[] = array(

            'text' => 'Articoli',
            'color' => '#FFFFFF',
            'background' => '#E74C3C',
            'type' => 'button',
            'category' => 'gestione-articoli',
            "column" => 'left',
            'icon' => 'fas fa-file-contract',
            'availablefor' => array('direzione', 'responsabile_sede'),
            'link' => array(
                array(

                    'text' => 'Gestione',
                    'href' => '/FABEV-prodotti',
                    'icon' => 'fas fa-paste',                    
                    'availablefor' => array('direzione', 'responsabile_sede')
        
                ),
                array(

                    'text' => 'Parametri',
                    'href' => '/FABEV-parametri',
                    'icon' => 'fas fa-cogs',
                    'availablefor' => array('direzione', 'responsabile_sede')
        
                )
            )

        );
        
        
        $btnList[] = array(

            'text' => 'Bulbi',
            'color' => 'white',
            'background' => '#2e86c1',
            'type' => 'button',
            'category' => 'vendita',
            "column" => 'left',
            'icon' => 'fas fa-money-bill-alt',
            'availablefor' => array('direzione', 'responsabile_sede'),
            'link' => array(
                array(

                    'text' => 'Stagioni',
                    'href' => '/FABEV-stagioni',
                    'icon' => 'far fa-calendar-alt',
                    'availablefor' => array('direzione', 'responsabile_sede')
        
                ),
                array(

                    'text' => 'Stock',
                    'href' => '/FABEV-stock',
                    'icon' => 'fas fa-warehouse',
                    'availablefor' => array('direzione', 'responsabile_sede')
        
                ),                               
                array(

                    'text' => 'Ordini Clienti',
                    'href' => '/FABEV-ordini-clienti',
                    'icon' => 'fas fa-book-reader',
                    'availablefor' => array('direzione', 'responsabile_sede')
        
                ),
                array(

                    'text' => 'DDT',
                    'href' => '/FABEV-ddt',
                    'icon' => 'far fa-file-alt',
                    'availablefor' => array('direzione', 'responsabile_sede')
        
                )
            )

        );

        $btnList[] = array(

            'text' => 'Frutta Secca',
            'color' => 'white',
            'background' => '#8B4513',
            'type' => 'button',
            'category' => 'marketing',
            "column" => 'left',
            'icon' => 'fas fa-mail-bulk',
            'availablefor' => array('direzione'),
            'link' => array(
                array(

                    'text' => 'Containers',
                    'href' => '/FABEV-containers',
                    'icon' => 'fas fa-pallet',
                    'availablefor' => array('direzione')
        
                ),
                array(

                    'text' => 'Impostazioni',
                    'href' => '/FABEV-marketing-settings',
                    'icon' => 'fas fa-cog',
                    'availablefor' => array('direzione')
        
                )
            )

        );

        $btnList[] = array(

            'text' => 'Contabilità',
            'color' => 'white',
            'background' => ' #45B39D',
            'type' => 'button',
            'category' => 'contabilita',
            "column" => 'left',
            'icon' => 'fas fa-donate',
            'availablefor' => array('direzione', 'responsabile_sede'),
            'link' => array(
                array(

                    'text' => 'Documenti',
                    'href' => '/FABEV-contabilita-documenti',
                    'icon' => 'far fa-file-alt',
                    'availablefor' => array('direzione', 'responsabile_sede')
        
                ),
                array(

                    'text' => 'Impostazioni',
                    'href' => '/FABEV-contabilita-impostazioni',
                    'icon' => 'fas fa-cog',
                    'availablefor' => array('direzione', 'responsabile_sede')
        
                ),
                array(

                    'text' => 'Reports',
                    'href' => '/FABEV-contabilita-reports',
                    'icon' => 'fas fa-chart-pie',
                    'availablefor' => array('direzione', 'responsabile_sede')
        
                )
            )

        );
        
        $btnList[] = array(

            'text' => 'Importazioni',
            'color' => '#FFFFFF',
            'background' => '#E67E22',
            'type' => 'button',
            'category' => 'import',
            "column" => 'middle',
            'icon' => 'fas fa-upload',
            'availablefor' => array('direzione', 'responsabile_sede'),
            'link' => array(
                array(

                    'text' => 'Carica/Aggiorna Stock',
                    'href' => '/FABEV-stock-import',
                    'icon' => 'fas fa-warehouse',
                    'availablefor' => array('direzione', 'responsabile_sede')
        
                ),
                array(

                    'text' => 'Carica Nominativi',
                    'href' => '/FABEV-nominativi-import',
                    'icon' => 'fas fa-users',
                    'availablefor' => array('direzione', 'responsabile_sede')
        
                )
            )

        );
        
        $btnList[] = array(

            'text' => 'Reports',
            'color' => '#FFFFFF',
            'background' => '#8600b3',
            'type' => 'button',
            'category' => 'reports',
            "column" => 'middle',
            'icon' => 'fas fa-chart-bar',
            'availablefor' => array('direzione', 'responsabile_sede'),
            'link' => array(
                array(

                    'text' => 'Librone',
                    'href' => '/FABEV-report-librone',
                    'icon' => 'fas fa-book',
                    'availablefor' => array('direzione', 'responsabile_sede')
        
                ),
                array(

                    'text' => 'Cliente',
                    'href' => '/FABEV-report-cliente',
                    'icon' => 'fas fa-user-friends',
                    'availablefor' => array('direzione', 'responsabile_sede')
        
                )
            )

        );
        return $btnList;

    }


    /*
    ** Page list to install
    */ 
    public function PageList() : array {
        
        /*
        ** get page from theme directory
        */
        $pages[] = array(
            'post_title' => 'FABEV Contabilita Impostazioni',
            'post_content' => '[sc_FABEV_cont_impostazioni]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );

        $pages[] = array(
            'post_title' => 'FABEV Contabilita Documenti',
            'post_content' => '[sc_FABEV_cont_documenti]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );

        $pages[] = array(
            'post_title' => 'FABEV Contabilita Reports',
            'post_content' => '[sc_FABEV_cont_reports]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );

        $pages[] = array(
            'post_title' => 'FABEV Utenti',
            'post_content' => '[sc_FABEV_utenti]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );

        $pages[] = array(
            'post_title' => 'FABEV Nominativi Categorie',
            'post_content' => '[sc_FABEV_nominativi_categorie]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );

        $pages[] = array(
            'post_title' => 'FABEV Marketing Settings',
            'post_content' => '[sc_FABEV_mkt_settings]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );

        $pages[] = array(
            'post_title' => 'FABEV Containers',
            'post_content' => '[sc_FABEV_container]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );

        $pages[] = array(
            'post_title' => 'FABEV Nominativi Import',
            'post_content' => '[sc_FABEV_nominativi_import]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );

        $pages[] = array(
            'post_title' => 'FABEV Report Librone',
            'post_content' => '[sc_FABEV_report_librone]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );

        $pages[] = array(
            'post_title' => 'FABEV Report Cliente',
            'post_content' => '[sc_FABEV_report_cliente]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );


        $pages[] = array(
            'post_title' => 'FABEV Stock Import',
            'post_content' => '[sc_FABEV_stock_import]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );

        $pages[] = array(
            'post_title' => 'Dashboard',
            'post_content' => '[sc_dashboard]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );
        
        $pages[] = array(
            'post_title' => 'FABEV Clienti',
            'post_content' => '[sc_FABEV_clienti]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );

        $pages[] = array(
            'post_title' => 'FABEV Fornitori',
            'post_content' => '[sc_FABEV_fornitori]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );

        $pages[] = array(
            'post_title' => 'FABEV Trasportatori',
            'post_content' => '[sc_FABEV_trasportatori]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );

        $pages[] = array(
            'post_title' => 'FABEV Parametri',
            'post_content' => '[sc_FABEV_parametriArticoli]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );

        
        $pages[] = array(
            'post_title' => 'FABEV Prodotti',
            'post_content' => '[sc_FABEV_prodotti]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );
        
        $pages[] = array(
            'post_title' => 'FABEV Stagioni',
            'post_content' => '[sc_FABEV_stagioni]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );
        
        $pages[] = array(
            'post_title' => 'FABEV Stock',
            'post_content' => '[sc_FABEV_stock]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );

        $pages[] = array(
            'post_title' => 'FABEV Ordini Clienti',
            'post_content' => '[sc_FABEV_ordini_clienti]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );

        $pages[] = array(
            'post_title' => 'FABEV DDT',
            'post_content' => '[sc_FABEV_ddt]',
            'post_status' => 'publish',
            'template' => 'page-fullwidth.php'
        );
        
        return $pages;

    }

    
    /*
    ** Tables list to install
    */ 
    public function TableList() : array {

        $prefisso = FABEV_DBPREFIX;
        $tInt = 'INT(11)';

        /*
        ** PRODOTTI
        */
        
        $tableName = $prefisso . 'articoli';
        $tables[$tableName]['columns']['articoloId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['sku'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['nome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['descrizione'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['varietaId'] = array(
            'type' => $tInt,
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['famigliaId'] = array(
            'type' => $tInt,
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['misuraId'] = array(
            'type' => $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['gruppoId'] = array(
            'type' => $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['sgruppoId'] = array(
            'type' => $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['coloreId'] = array(
            'type' => $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['settoreId'] = array(
            'type' => $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['qtaXcassa'] = array(
            'type' => $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['qtaXconfezione'] = array(
            'type' => $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['fornitoreId'] = array(
            'type' => $tInt,
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['prezzoFornitore'] = array(
            'type' => 'DECIMAL(8,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['prezzoCliente'] = array(
            'type' => 'DECIMAL(8,2)',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['skuFornitore'] = array(
            'type' => 'TEXT',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['img'] = array(
            'type' => 'TEXT',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['imgOthers'] = array(
            'type' => 'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['nazioneId'] = array(
            'type' => $tInt,
            'extra' => ''
        );
        
        /*
        ** FAMIGLIA
        */
        
        $tableName = $prefisso . 'famiglia';
        $tables[$tableName]['columns']['famigliaId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['nome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['sigla'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['settoreId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        /*
        ** GRUPPI
        */
        
        $tableName = $prefisso . 'gruppi';
        $tables[$tableName]['columns']['gruppoId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['nome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['sigla'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['famigliaId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['settoreId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        /*
        ** SOTTOGRUPPI
        */
        
        $tableName = $prefisso . 'sottogruppi';
        $tables[$tableName]['columns']['gruppoId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['nome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['sigla'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['famigliaId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['settoreId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        /*
        ** VARIETA
        */
        
        $tableName = $prefisso . 'varieta';
        $tables[$tableName]['columns']['varietaId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['nome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['sigla'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['famigliaId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['settoreId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        /*
        ** MISURA
        */
        
        $tableName = $prefisso . 'misura';
        $tables[$tableName]['columns']['misuraId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['nome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['sigla'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['famigliaId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['settoreId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['qtaXcassa'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        /*
        ** COLORE
        */
        
        $tableName = $prefisso . 'colore';
        $tables[$tableName]['columns']['coloreId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['nome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['sigla'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['famigliaId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['settoreId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        /*
        ** SETTORE
        */
        
        $tableName = $prefisso . 'settori';
        $tables[$tableName]['columns']['settoreId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['nome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['sigla'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );


        /*
        ** NAZIONI
        */
        
        $tableName = $prefisso . 'nazioni';
        $tables[$tableName]['columns']['nazioneId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['nome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['sigla'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['settoreId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );
        
        /*
        ** NOMINATIVI
        */
        
        $tableName = $prefisso . 'nominativi';
        $tables[$tableName]['columns']['nominativoId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['ragioneSociale'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['pIva'] = array(
            'type' =>  'VARCHAR(11)',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['cFiscale'] = array(
            'type' =>  'VARCHAR(16)',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['indirizzo'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['citta'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['cap'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['prov'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['nazione'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['telefono'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['email'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['pec'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['sdi'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['contattoNome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['contattoTelefono'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['contattoEmail'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['tipo'] = array(
            'type' =>  'VARCHAR(20)',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['trasportatoreId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['sigla'] = array(
            'type' =>  'VARCHAR(5)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['iban'] = array(
            'type' =>  'VARCHAR(30)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['note'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['categorie'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        
        // CAMPI MARKETING

        $tables[$tableName]['columns']['mktStato'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['dominioEmail'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['noteMkt'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

            // CAMPI PRIMA NOTA

        $tables[$tableName]['columns']['contoId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['notePN'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        /*
        ** NOMINATIVI CONTATTI
        */
        
        $tableName = $prefisso . 'nominativiContatti';
        $tables[$tableName]['columns']['contattoId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['nominativoId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['firstName'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['lastName'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['ruolo'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['email'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['landLine'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['mobile'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['note'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );
        
        /*
        ** STAGIONI
        */
        
        $tableName = $prefisso . 'stagioni';
        $tables[$tableName]['columns']['stagioneId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['visualizzatoCome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['settoreId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['dataDal'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['dataAl'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['predefinita'] = array(
            'type' =>  'VARCHAR(5)',
            'extra' => ''
        );

        /*
        ** STOCK
        */
        
        $tableName = $prefisso . 'stock';
        $tables[$tableName]['columns']['stockId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['stagioneId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['articoloId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['qta'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['settoreId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['prezzoFornitore'] = array(
            'type' => 'DECIMAL (6,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['prezzoCliente'] = array(
            'type' => 'DECIMAL (6,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['boxes'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['qtaXcassa'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['sku'] = array(
            'type' =>  'VARCHAR(100)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['articoloNome'] = array(
            'type' =>  'VARCHAR(200)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['qtaXconfezione'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        /*
        ** ORDINI CLIENTI (PRENOTAZIONI)
        */
        
        $tableName = $prefisso . 'ordiniClienti';
        $tables[$tableName]['columns']['ordineId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['creatoIl'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['modificatoIl'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['clienteId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['stagioneId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['settoreId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['numDoc'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['prefixDoc'] = array(
            'type' =>  'VARCHAR(5)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['annoDoc'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['note'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );
        
        
        
        /*
        ** ORDINI VOCI
        */
        
        $tableName = $prefisso . 'ordiniVoci';
        $tables[$tableName]['columns']['voceId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['ordineId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['articoloId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['clienteId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['qtaPrenotata'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['stagioneId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['prezzoCliente'] = array(
            'type' =>  'DECIMAL (7,3)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['boxes'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );
        
        /*
        ** DDT CLIENTI (VENDITA)
        */
        
        $tableName = $prefisso . 'ddtClienti';
        $tables[$tableName]['columns']['ddtId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['creatoIl'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['modificatoIl'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['clienteId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['stagioneId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['settoreId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['dataDoc'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['fileUrl'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['numDoc'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['prefixDoc'] = array(
            'type' =>  'VARCHAR(5)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['annoDoc'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['note'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );
        
        /*
        ** DDT VOCI
        */
        
        $tableName = $prefisso . 'ddtVoci';
        $tables[$tableName]['columns']['ddtVoceId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['ddtId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['articoloId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['clienteId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['fornitoreId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['stagioneId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['qta'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['pzXconfezione'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['sku'] = array(
            'type' =>  'VARCHAR(100)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['prezzoCliente'] = array(
            'type' =>  'DECIMAL (7,3)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['boxes'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        

        /*
        ** OPZIONI
        */
        
        $tableName = $prefisso . 'opzioni';
        $tables[$tableName]['columns']['optionId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['optionKey'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['optionValue'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        /*
        ** UTENTI
        */
        
        $tableName = $prefisso . 'utenti';
        $tables[$tableName]['columns']['id'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['wpid'] = array(
            'type' => $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['firstName'] = array(
            'type' => 'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['lastName'] = array(
            'type' => 'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['Username'] = array(
            'type' => 'VARCHAR(20)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['Password'] = array(
            'type' => 'VARCHAR(20)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['Ruolo'] = array(
            'type' => 'VARCHAR(20)',
            'extra' => ''
        );


        /*
        ** STOCK IMPORT
        */
        
        $tableName = $prefisso . 'stock_import';
        $tables[$tableName]['columns']['id'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['skuFornitore'] = array(
            'type' => 'VARCHAR(100)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['nome'] = array(
            'type' => 'VARCHAR(100)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['misura'] = array(
            'type' => 'VARCHAR(20)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['gruppo'] = array(
            'type' => 'VARCHAR(20)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['sottoGruppo'] = array(
            'type' => 'VARCHAR(20)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['Password'] = array(
            'type' => 'VARCHAR(20)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['casse'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['qtaXcassa'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['prezzoFornitore'] = array(
            'type' =>  'DECIMAL (6,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['colore'] = array(
            'type' => 'VARCHAR(20)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['provenienza'] = array(
            'type' => 'VARCHAR(20)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['famiglia'] = array(
            'type' => 'VARCHAR(20)',
            'extra' => ''
        );

        /*
        ** NOMINATIVI IMPORT
        */
        
        $tableName = $prefisso . 'nominativi_import';
        $tables[$tableName]['columns']['nominativoId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['ragioneSociale'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['pIva'] = array(
            'type' =>  'VARCHAR(11)',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['cFiscale'] = array(
            'type' =>  'VARCHAR(16)',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['indirizzo'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['citta'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['cap'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['prov'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['nazione'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['telefono'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['email'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['pec'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['sdi'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['contattoNome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['contattoTelefono'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['contattoEmail'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['tipo'] = array(
            'type' =>  'VARCHAR(20)',
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['trasportatoreId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['sigla'] = array(
            'type' =>  'VARCHAR(5)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['iban'] = array(
            'type' =>  'VARCHAR(30)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['note'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        /*
        ** MARKETING EVENTI
        */
        
        $tableName = $prefisso . 'mkt_eventi';
        $tables[$tableName]['columns']['eventoId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['nominativoId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['dataPianificata'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['dataEsecuzione'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['inseritoDa'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['modificatoDa'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['commento'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['azioneId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['containerId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['urgente'] = array(
            'type' =>  'VARCHAR(5)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['userId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['ora'] = array(
            'type' =>  'VARCHAR(5)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['oggetto'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['dataInserimento'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['dataUltimaModifica'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        /*
        ** MARKETING AZIONE
        */
        
        $tableName = $prefisso . 'azioni';
        $tables[$tableName]['columns']['azioneId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['nome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['coloreBackground'] = array(
            'type' =>  'VARCHAR(7)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['coloreTesto'] = array(
            'type' =>  'VARCHAR(7)',
            'extra' => ''
        );

        /*
        ** MARKETING DOCUMENTI
        */
        
        $tableName = $prefisso . 'mkt_documenti';
        $tables[$tableName]['columns']['documentoId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['tipoDocId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['ddtId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['clienteId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['fornitoreId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['trasportatoreId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['eventoId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['ordineId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['stagioneId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['containerId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['docUrl'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['docNome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        /*
        ** MARKETING TIPO DOC
        */
        
        $tableName = $prefisso . 'mkt_tipodocumento';
        $tables[$tableName]['columns']['tipoDocId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['nome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        /*
        ** MARKETING CONTAINER
        */
        
        $tableName = $prefisso . 'mkt_container';
        $tables[$tableName]['columns']['containerId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['codice'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['fornitoreId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['dataInserimento'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['note'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['nome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['venduto'] = array(
            'type' =>  'VARCHAR(5)',
            'extra' => ''
        );

        /*
        ** MARKETING CONTAINER VOCI
        */
        
        $tableName = $prefisso . 'mkt_containervoci';
        $tables[$tableName]['columns']['voceId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['prodottoId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['containerId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['pallets'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['peso'] = array(
            'type' =>  'DECIMAL(10,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['prezzoKg'] = array(
            'type' =>  'DECIMAL(10,2)',
            'extra' => ''
        );

        /*
        ** EMAILS FROM
        */
        
        $tableName = $prefisso . 'emailsInvio';
        $tables[$tableName]['columns']['emailId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['emailAddress'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['emailShownAs'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['host'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['smtpAuth'] = array(
            'type' =>  'VARCHAR(5)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['username'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['password'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['port'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        /*
        ** CONTABILITA CONTI/NOTE SPESE
        */
        
        $tableName = $prefisso . 'ctbt_conti';
        $tables[$tableName]['columns']['contoId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['nome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['tipo'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['coloreSfondo'] = array(
            'type' =>  'VARCHAR(7)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['coloreTesto'] = array(
            'type' =>  'VARCHAR(7)',
            'extra' => ''
        );

        /*
        ** CONTABILITA PAGAMENTI
        */
        
        $tableName = $prefisso . 'ctbt_pagamenti';
        $tables[$tableName]['columns']['pagamentoId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['nome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        /*
        ** CONTABILITA CONTI BANCARI
        */
        
        $tableName = $prefisso . 'ctbt_contiBancari';
        $tables[$tableName]['columns']['contoId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['nome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['nomeBanca'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['iban'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        /*
        ** CONTABILITA ALIQUOTE/ESENZIONI
        */
        
        $tableName = $prefisso . 'ctbt_aliquoteEsenzioni';
        $tables[$tableName]['columns']['aliquotaId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['nome'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['percentuale'] = array(
            'type' =>  'DECIMAL(4,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['testo'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        /*
        ** CONTABILITA DOCUMENTI
        */
        
        $tableName = $prefisso . 'ctbt_documenti';
        $tables[$tableName]['columns']['docId'] = array(
            'type' =>  $tInt,
            'extra' => 'AUTO_INCREMENT'
        );

        $tables[$tableName]['columns']['nominativoId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['contoId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['nr'] = array(
            'type' =>  'VARCHAR(20)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['importoTotale'] = array(
            'type' =>  'DECIMAL(7,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['importoImponibile'] = array(
            'type' =>  'DECIMAL(7,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['importoIva'] = array(
            'type' =>  'DECIMAL(7,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['importoImponibile1'] = array(
            'type' =>  'DECIMAL(7,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['importoIva1'] = array(
            'type' =>  'DECIMAL(7,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['importoImponibile2'] = array(
            'type' =>  'DECIMAL(7,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['importoIva2'] = array(
            'type' =>  'DECIMAL(7,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['importoImponibile3'] = array(
            'type' =>  'DECIMAL(7,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['importoIva3'] = array(
            'type' =>  'DECIMAL(7,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['userId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['pagamentoId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['tipoConto'] = array(
            'type' =>  'VARCHAR(9)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['tipoDoc'] = array(
            'type' =>  'VARCHAR(3)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['dataScadenza'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['dataEmissione'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['dataPagamento'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['contoBancario'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['aliquotaId1'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['aliquotaIva1'] = array(
            'type' =>  'DECIMAL(6,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['aliquotaId2'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['aliquotaIva2'] = array(
            'type' =>  'DECIMAL(6,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['aliquotaId3'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        $tables[$tableName]['columns']['aliquotaIva3'] = array(
            'type' =>  'DECIMAL(6,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['note'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['acquistoVendita'] = array(
            'type' =>  'VARCHAR(1)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['abbuono'] = array(
            'type' =>  'DECIMAL(8,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['movimento'] = array(
            'type' =>  'DECIMAL(8,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['linkedToId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );
        
        $tables[$tableName]['columns']['causaleMovimento'] = array(
            'type' =>  'TEXT',
            'extra' => ''
        );

        $tables[$tableName]['columns']['inseritoIl'] = array(
            'type' =>  'VARCHAR(10)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['pagamentoImporto'] = array(
            'type' =>  'DECIMAL(8,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['pagamentoAbbuono'] = array(
            'type' =>  'DECIMAL(8,2)',
            'extra' => ''
        );

        $tables[$tableName]['columns']['spesaLinkedToId'] = array(
            'type' =>  $tInt,
            'extra' => ''
        );

        return $tables;

    }

    /*
    ** Tables filling
    */ 
    public function TableFill() : array {

        $prefisso = FABEV_DBPREFIX;
        /*
        ** COI MAIN
        */
        
        $tableName = $prefisso . 'tabletwo'; $cont = 0;

        $cont++;
        $tables[$tableName][$cont] = array(
            'idColumnName' =>  'id',
            'id' =>  $cont,
            'campo01' => 'pos',
            'campo02' => 'Fruity',
            'campo03' => 'Fruttato'
        );

        return $tables;
    }
}
?>