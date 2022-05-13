<?php

add_filter( 'the_content', 'es01_countWords' );

function es01_countWords($content){
	
	if(is_single() && is_main_query()){

        $wordToCount = '';

		if (current_user_can( 'edit_posts' )){
			
            if ($_REQUEST){

                $wordToCount = ($_REQUEST['es01WordToCount'] != '') ? $_REQUEST['es01WordToCount'] : '';

            }

            $wordCount = ContaParole($content, $wordToCount);

            $adminPart = '<form method="post">
                                Parola da contare: <input type="text" name="es01WordToCount" value="'. $wordToCount .'">
                                <input name="es01submit" type="submit" class="submit" value="Conta">
                            </form>';


		} else {

            $wordCount = ContaParole($content);

        }

		$afterContent = '<p>Totale parole nel testo: <span id="es01WordCounted">'. $wordCount .'</span></p>';

		$content = $adminPart . $content . $afterContent;
	}
	

	return $content; 
}
