<?php 

function ContaParole($content, $parola = '') : int {

	// riduco tutto a lowercase

	$content = strtolower(strip_tags($content));
    $parola = trim(strtolower($parola));


	$arrContent = str_word_count($content, 1);

	$wordCount = 0;

	if ($parola == ''){

		$wordCount = count($arrContent);

        Es01_qmLog('qm/debug', 'Conteggio di tutte le parole ('. $wordCount .')');

	} else {

        $arrCount = array_count_values($arrContent);
        
        $wordCount = ($arrCount[$parola] > 0) ? $arrCount[$parola] : 0;

        Es01_qmLog('qm/debug', 'Conteggio della parola ['. $parola .'] ('. $wordCount .')');
    }

	return $wordCount;
}

function Es01_qmLog($hook, $msg) : void{

    // verifico che Query Monitor sia attivato

    if ( defined( 'QM_VERSION' ) ) {
        do_action($hook, $msg);
    }
    
}

if ( !function_exists('mostra_array')){
    
    function mostra_array($arr = array(), $txt = ''){

        echo '<pre>';
        
        echo '<b>'. $txt .'</b><br>';
        print_r($arr);
        
        echo '</pre>';
        
        echo '<hr>';
    }

}