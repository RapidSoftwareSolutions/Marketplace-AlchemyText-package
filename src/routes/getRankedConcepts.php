<?php

$app->post('/api/AlchemyText/getRankedConcepts', function ($request, $response, $args) {
    
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey']);
    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $a=$validateRes['args']['html'];
        $b=$validateRes['args']['url'];
        $c=$validateRes['args']['text'];
        $err=false;
        if((!empty($a) && !empty($b) && !empty($c)) || (empty($a) && !empty($b) && !empty($c)) || (!empty($a) && empty($b) && !empty($c))
           || (!empty($a) && !empty($b) && empty($c)) || (empty($a) && empty($b) && empty($c))
        ) {
            $err = true;
        }
        if($err) {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = "REQUIRED_FIELDS";
            $result['contextWrites']['to']['status_msg'] = "Please, check and fill in required fields.";
            $result['contextWrites']['to']['fields'] = "please, provide one of parameters: html, url or text";
            return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
        }
        
        $post_data = $validateRes;
    }
    
    $body = [];
    if(!empty($post_data['args']['html'])) {
        $file = file_get_contents($post_data['args']['html']);
        $body['html'] = $file;
        $query_str = 'https://gateway-a.watsonplatform.net/calls/html/HTMLGetRankedConcepts?apikey='.$post_data['args']['apiKey'];
    }
    if(!empty($post_data['args']['url'])) {
        $body['url'] = $post_data['args']['url'];
        $query_str = 'https://gateway-a.watsonplatform.net/calls/url/URLGetRankedConcepts?apikey='.$post_data['args']['apiKey'];
    }
    if(!empty($post_data['args']['text'])) {
        $file = file_get_contents($post_data['args']['text']);
        $body['text'] = $file;
        $query_str = 'https://gateway-a.watsonplatform.net/calls/text/TextGetRankedConcepts?apikey='.$post_data['args']['apiKey'];
    }
    
    if(!empty($post_data['args']['urlForResponse'])) { //HTML, TEXT
        $body['url'] = $post_data['args']['urlForResponse'];
    }
    if(!empty($post_data['args']['maxRetrieve'])) { //HTML, URL, TEXT
        $body['maxRetrieve'] = $post_data['args']['maxRetrieve'];
    }
    if(!empty($post_data['args']['knowledgeGraph'])) { //HTML, URL, TEXT
        $body['knowledgeGraph'] = $post_data['args']['knowledgeGraph'];
    }
    if(isset($post_data['args']['linkedData']) && $post_data['args']['linkedData']!='') { //HTML, URL, TEXT
        $body['linkedData'] = $post_data['args']['linkedData'];
    }
    if(!empty($post_data['args']['showSourceText'])) { //HTML, URL, TEXT
        $body['showSourceText'] = urlencode($post_data['args']['showSourceText']);
    }
    if(!empty($post_data['args']['cquery'])) { //HTML, URL
        $body['cquery'] = urlencode($post_data['args']['cquery']);
    }
    if(!empty($post_data['args']['xpath'])) { //HTML, URL
        $body['xpath'] = urlencode($post_data['args']['xpath']);
    }
    if(!empty($post_data['args']['sourceText'])) { //HTML, URL
        $body['sourceText'] = urlencode($post_data['args']['sourceText']);
    }
    
    $body['outputMode'] = 'json';  
    
    $client = $this->httpClient;
    
    try {

        $resp = $client->post( $query_str, 
            [
                'form_params' => $body
            ]
        );
        $responseBody = $resp->getBody()->getContents();
  
        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204']) && json_decode($responseBody)->status=='OK') {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if(empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to']['status_msg'] = "Api return no results";
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }
    
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
    
});
