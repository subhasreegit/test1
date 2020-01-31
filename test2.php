<?php

	$STUDENT_ABC=array(
		"STUDENT_ID1" => array(
    		"NAME" => "Subhasree Mitra",  
    		"CLASS" => "11",
    		"MARKS" => array( 
        		"MATHS" => "70",  
        		"ENGLISH" => "50", 
        		"SCIENCE" => "50"
    		) 
		),
		"STUDENT_ID2" =>array(
    		"NAME" => "Subhasree Mitra",  
    		"CLASS" => "11",
    		"MARKS" => array( 
        		"MATHS" => "40",  
        		"ENGLISH" => "50", 
        		"SCIENCE" => "40"
    		) 
		),
		"STUDENT_ID3" => array( 
    		"NAME" => "Shakti Ray",  
    		"CLASS" => "12",
    		"MARKS" => array( 
        		"MATHS" => "49",  
        		"ENGLISH" => "51", 
        		"SCIENCE" => "30"
    		) 
		),
		"STUDENT_ID4" => array( 
    		"NAME" => "Anand Thakur",  
    		"CLASS" => "11",
    		"MARKS" => array( 
        		"MATHS" => "70",  
        		"ENGLISH" => "50", 
        		"SCIENCE" => "90"
    		) 
		),
	);

	
	

print_r($STUDENT_ABC);
echo "<br>";
/*foreach($STUDENT_ABC as $key=>$values){
	foreach($value as $sub_key[] => $sub_val[]){
		if (is_array($sub_val)) { 
            echo $sub_key . " : \n"; 
            foreach ($sub_val as $k => $v) { 
                echo "\t" .$k . " = " . $v . "\n"; 
            } 
        } else { 
            echo $sub_key . " = " . $sub_val . "\n"; 
        } 
	}
}*/

/*foreach($STUDENT_ABC as $key=>$values){
	foreach($value as $sub_key => $sub_val){
		echo $sub_val;
	}
}*/
$a;
$s=0;

foreach($STUDENT_ABC as $key=>$values)
{
	foreach($values as $sub_key=>$sub_val)
	{
		foreach($sub_val as $sub_key1=>$sub_val1)
		{
			echo $sub_val1."<br>";
			$s=$s+$sub_val1;
		}
		$a[]=$s;
		$s=0;
	}
}

$k;

for($i=0;$i<12;$i++)
{
	if($a[$i]!=0){

	}
	else{
		$k=$a;
	}
}

var_dump($a);
echo "<br>";

print_r($a);
echo "<br>";

print_r($k);




?>