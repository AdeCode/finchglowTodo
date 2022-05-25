<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrayValueIndex</title>
</head>
<body>
    <?php
        $sortedArr = array(1,2,3,5,6,7);
        
        function getValueIndex($arr, $value)
        {
            if(in_array($value, $arr))
            {
                return array_search($value, $arr);
            }else{
                for($x=0; $x<count($arr); $x++)
                {
                    if($arr[$x]>$value) return $x;  
                }
            }   
        }
        echo getValueIndex($sortedArr,4);


        //another solution
        function getIndex($arr, $value){
            for($x=0; $x<count($arr);$x++){
                if($arr[$x] == $value){
                    return $x;
                }else{
                    if($arr[$x]>$value) return $x;
                }
            }
        }
        // echo getIndex($sortedArr,3);

    ?>
</body>
</html>