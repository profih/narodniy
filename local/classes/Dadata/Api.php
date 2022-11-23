<?php

namespace Dadata;

class Api
{
    private $base_link = 'https://suggestions.dadata.ru/suggestions/api/4_1/rs/';
    public function formRequest(){
        $request = new Request();
        return $request;
    }

    public function searchByIp($Ip){
        $link = $this->base_link . 'iplocate/address?ip=46.226.227.20';
        $arIp = array('ip' => $Ip);
        $request = $this -> formRequest();
        $request -> SetPayload($arIp);
        $request -> SetLink($link);
        $request -> SetMethod('post');
        $request -> Exec();
        if ($request -> getResponseCode() == '200'){
            return $request -> getResponseBody();
        } else {
            return '{"location": []}';
        }
    }

    public function searchByInn($inn){
        $link = $this->base_link . 'findById/party';
        $arInn = array('query' => $inn);
        $request = $this -> formRequest();
        $request -> SetPayload($arInn);
        $request -> SetLink($link);
        $request -> SetMethod('post');
        $request -> Exec();
        if ($request -> getResponseCode() == '200'){
            return $request -> getResponseBody();
        } else {
            return '{"suggestions": []}';
        }
    }


    public function log($title, $string){
        $this -> log_string .= '<br>';
        $this -> log_string .= $title;
        $this -> log_string .= '<br>';
        $this -> log_string .= date('h:i:s');
        $this -> log_string .= '<br>';
        $this -> log_string .= print_r($string, true);
        $this -> log_string .= '<br>';
    }

    public function showLog(){
        echo $this -> log_string;
    }

}