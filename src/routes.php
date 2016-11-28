<?php
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
    'getModels',
    'deleteSingleModel',
    'metadata'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

