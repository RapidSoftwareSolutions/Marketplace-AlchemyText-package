<?php

$app->post('/api/AlchemyText/getRelationsFromText', function ($request, $response, $args) {
    
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
        $query_str = 'https://gateway-a.watsonplatform.net/calls/text/TextGetRelations?apikey='.$post_data['args']['apiKey'];
    }
    
    if(!empty($post_data['args']['url'])) {
        $body['url'] = $post_data['args']['url'];
    }
    if(!empty($post_data['args']['maxRetrieve'])) {
        $body['maxRetrieve'] = $post_data['args']['maxRetrieve'];
    }
    if(!empty($post_data['args']['keywords'])) {
        $body['keywords'] = $post_data['args']['keywords'];
    }
    if(!empty($post_data['args']['entities'])) {
        $body['entities'] = $post_data['args']['entities'];
    }
    if(!empty($post_data['args']['requireEntities'])) {
        $body['requireEntities'] = $post_data['args']['requireEntities'];
    }
    if(isset($post_data['args']['coreference']) && $post_data['args']['coreference']!='') {
        $body['coreference'] = $post_data['args']['coreference'];
    }
    if(isset($post_data['args']['disambiguate']) && $post_data['args']['disambiguate']!='') {
        $body['disambiguate'] = $post_data['args']['disambiguate'];
    }
    if(!empty($post_data['args']['knowledgeGraph'])) {
        $body['knowledgeGraph'] = $post_data['args']['knowledgeGraph'];
    }
    if(isset($post_data['args']['linkedData']) && $post_data['args']['linkedData']!='') {
        $body['linkedData'] = $post_data['args']['linkedData'];
    }
    if(!empty($post_data['args']['sentiment'])) {
        $body['sentiment'] = $post_data['args']['sentiment'];
    }
    if(!empty($post_data['args']['sentimentExcludeEntities'])) {
        $body['sentimentExcludeEntities'] = $post_data['args']['sentimentExcludeEntities'];
    }
    if(!empty($post_data['args']['showSourceText'])) {
        $body['showSourceText'] = urlencode($post_data['args']['showSourceText']);
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
