<?php 
	function decodeTagArray($tag_array){

		$tags=array();
		$tags=explode(',',$tag_array);
		
		for ($i=0; $i<count($tags); $i++) { 
			echo "<a href='' type='button' 
					class='btn btn-success btn-sm custom-btn-tag' title='".strtoupper($tags[$i])."'>
	        				<i class='fa fa-tag'> </i>&nbsp;".strtoupper($tags[$i])."</a>&nbsp;&nbsp;";
		}
	}
?>