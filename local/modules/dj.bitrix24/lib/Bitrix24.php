<?php


namespace DJScripts;

use \Bitrix\Main\Config\Option as Options;

class Bitrix24
{
    private $source_id;
    private $assigned_by_id;
    private $webhook_link;
    private $default_title;
    private $module_id = 'dj.bitrix24';

    public function __construct($source_id=false, $webhook_link=false, $default_title=false, $assigned_by_id=false){
        $this -> source_id = $source_id ?: Options::get($this -> module_id, 'source_id');
        $this -> webhook_link = $webhook_link ?: Options::get($this -> module_id, 'webhook_link');
        $this -> default_title = $default_title?: Options::get($this -> module_id, 'default_title');
        $this -> assigned_by_id = $assigned_by_id?: Options::get($this -> module_id, 'assigned_by_id');
    }

    private function constructLeadLink($fields): string
    {
        $link = $this -> webhook_link . 'crm.lead.add.json?';
        $url_fields = [];
        $fields['SOURCE_ID'] = $this -> source_id;
        $fields['ASSIGNED_BY_ID'] = $this -> assigned_by_id;
        foreach ($fields as $field_name => $field) {
            $url_fields[] = 'FIELDS[' . $field_name . ']=' . urlencode($field);
        }
        $link .= implode('&', $url_fields);
        return $link;
    }

    public function createLead($fields)
    {
        $link = $this -> constructLeadLink($fields);
        $curlDeal = curl_init();
        curl_setopt_array($curlDeal, array(
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $link));

        $result = curl_exec($curlDeal);
        return json_decode($result, 1);
    }

    public function createCallbackLead($phone, $comments = false, $title = false, $name=false, $email=false, $city=false)
    {

        $title = $title ?: $this -> default_title;
        $fields = [
            'TITLE' => $title,
            'PHONE][0][VALUE' => $phone,
            'COMMENTS' => $comments,
            'NAME' => $name,
            'UF_CRM_1610355528210' => $city,
            'EMAIL][0][VALUE' => $email];
        return $this -> createLead($fields);
    }

    private function addProducts($lead_id, $products_array)
    {
        $queryUrl = $this-> webhook_link . 'crm.lead.productrows.set.json';
        $queryData = http_build_query(array(
            'id' => $lead_id,
            'rows' => $products_array,
        ));
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $queryUrl,
            CURLOPT_POSTFIELDS => $queryData,
        ));
        $result = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($result, 1);
        print_r($result);
    }

    public function createOrderLead($phone, $product_array, $comments = false, $title = false, $name=null, $email=null)
    {
        $lead_id = $this->createCallbackLead($phone, $comments, $title, $name, $email)['result'];
        $this->addProducts($lead_id, $product_array);
    }
}