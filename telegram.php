<?php
$telegrambot='bot5658779844:AAGaz-vq8Hdgdaz2u5wZ1iUVcwC0hHu6zJM';
$user='1938187205';


function kirim($pesan,$bot,$chat){
    $url='https://api.telegram.org/'.$bot.'/sendMessage?chat_id='.$chat.'&text='.$pesan.'&parse_mode=html';
    $result=file_get_contents($url,true);
    return $result;


}
kirim('<b>telaso kalian anjinglah ngoding htmlnya gimana kalo php bgst bingung mau buat kata kata berpharagrap anjir</b>',$telegrambot,$user);



?>