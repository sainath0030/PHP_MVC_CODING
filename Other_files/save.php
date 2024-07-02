<?php
    
if(isset($_POST['days'])){
    $days   =   (integer) $_POST['days'] ?? 0;
    $string = weekCalculator($days);   

}else{
   return  $string = 'Not Valid';
}
function weekCalculator($days){
    $string ='Not Valid';
    if($days >= 7){
        $string         = floor($days/7);
        $remainingDays   = floor($days - ($string *7));
        if($remainingDays > 0){
            $string = $string . ' Week + '.$remainingDays.' Days ';
        }else{
             $string = $string . ' Week';
        }
    } else if($days >= 0) {
        $string = $days . ' Days';
    } else{
        $string = 'Not Valid';
    }
    return  $string;
}

echo $string ;

?>
