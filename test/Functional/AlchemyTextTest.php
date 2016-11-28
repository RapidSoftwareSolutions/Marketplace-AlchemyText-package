<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');

class AlchemyTextTest extends BaseTestCase {
    
    public function testPackage() {
        
        $routes = [
            'getCombinedData',
            'getAuthors',
            'getRankedConcepts',
            'extractDates',
            'getEmotion',
            'getTargetedEmotion',
            'getRankedNamedEntities',
            'getFeedLinks',
            'getRankedKeywords',
            'getLanguage',
            'getMicroformatData',
            'getPublicationDate',
            'getRelations',
            'getTypedRelations',
            'getTextSentiment',
            'getTargetedSentiment',
            'getRankedTaxonomy',
            'getText',
            'getRawText',
            'getTitle',
            'getModels'
        ];
        foreach($routes as $file) {
            $var = '{  
                        "args":{  
                            "apiKey":"f0df5f603fc898bf13f74531fba8baebc6f3e5da",
                            "url":"http://techcrunch.com/2016/01/29/ibm-watson-weather-company-sale",
                            "html": "",
                            "text": "",
                            "extract": "entities,keywords",
                            "targets": "weather|ibm"
                        }
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/AlchemyText/'.$file, $post_data);

            $this->assertEquals(200, $response->getStatusCode());
            $this->assertNotEmpty($response->getBody());
            $this->assertEquals('success', json_decode($response->getBody())->callback, 'Error in '.$file.' method');
        }
        
    }
    
}
