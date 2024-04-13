 <?php
	defined('_JEXEC') or die('Access deny');
	
	class plgContentTargetPDF extends JPlugin 
	{
		function onContentPrepare($content, $article, $params, $limit){	
			$article->text = str_ireplace('.pdf"','.pdf" target="_blank" ',$article->text);
			$article->text = str_ireplace(".pdf'",".pdf' target=\"_blank\" ",$article->text);
		}	
	}
?>
