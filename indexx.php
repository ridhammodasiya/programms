<?php
$salary=readline("Enter your cTC in lakhs:");
$hrs = $salary*0.1;
$da = $salary*0.05;
$pf = $salary*0.03;
$remaining_salary=$salary - ($hrs + $da + $pf);
if($remaining_salary <=500000){
    print("no taxes");
}
else if($remaining_salary>500000 && $remaining_salary<1000000){
    $remaining_salary=$remaining_salary - ($remaining_salary *0.1);
    print("your hand salary is :$remaining_salary");
}

elseif($remaining_salary>=1100000 && $remaining_salary<2000000){
    $remaining_salary=$remaining_salary - ($remaining_salary *0.05);
    print("your salary is :$remaining_salary");
}

elseif($remaining_salary>=20000000 ){
    $remaining_salary=$remaining_salary - ($remaining_salary *0.03);
    print("your salary is :$remaining_salary");
}