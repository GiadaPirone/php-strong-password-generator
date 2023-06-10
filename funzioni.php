<?php

function generaPs ($caratteri,$Lettere,$Numeri,$Simboli){
    // session_start();
    
    // stringa che diventa un array con tutti i caratteri.
    // $caratteriAccettati = "a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,!,?,%,*,1,2,3,4,5,6,7,8,9,0";
    // $array = explode(",", $caratteriAccettati);

    $arrayLettere= [ "a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    $arrayNumeri=["0","1","2","3","1","5","6","7","8","9"];
    $arrayCaratteriSpeciali=[ ".","-","?","!","/","(",")","$","%","*","="];

    // array parte vuoto,da generare
    $array=[];

    // password che parte vuota, da generare.
    $password = "";

    if($Numeri){
        $array = array_merge($array, $arrayNumeri);
        var_dump($array);
    }

    if( $Lettere){
        $array = array_merge($array,$arrayLettere);
    }

    if($Simboli){
       $array = array_merge($array,$arrayCaratteriSpeciali);
    }

    
    

    for ($i = 0; $i < $caratteri; $i++) {
        $password .= $array[rand(0, count($array))];
    }


    

    if ($password) {
        // header("Location: successo.php");
        echo $password;
    } else {
        echo "inserisci i dati";
    }

    // $_SESSION["password"]= $password;
}
?>