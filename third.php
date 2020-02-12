<?php	
function myshuffle ($str1,  $str2, $output, $str1_len, $str2_len, $i) 
{ 
	// If all characters of str1 and str2 have been included in output string
	// print the output string 
	if ($str1_len == 0 && $str2_len == 0) 
	  foreach($output as $a)
	    echo $a;
	echo "\n";
	    

	// If some characters of str1 are not included, then concatenate 
        //the first character from the remaining characters and recur for rest 
	if ($str1_len != 0) 
	{ 	
		$output[$i] = $str1[0];
		myshuffle (substr($str1,1), $str2, $output, $str1_len-1,$str2_len, $i+1); 
	} 

	// If some characters of str2 are not included, then concatenate 
        //the first character from the remaining characters and recur for rest
	if ($str2_len != 0) 
	{ 
		$output[$i] = $str2[0];
		myshuffle($str1, substr($str2,1), $output, $str1_len,$str2_len-1, $i+1); 
	} 
} 
	
echo "Please input the first list:\n";
	
$str1 = trim(fgets(STDIN));
	
echo "Please input the second list:\n";
	
$str2 = trim(fgets(STDIN));

myshuffle ($str1, $str2, "",strlen($str1), strlen($str2),0);
?>
