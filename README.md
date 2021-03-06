[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/AlchemyText/functions?utm_source=RapidAPIGitHub_AlchemyTextFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# AlchemyText Package
Analyze text for sentiment and broader concepts.
* Domain: [Alchemy](http://alchemyapi.com)
* Credentials: apiKey

## How to get credentials: 
1. Go to AlchemyAPI and [register your app](https://console.ng.bluemix.net/registration/) 
2. Choose Natural Language Understanding from [categories](https://console.ng.bluemix.net/catalog/?taxonomyNavigation=applications)
3. Connect Natural Language Understanding to your application at the left side, choose pricing plan and click on 'Create' button at the bottom of the page.
4. Click on 'Service Credentials' tab to see your apiKey.


## AlchemyText.getCombinedDataFromHtml
Analyze an HTML with multiple text analysis operations.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | File       | Required: File with HTML content.
| extract       | String     | Optional: Array of any of the following methods: authors, concepts (default), dates, doc-emotion, entities (default), feeds, keywords (default), pub-date, relations, typed-rels, doc-sentiment, taxonomy (default), title
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response


## AlchemyText.getCombinedDataFromUrl
Analyze an URL with multiple text analysis operations.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| url           | String     | Required: HTTP URL.
| extract       | String     | Optional: Array of any of the following methods: authors, concepts (default), dates, doc-emotion, entities (default), feeds, keywords (default), pub-date, relations, typed-rels, doc-sentiment, taxonomy (default), title
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response


## AlchemyText.getCombinedDataFromText
Analyze a TEXT with multiple text analysis operations.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| text          | File       | Required: File with Text content.
| extract       | String     | Optional: Array of any of the following methods: authors, concepts (default), dates, doc-emotion, entities (default), feeds, keywords (default), pub-date, relations, typed-rels, doc-sentiment, taxonomy (default), title
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response


## AlchemyText.getAuthorsFromHtml
Get author names from an HTML document.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Required: API key obtained from AlchemyAPI.
| html  | File       | Required: File with HTML content.
| url   | String     | Optional: Input here will appear as the url value in the response.


## AlchemyText.getAuthorsFromUrl
Get author names from a webpage.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Required: API key obtained from AlchemyAPI.
| url   | String     | Required: HTTP URL.


## AlchemyText.getRankedConceptsFromHtml
Extract concepts from text of an HTML document. Supported languages: English, Spanish

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | File       | Required: File with HTML content.
| url           | String     | Optional: Input here will appear as the url value in the response.
| maxRetrieve   | String     | Optional: Maximum number of concepts to extract (default = 8, maximum = 50)
| knowledgeGraph| String     | Optional: Set this to 1 to include knowledge graph information in the results. This incurs an additional transaction charge.
| linkedData    | String     | Optional: Set this to 0 to hide Linked Data content links in the response.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts). Parameter is only used if indicated html or url parameter.


## AlchemyText.getRankedConceptsFromUrl
Extract concepts from a webpage. Supported languages: English, Spanish

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| url           | String     | Required: HTTP URL.
| maxRetrieve   | String     | Optional: Maximum number of concepts to extract (default = 8, maximum = 50)
| knowledgeGraph| String     | Optional: Set this to 1 to include knowledge graph information in the results. This incurs an additional transaction charge.
| linkedData    | String     | Optional: Set this to 0 to hide Linked Data content links in the response.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getRankedConceptsFromText
Extract concepts from plain text. Supported languages: English, Spanish

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| text          | File       | Required: File with text content.
| url           | String     | Optional: Input here will appear as the url value in the response.
| maxRetrieve   | String     | Optional: Maximum number of concepts to extract (default = 8, maximum = 50)
| knowledgeGraph| String     | Optional: Set this to 1 to include knowledge graph information in the results. This incurs an additional transaction charge.
| linkedData    | String     | Optional: Set this to 0 to hide Linked Data content links in the response.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.


## AlchemyText.extractDatesFromHtml
Extract dates from an HTML content. Supported languages: English

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | File       | Required: File with HTML content.
| url           | String     | Optional: Input here will appear as the url value in the response.
| anchorDate    | String     | Optional: The date to use as "today" when interpreting phrases in the text like "next tuesday.". Format: yyyy-mm-dd hh:mm:ss
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.


## AlchemyText.extractDatesFromUrl
Extract dates from a webpage. Supported languages: English

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| url           | String     | Required: HTTP URL.
| anchorDate    | String     | Optional: The date to use as "today" when interpreting phrases in the text like "next tuesday.". Format: yyyy-mm-dd hh:mm:ss
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.


## AlchemyText.extractDatesFromText
Extract dates from plain text. Supported languages: English

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| text          | String     | Required: Text content.
| anchorDate    | String     | Optional: The date to use as "today" when interpreting phrases in the text like "next tuesday.". Format: yyyy-mm-dd hh:mm:ss
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.


## AlchemyText.getEmotionFromHtml
Detect emotions implied in the text of an HTML document. Supported languages: English

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | File       | Required: File with HTML content.
| url           | String     | Optional: Input here will appear as the url value in the response.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getEmotionFromUrl
Detect emotions implied in the text on a webpage. Supported languages: English

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| url           | String     | Required: HTTP URL.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getEmotionFromText
Detect emotions implied in plain text. Supported languages: English

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| text          | File       | Required: File with text content.
| url           | String     | Optional: Input here will appear as the url value in the response.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.


## AlchemyText.getTargetedEmotionFromHtml
Detect emotions directed toward targeted phrases in an HTML document. Supported languages: English

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | File       | Required: File with HTML content.
| targets       | String     | Required: Array of phrases. The service will analyze emotion directed toward each phrase that is found in the source text. Supports up to 20 phrases. Format: phrase1|phrase2|...
| url           | String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html or text parameter.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getTargetedEmotionFromUrl
Detect emotions directed toward targeted phrases on webpage. Supported languages: English

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| url           | String     | Required: HTTP URL
| targets       | String     | Required: Array of phrases. The service will analyze emotion directed toward each phrase that is found in the source text. Supports up to 20 phrases. Format: phrase1|phrase2|...
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getTargetedEmotionFromText
Detect emotions directed toward targeted phrases in text. Supported languages: English

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| text          | String     | Required: Text content.
| targets       | String     | Required: Array of phrases. The service will analyze emotion directed toward each phrase that is found in the source text. Supports up to 20 phrases. Format: phrase1|phrase2|...
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.


## AlchemyText.getRankedNamedEntitiesFromHtml
Extract entities from an HTML document. Supported languages: English, French, German, Italian, Portuguese, Russian, Spanish, Swedish

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| Required: API key obtained from AlchemyAPI.
| html              | File       | Required: File with HTML content.
| maxRetrieve       | String     | Optional: Maximum number of entities to return (default = 50)
| model             | String     | Optional: Specify a custom model ID here to override the default Alchemy entity extraction model. You can also choose from the following public models: en-news: trained on English news content, es-news: trained on Spanish news content, ar-news: trained on Arabic news content
| url               | String     | Optional: Input here will appear as the url value in the response.
| coreference       | String     | Optional: Set this to 0 to treat coreferences as separate entities (coreferences are resolved into detected entities by default).
| disambiguate      | String     | Optional: Set this to 0 to hide entity disambiguation information in the response.
| knowledgeGraph    | String     | Optional: Set this to 1 to include knowledge graph information in the results. This incurs an additional transaction charge.
| linkedData        | String     | Optional: Set this to 0 to hide Linked Data content links in the response.
| quotations        | String     | Optional: Set this to 1 to include quotations that are linked to detected entities.
| emotion           | String     | Optional: Set this to 1 to analyze emotions associated with each detected entity. This incurs an additional transaction charge.
| sentiment         | String     | Optional: Set this to 1 to analyze the sentiment towards each detected entity. This incurs an additional transaction charge.
| showSourceText    | String     | Optional: Set this to 1 to include the source text in the response.
| structuredEntities| String     | Optional: Set this to 0 to ignore structured entities, such as Quantity, EmailAddress, TwitterHandle, Hashtag, and IPAddress.
| cquery            | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath             | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText        | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getRankedNamedEntitiesFromUrl
Extract entities from a webpage. Supported languages: English, French, German, Italian, Portuguese, Russian, Spanish, Swedish

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| Required: API key obtained from AlchemyAPI.
| url               | String     | Required: HTTP URL
| maxRetrieve       | String     | Optional: Maximum number of entities to return (default = 50)
| model             | String     | Optional: Specify a custom model ID here to override the default Alchemy entity extraction model. You can also choose from the following public models: en-news: trained on English news content, es-news: trained on Spanish news content, ar-news: trained on Arabic news content
| coreference       | String     | Optional: Set this to 0 to treat coreferences as separate entities (coreferences are resolved into detected entities by default).
| disambiguate      | String     | Optional: Set this to 0 to hide entity disambiguation information in the response.
| knowledgeGraph    | String     | Optional: Set this to 1 to include knowledge graph information in the results. This incurs an additional transaction charge.
| linkedData        | String     | Optional: Set this to 0 to hide Linked Data content links in the response.
| quotations        | String     | Optional: Set this to 1 to include quotations that are linked to detected entities.
| emotion           | String     | Optional: Set this to 1 to analyze emotions associated with each detected entity. This incurs an additional transaction charge.
| sentiment         | String     | Optional: Set this to 1 to analyze the sentiment towards each detected entity. This incurs an additional transaction charge.
| showSourceText    | String     | Optional: Set this to 1 to include the source text in the response.
| structuredEntities| String     | Optional: Set this to 0 to ignore structured entities, such as Quantity, EmailAddress, TwitterHandle, Hashtag, and IPAddress.
| cquery            | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath             | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText        | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getRankedNamedEntitiesFromText
Extract entities from plain text. Supported languages: English, French, German, Italian, Portuguese, Russian, Spanish, Swedish

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| Required: API key obtained from AlchemyAPI.
| text              | File       | Required: File with text content.
| maxRetrieve       | String     | Optional: Maximum number of entities to return (default = 50)
| model             | String     | Optional: Specify a custom model ID here to override the default Alchemy entity extraction model. You can also choose from the following public models: en-news: trained on English news content, es-news: trained on Spanish news content, ar-news: trained on Arabic news content
| coreference       | String     | Optional: Set this to 0 to treat coreferences as separate entities (coreferences are resolved into detected entities by default).
| disambiguate      | String     | Optional: Set this to 0 to hide entity disambiguation information in the response.
| knowledgeGraph    | String     | Optional: Set this to 1 to include knowledge graph information in the results. This incurs an additional transaction charge.
| linkedData        | String     | Optional: Set this to 0 to hide Linked Data content links in the response.
| quotations        | String     | Optional: Set this to 1 to include quotations that are linked to detected entities.
| emotion           | String     | Optional: Set this to 1 to analyze emotions associated with each detected entity. This incurs an additional transaction charge.
| sentiment         | String     | Optional: Set this to 1 to analyze the sentiment towards each detected entity. This incurs an additional transaction charge.
| showSourceText    | String     | Optional: Set this to 1 to include the source text in the response.
| structuredEntities| String     | Optional: Set this to 0 to ignore structured entities, such as Quantity, EmailAddress, TwitterHandle, Hashtag, and IPAddress.


## AlchemyText.getFeedLinksFromHtml
Extract RSS/ATOM feed links from an HTML document.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Required: API key obtained from AlchemyAPI.
| html  | File       | Required: File with HTML content.
| url   | String     | Required: Input here will appear as the url value in the response.


## AlchemyText.getFeedLinksFromUrl
Extract RSS/ATOM feed links from a webpage.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Required: API key obtained from AlchemyAPI.
| url   | String     | Required: HTTP URL.


## AlchemyText.getRankedKeywordsFromHtml
Extract keywords from an HTML document. Supported languages: English, French, German, Italian, Portuguese, Russian, Spanish, Swedish.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | File       | Required: File with HTML content.
| maxRetrieve   | String     | Optional: Maximum number of keywords to return (default = 50)
| url           | String     | Optional: Input here will appear as the url value in the response.
| knowledgeGraph| String     | Optional: Set this to 1 to include knowledge graph information in the results. This incurs an additional transaction charge.
| emotion       | String     | Optional: Set this to 1 to analyze emotions associated with each detected entity. This incurs an additional transaction charge.
| sentiment     | String     | Optional: Set this to 1 to analyze the sentiment towards each detected entity. This incurs an additional transaction charge.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getRankedKeywordsFromUrl
Extract keywords from a webpage. Supported languages: English, French, German, Italian, Portuguese, Russian, Spanish, Swedish.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| url           | String     | Required: HTTP URL.
| maxRetrieve   | String     | Optional: Maximum number of keywords to return (default = 50)
| knowledgeGraph| String     | Optional: Set this to 1 to include knowledge graph information in the results. This incurs an additional transaction charge.
| emotion       | String     | Optional: Set this to 1 to analyze emotions associated with each detected entity. This incurs an additional transaction charge.
| sentiment     | String     | Optional: Set this to 1 to analyze the sentiment towards each detected entity. This incurs an additional transaction charge.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getRankedKeywordsFromText
Extract keywords from a plain text. Supported languages: English, French, German, Italian, Portuguese, Russian, Spanish, Swedish.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| text          | File       | Required: File with text content.
| maxRetrieve   | String     | Optional: Maximum number of keywords to return (default = 50)
| url           | String     | Optional: Input here will appear as the url value in the response.
| knowledgeGraph| String     | Optional: Set this to 1 to include knowledge graph information in the results. This incurs an additional transaction charge.
| emotion       | String     | Optional: Set this to 1 to analyze emotions associated with each detected entity. This incurs an additional transaction charge.
| sentiment     | String     | Optional: Set this to 1 to analyze the sentiment towards each detected entity. This incurs an additional transaction charge.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.


## AlchemyText.getLanguageFromHtml
Detect the language of an HTML document.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | File       | Required: File with HTML content.
| url           | String     | Optional: Input here will appear as the url value in the response.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getLanguageFromUrl
Detect the language of a webpage.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| url           | String     | Required: HTTP URL.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getLanguageFromText
Detect the language of plain text.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| text          | File       | Required: File with text content.
| url           | String     | Optional: Input here will appear as the url value in the response.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.


## AlchemyText.getMicroformatDataFromHtml
Extract microformats from an HTML document.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Required: API key obtained from AlchemyAPI.
| html  | File       | Required: File with HTML content.
| url   | String     | Required: Input here will appear as the url value in the response.


## AlchemyText.getMicroformatDataFromUrl
Extract microformats from a webpage.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Required: API key obtained from AlchemyAPI.
| url   | String     | Required: HTTP URL.


## AlchemyText.getPublicationDateFromHtml
Get the publication date of an HTML document.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Required: API key obtained from AlchemyAPI.
| html  | File       | Required: File with HTML content.
| url   | String     | Optional: Input here will appear as the url value in the response.


## AlchemyText.getPublicationDateFromUrl
Get the publication date of a webpage.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Required: API key obtained from AlchemyAPI.
| url   | String     | Required: HTTP URL.


## AlchemyText.getRelationsFromHtml
Extract Subject-Action-Object relations from an HTML document. Supported languages: English, Spanish

| Field                   | Type       | Description
|-------------------------|------------|----------
| apiKey                  | credentials| Required: API key obtained from AlchemyAPI.
| html                    | File       | Required: File with HTML content.
| url                     | String     | Optional: Input here will appear as the url value in the response.
| maxRetrieve             | String     | Optional: Maximum number of entities to return (default = 50, maximum = 100).
| keywords                | String     | Optional: Set this to 1 to identify keywords in detected relations. This incurs an additional transaction charge.
| entities                | String     | Optional: Set this to 1 to identify named entities in detected relations. This incurs an additional transaction charge.
| requireEntities         | String     | Optional: Set this to 1 to restrict results to relations that contain at least one named entity.
| coreference             | String     | Optional: Set this to 0 to treat coreferences as separate entities (coreferences are resolved into detected entities by default).
| disambiguate            | String     | Optional: Set this to 0 to hide entity disambiguation information in the response.
| knowledgeGraph          | String     | Optional: Set this to 1 to include knowledge graph information in the results. This incurs an additional transaction charge.
| linkedData              | String     | Optional: Set this to 0 to hide Linked Data content links in the response.
| sentiment               | String     | Optional: Set this to 1 to analyze the sentiment towards each result. This incurs an additional transaction charge.
| sentimentExcludeEntities| String     | Optional: Set this to 1 to exclude named entity text from sentiment analysis. For exapmle, do not analyze "New" in "New York".
| showSourceText          | String     | Optional: Set this to 1 to include the source text in the response.
| cquery                  | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath                   | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText              | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getRelationsFromUrl
Extract Subject-Action-Object relations from a webpage. Supported languages: English, Spanish

| Field                   | Type       | Description
|-------------------------|------------|----------
| apiKey                  | credentials| Required: API key obtained from AlchemyAPI.
| url                     | String     | Required: HTTP URL.
| maxRetrieve             | String     | Optional: Maximum number of entities to return (default = 50, maximum = 100).
| keywords                | String     | Optional: Set this to 1 to identify keywords in detected relations. This incurs an additional transaction charge.
| entities                | String     | Optional: Set this to 1 to identify named entities in detected relations. This incurs an additional transaction charge.
| requireEntities         | String     | Optional: Set this to 1 to restrict results to relations that contain at least one named entity.
| coreference             | String     | Optional: Set this to 0 to treat coreferences as separate entities (coreferences are resolved into detected entities by default).
| disambiguate            | String     | Optional: Set this to 0 to hide entity disambiguation information in the response.
| knowledgeGraph          | String     | Optional: Set this to 1 to include knowledge graph information in the results. This incurs an additional transaction charge.
| linkedData              | String     | Optional: Set this to 0 to hide Linked Data content links in the response.
| sentiment               | String     | Optional: Set this to 1 to analyze the sentiment towards each result. This incurs an additional transaction charge.
| sentimentExcludeEntities| String     | Optional: Set this to 1 to exclude named entity text from sentiment analysis. For exapmle, do not analyze "New" in "New York".
| showSourceText          | String     | Optional: Set this to 1 to include the source text in the response.
| cquery                  | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath                   | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText              | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getRelationsFromText
Extract Subject-Action-Object relations from plain text. Supported languages: English, Spanish

| Field                   | Type       | Description
|-------------------------|------------|----------
| apiKey                  | credentials| Required: API key obtained from AlchemyAPI.
| text                    | File       | Required: File with text content.
| url                     | String     | Optional: Input here will appear as the url value in the response.
| maxRetrieve             | String     | Optional: Maximum number of entities to return (default = 50, maximum = 100).
| keywords                | String     | Optional: Set this to 1 to identify keywords in detected relations. This incurs an additional transaction charge.
| entities                | String     | Optional: Set this to 1 to identify named entities in detected relations. This incurs an additional transaction charge.
| requireEntities         | String     | Optional: Set this to 1 to restrict results to relations that contain at least one named entity.
| coreference             | String     | Optional: Set this to 0 to treat coreferences as separate entities (coreferences are resolved into detected entities by default).
| disambiguate            | String     | Optional: Set this to 0 to hide entity disambiguation information in the response.
| knowledgeGraph          | String     | Optional: Set this to 1 to include knowledge graph information in the results. This incurs an additional transaction charge.
| linkedData              | String     | Optional: Set this to 0 to hide Linked Data content links in the response.
| sentiment               | String     | Optional: Set this to 1 to analyze the sentiment towards each result. This incurs an additional transaction charge.
| sentimentExcludeEntities| String     | Optional: Set this to 1 to exclude named entity text from sentiment analysis. For exapmle, do not analyze "New" in "New York".
| showSourceText          | String     | Optional: Set this to 1 to include the source text in the response.


## AlchemyText.getTypedRelationsFromHtml
Use custom models to identify typed relations between detected entities in HTML document. Source text in Typed Relations calls is truncated to 5 KB. Typed relations identify different types of connections between detected entities. For example, the entities "Oscar" and "Leonardo DiCaprio" might be linked by an "awardedTo" relation. To tailor results for your domain, you can specify your own custom entities and relations with custom models in Watson Knowledge Studio.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | File       | Required: File with HTML content.
| url           | String     | Optional: Input here will appear as the url value in the response.
| model         | String     | Optional: The unique alphanumeric identifier for your custom model. You can also choose from the following public models: en-news: trained on English news content (default); es-news: trained on Spanish news content; ar-news: trained on Arabic news content.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.


## AlchemyText.getTypedRelationsFromUrl
Use custom models to identify typed relations between detected entities from a webpage. Source text in Typed Relations calls is truncated to 5 KB. Typed relations identify different types of connections between detected entities. For example, the entities "Oscar" and "Leonardo DiCaprio" might be linked by an "awardedTo" relation. To tailor results for your domain, you can specify your own custom entities and relations with custom models in Watson Knowledge Studio.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| url           | String     | Required: HTTP URL.
| model         | String     | Optional: The unique alphanumeric identifier for your custom model. You can also choose from the following public models: en-news: trained on English news content (default); es-news: trained on Spanish news content; ar-news: trained on Arabic news content.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.


## AlchemyText.getTypedRelationsFromText
Use custom models to identify typed relations between detected entities in plain text. Source text in Typed Relations calls is truncated to 5 KB. Typed relations identify different types of connections between detected entities. For example, the entities "Oscar" and "Leonardo DiCaprio" might be linked by an "awardedTo" relation. To tailor results for your domain, you can specify your own custom entities and relations with custom models in Watson Knowledge Studio.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| text          | File       | Required: File with text content.
| url           | String     | Optional: Input here will appear as the url value in the response.
| model         | String     | Optional: The unique alphanumeric identifier for your custom model. You can also choose from the following public models: en-news: trained on English news content (default); es-news: trained on Spanish news content; ar-news: trained on Arabic news content.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.


## AlchemyText.getTextSentimentFromHtml
Analyze the overall sentiment of HTML document. Supported languages: Arabic, English, French, German, Italian, Portuguese, Russian, Spanish.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | File       | Required: File with HTML content.
| url           | String     | Optional: Input here will appear as the url value in the response..
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getTextSentimentFromUrl
Analyze the overall sentiment of a webpage. Supported languages: Arabic, English, French, German, Italian, Portuguese, Russian, Spanish.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| url           | String     | Required: HTTP URL.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getTextSentimentFromText
Analyze the overall sentiment of plain text. Supported languages: Arabic, English, French, German, Italian, Portuguese, Russian, Spanish.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| text          | File       | Required: File with text content.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.


## AlchemyText.getTargetedSentimentFromHtml
Analyze sentiment for targeted phrases in an HTML document. Supported languages: Arabic, English, French, German, Italian, Portuguese, Russian, Spanish.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | File       | Required: File with HTML content.
| targets       | String     | Required: Array of phrases. The service will return sentiment information for each phrase that is found in the source text. Supports up to 20 phrases. Format: phrase1|phrase2|...
| url           | String     | Optional: Input here will appear as the url value in the response.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getTargetedSentimentFromUrl
Analyze sentiment for targeted phrases on a webpage. Supported languages: Arabic, English, French, German, Italian, Portuguese, Russian, Spanish.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| url           | String     | Required: HTTP URL.
| targets       | String     | Required: Array of phrases. The service will return sentiment information for each phrase that is found in the source text. Supports up to 20 phrases. Format: phrase1|phrase2|...
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getTargetedSentimentFromText
Analyze sentiment for targeted phrases in plain text. Supported languages: Arabic, English, French, German, Italian, Portuguese, Russian, Spanish.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| text          | File       | Required: File with text content.
| targets       | String     | Required: Array of phrases. The service will return sentiment information for each phrase that is found in the source text. Supports up to 20 phrases. Format: phrase1|phrase2|...
| url           | String     | Optional: Input here will appear as the url value in the response.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.


## AlchemyText.getRankedTaxonomyFromHtml
Categorize an HTML document into a 5-level taxonomy. Supported languages: English.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | File       | Required: File with HTML content.
| url           | String     | Optional: Input here will appear as the url value in the response.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getRankedTaxonomyFromUrl
Categorize a webpage into a 5-level taxonomy. Supported languages: English.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| url           | String     | Required: HTTP URL.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getRankedTaxonomyFromText
Categorize plain text into a 5-level taxonomy. Supported languages: English.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| text          | File       | Required: File with text content.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.


## AlchemyText.getTextFromHtml
Extract primary text content from an HTML document. Cleaned page text is obtained by default in other HTML and URL functions. You can view the results of page cleaning in responses from most of the other methods by passing showSourceText=1.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | File       | Required: File with HTML content.
| url           | String     | Optional: Input here will appear as the url value in the response.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| extractLinks  | String     | Optional: Set this to 1 to include hyperlinks in the extracted text.
| useMetadata   | String     | Optional: Set this to 0 to ignore description information in webpage metadata.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getTextFromUrl
Extract primary text content from a webpage. Cleaned page text is obtained by default in other HTML and URL functions. You can view the results of page cleaning in responses from most of the other methods by passing showSourceText=1.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| url           | String     | Required: HTTP URL.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| extractLinks  | String     | Optional: Set this to 1 to include hyperlinks in the extracted text.
| useMetadata   | String     | Optional: Set this to 0 to ignore description information in webpage metadata.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. For more details see [This page](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts) Parameter is only used if indicated html or url parameter.


## AlchemyText.getRawTextFromHtml
Extract the plain text from an HTML document.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Required: API key obtained from AlchemyAPI.
| html  | File       | Required: File with HTML content.
| url   | String     | Optional: Input here will appear as the url value in the response.


## AlchemyText.getRawTextFromUrl
Extract the plain text from a webpage.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Required: API key obtained from AlchemyAPI.
| url   | String     | Required: HTTP URL.


## AlchemyText.getTitleFromHtml
Extract the page title from an HTML document.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Required: API key obtained from AlchemyAPI.
| html       | File       | Required: File with HTML content.
| url        | String     | Optional: Input here will appear as the url value in the response.
| useMetadata| String     | Optional: 1 or 0. Whether to use title information from the web page metadata (default = 1: enabled).


## AlchemyText.getTitleFromUrl
Extract the page title from a webpage.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Required: API key obtained from AlchemyAPI.
| url        | String     | Required: HTTP URL.
| useMetadata| String     | Optional: 1 or 0. Whether to use title information from the web page metadata (default = 1: enabled).


## AlchemyText.getModels
This endpoint allow you to manage custom models that are deployed to your AlchemyAPI service instance. With an Advanced pricing plan and access to Watson Knowledge Studio, you can create your own custom model that specializes in understanding entities and relations that are unique to your domain.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Required: API key obtained from AlchemyAPI.


## AlchemyText.deleteSingleModel
Deletes a custom model that was deployed to your AlchemyAPI service instance from Watson Knowledge Studio.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Required: API key obtained from AlchemyAPI.
| modelId| credentials| Required: The unique identifier for the model that you want to delete.

###sourceText possible values

| Value  | Description
|--------|------------
| cleaned_or_raw (default) | Removes website elements such as links, ads, etc. If cleaning fails, raw web page text is used.
| cleaned | Removes website elements such as links, ads, etc.
| raw | Uses raw web page text with no cleaning.
| cquery | Uses the [visual constraints query](http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml) that you specify in the cquery parameter
| xpath | Uses the XPath query that you specify in the xpath parameter.
| xpath_or_raw | Uses the results of an XPath query that you specify in the xpath parameter, falling back to plain text if the XPath query returns nothing.
| cleaned_and_xpath | Uses the results of an XPath query on cleaned web page text.
