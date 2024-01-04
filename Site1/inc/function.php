<?php
function debug($tableau) {
    echo '<pre style="height:200px;overflow-y: scroll;font-size: .5rem;padding: .6rem;font-family: Consolas, Monospace; background-color: #000;color: limegreen;">';
    print_r($tableau);
    echo '</pre>';
}

function xxsCleanPost($key) {
    return strip_tags(trim($_POST[$key]));
}


function validText($err,$id,$var,$min,$max){
    if(!empty($var)){
        if(mb_strlen($var)<$min){
            $err[$id] = 'Veuillez renseigner plus de ' .$min .' caractères !';
        }elseif(mb_strlen($var)>$max){
            $err[$id] = 'Veuillez renseigner moins de ' .$max .'  caractères !';
        }
    }else{
        $err[$id] = 'Veuillez renseigner ce champ !';
    }
    return $err;
}


function validEmail($err,$var, $id){
    if(!empty($var)) {
        if (!filter_var($var, FILTER_VALIDATE_EMAIL)) {
            $err[$id] = 'Veuillez renseigner un email valide !';
        }
    } else {
        $err[$id] = 'Veuillez renseigner un email !';
    }
    return $err;
}

function viewError($err, $key)
{
    if(!empty($err[$key])) {
        echo $err[$key];
    }
}
function getPostValue($key, $data='')
{
    if(!empty($_POST[$key])) {
        echo $_POST[$key];
    }elseif(!empty($data)) {
        echo $data;
    }
}
