<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');

class AlchemyTextTest extends BaseTestCase {
    
    public function testPackage() {
        
        $routes = [
            'getCombinedDataFromHtml',
            'getCombinedDataFromUrl',
            'getCombinedDataFromText',
            'getAuthorsFromHtml',
            'getAuthorsFromUrl',
            'getRankedConceptsFromHtml',
            'getRankedConceptsFromUrl',
            'getRankedConceptsFromText',
            'extractDatesFromHtml',
            'extractDatesFromUrl',
            'extractDatesFromText',
            'getEmotionFromHtml',
            'getEmotionFromUrl',
            'getEmotionFromText',
            'getTargetedEmotionFromHtml',
            'getTargetedEmotionFromUrl',
            'getTargetedEmotionFromText',
            'getRankedNamedEntitiesFromHtml',
            'getRankedNamedEntitiesFromUrl',
            'getRankedNamedEntitiesFromText',
            'getFeedLinksFromHtml',
            'getFeedLinksFromUrl',
            'getRankedKeywordsFromHtml',
            'getRankedKeywordsFromUrl',
            'getRankedKeywordsFromText',
            'getLanguageFromHtml',
            'getLanguageFromUrl',
            'getLanguageFromText',
            'getMicroformatDataFromHtml',
            'getMicroformatDataFromUrl',
            'getPublicationDateFromHtml',
            'getPublicationDateFromUrl',
            'getRelationsFromHtml',
            'getRelationsFromUrl',
            'getRelationsFromText',
            'getTypedRelationsFromHtml',
            'getTypedRelationsFromUrl',
            'getTypedRelationsFromText',
            'getTextSentimentFromHtml',
            'getTextSentimentFromUrl',
            'getTextSentimentFromText',
            'getTargetedSentimentFromHtml',
            'getTargetedSentimentFromUrl',
            'getTargetedSentimentFromText',
            'getRankedTaxonomyFromHtml',
            'getRankedTaxonomyFromUrl',
            'getRankedTaxonomyFromText',
            'getTextFromHtml',
            'getTextFromUrl',
            'getRawTextFromHtml',
            'getRawTextFromUrl',
            'getTitleFromHtml',
            'getTitleFromUrl',
            'getModels'
        ];
        foreach($routes as $file) {
            $var = '{  
                        "args":{  
                            "apiKey":"f0df5f603fc898bf13f74531fba8baebc6f3e5da",
                            "url":"http://techcrunch.com/2016/01/29/ibm-watson-weather-company-sale",
                            "html": "http://techcrunch.com/2016/01/29/ibm-watson-weather-company-sale",
                            "text": "http://techcrunch.com/2016/01/29/ibm-watson-weather-company-sale",
                            "extract": "entities,keywords",
                            "targets": "weather|ibm"
                        }
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/AlchemyText/'.$file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in '.$file.' method');
        }
        
    }
    
}
