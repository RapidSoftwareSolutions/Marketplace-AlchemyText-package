<?php

$app->post('/api/AlchemyText/getRankedNamedEntitiesFromText', function ($request, $response, $args) {
    
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','text']);
    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    
    $body = [];
    if(!empty($post_data['args']['text'])) {
        $file = file_get_contents($post_data['args']['text']);
        $body['text'] = $file;
        $query_str = 'https://gateway-a.watsonplatform.net/calls/text/TextGetRankedNamedEntities?apikey='.$post_data['args']['apiKey'];
    }
    
    if(!empty($post_data['args']['maxRetrieve'])) {
        $body['maxRetrieve'] = urlencode($post_data['args']['maxRetrieve']);
    }
    if(!empty($post_data['args']['model'])) {
        $body['model'] = urlencode($post_data['args']['model']);
    }
    if(isset($post_data['args']['coreference']) && $post_data['args']['coreference']!='') {
        $body['coreference'] = urlencode($post_data['args']['coreference']);
    }
    if(isset($post_data['args']['disambiguate']) && $post_data['args']['disambiguate']!='') {
        $body['disambiguate'] = urlencode($post_data['args']['disambiguate']);
    }
    if(!empty($post_data['args']['knowledgeGraph'])) {
        $body['knowledgeGraph'] = urlencode($post_data['args']['knowledgeGraph']);
    }
    if(isset($post_data['args']['linkedData']) && $post_data['args']['linkedData']!='') {
        $body['linkedData'] = urlencode($post_data['args']['linkedData']);
    }
    if(!empty($post_data['args']['quotations'])) {
        $body['quotations'] = urlencode($post_data['args']['quotations']);
    }
    if(!empty($post_data['args']['emotion'])) {
        $body['emotion'] = urlencode($post_data['args']['emotion']);
    }
    if(!empty($post_data['args']['sentiment'])) {
        $body['sentiment'] = urlencode($post_data['args']['sentiment']);
    }    
    if(!empty($post_data['args']['showSourceText'])) {
        $body['showSourceText'] = urlencode($post_data['args']['showSourceText']);
    }
    if(isset($post_data['args']['structuredEntities']) && $post_data['args']['structuredEntities']!='') {
        $body['structuredEntities'] = urlencode($post_data['args']['structuredEntities']);
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
