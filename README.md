# AlchemyText Package
AlchemyAPI offers 12 API functions as part of its text analysis service, each of which uses sophisticated natural language processing techniques to analyze your content and add high-level semantic information.
* Domain: alchemyapi.com
* Credentials: apiKey

## How to get credentials: 
0. Go to AlchemyAPI and [register your app](https://console.ng.bluemix.net/registration/) 
1. Choose AlchemyAPI from [categories](https://console.ng.bluemix.net/catalog/?taxonomyNavigation=applications)
2. Connect AlchemyAPI to your application at the left side, choose pricing plan and click on 'Create' button at the bottom of the page.
3. Click on 'Service Credentials' tab to see your apiKey.


## AlchemyText.getCombinedData
Analyze an HTML, URL or TEXT with multiple text analysis operations.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url and text parameters not provided.
| url           | String     | Optional: HTTP URL. Required if html and text parameters not provided.
| text          | String     | Optional: Text content. Required if html and url parameters not provided.
| extract       | String     | Optional: Comma separated list of any of the following methods: authors, concepts (default), dates, doc-emotion, entities (default), feeds, keywords (default), pub-date, relations, typed-rels, doc-sentiment, taxonomy (default), title
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response


## AlchemyText.getAuthors
Get author names from a webpage.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url parameter not provided.
| url           | String     | Optional: HTTP URL. Required if html parameter not provided.
| urlForResponse| String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html parameter.


## AlchemyText.getRankedConcepts
Extract concepts from text of an HTML document, webpage URL or plain TEXT. Supported languages: English, Spanish

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url and text parameters not provided.
| url           | String     | Optional: HTTP URL. Required if html and text parameters not provided.
| text          | String     | Optional: Text content. Required if html and url parameters not provided.
| urlForResponse| String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html or text parameter.
| maxRetrieve   | String     | Optional: Maximum number of concepts to extract (default = 8, maximum = 50)
| knowledgeGraph| String     | Optional: Set this to 1 to include knowledge graph information in the results. This incurs an additional transaction charge.
| linkedData    | String     | Optional: Set this to 0 to hide Linked Data content links in the response.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. See possible values at the bottom of README. Parameter is only used if indicated html or url parameter.


## AlchemyText.extractDates
Extract dates from text of an HTML document, webpage URL or plain TEXT. Supported languages: English

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url and text parameters not provided.
| url           | String     | Optional: HTTP URL. Required if html and text parameters not provided.
| text          | String     | Optional: Text content. Required if html and url parameters not provided.
| urlForResponse| String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html parameter.
| anchorDate    | String     | Optional: The date to use as "today" when interpreting phrases in the text like "next tuesday.". Format: yyyy-mm-dd hh:mm:ss
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.


## AlchemyText.getEmotion
Detect emotions implied in the text of an HTML document, webpage URL or plain TEXT. Supported languages: English

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url and text parameters not provided.
| url           | String     | Optional: HTTP URL. Required if html and text parameters not provided.
| text          | String     | Optional: Text content. Required if html and url parameters not provided.
| urlForResponse| String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html or text parameter.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. See possible values at the bottom of README. Parameter is only used if indicated html or url parameter.


## AlchemyText.getTargetedEmotion
Detect emotions directed toward targeted phrases in an HTML document, webpage URL or plain TEXT. Supported languages: English

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url and text parameters not provided.
| url           | String     | Optional: HTTP URL. Required if html and text parameters not provided.
| text          | String     | Optional: Text content. Required if html and url parameters not provided.
| targets       | String     | Required: Pipe delimited list of phrases. The service will analyze emotion directed toward each phrase that is found in the source text. Supports up to 20 phrases. Format: phrase1|phrase2|...
| urlForResponse| String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html or text parameter.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. See possible values at the bottom of README. Parameter is only used if indicated html or url parameter.


## AlchemyText.getRankedNamedEntities
Extract entities from an HTML document, webpage URL or plain TEXT. Supported languages: English, French, German, Italian, Portuguese, Russian, Spanish, Swedish

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| Required: API key obtained from AlchemyAPI.
| html              | String     | Optional: HTML content. Required if url and text parameters not provided.
| url               | String     | Optional: HTTP URL. Required if html and text parameters not provided.
| text              | String     | Optional: Text content. Required if html and url parameters not provided.
| maxRetrieve       | String     | Optional: Maximum number of entities to return (default = 50)
| model             | String     | Optional: Specify a custom model ID here to override the default Alchemy entity extraction model. You can also choose from the following public models: en-news - trained on English news content; es-news - trained on Spanish news content; ar-news - trained on Arabic news content. Note: input text is truncated to 5 KB for custom models calls.
| urlForResponse    | String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html or text parameter.
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
| sourceText        | String     | Optional: How to obtain the source text from the webpage. See possible values at the bottom of README. Parameter is only used if indicated html or url parameter.


## AlchemyText.getFeedLinks
Extract RSS/ATOM feed links from an HTML document or webpage URL.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url parameter not provided.
| url           | String     | Optional: HTTP URL. Required if html parameter not provided.
| urlForResponse| String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html parameter.


## AlchemyText.getRankedKeywords
Extract keywords from an HTML document, webpage URL or plain TEXT. Supported languages: English, French, German, Italian, Portuguese, Russian, Spanish, Swedish.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url and text parameters not provided.
| url           | String     | Optional: HTTP URL. Required if html and text parameters not provided.
| text          | String     | Optional: Text content. Required if html and url parameters not provided.
| maxRetrieve   | String     | Optional: Maximum number of keywords to return (default = 50)
| urlForResponse| String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html or text parameter.
| knowledgeGraph| String     | Optional: Set this to 1 to include knowledge graph information in the results. This incurs an additional transaction charge.
| emotion       | String     | Optional: Set this to 1 to analyze emotions associated with each detected entity. This incurs an additional transaction charge.
| sentiment     | String     | Optional: Set this to 1 to analyze the sentiment towards each detected entity. This incurs an additional transaction charge.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. See possible values at the bottom of README. Parameter is only used if indicated html or url parameter.


## AlchemyText.getLanguage
Detect the language of an HTML document, webpage URL or plain TEXT.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url and text parameters not provided.
| url           | String     | Optional: HTTP URL. Required if html and text parameters not provided.
| text          | String     | Optional: Text content. Required if html and url parameters not provided.
| urlForResponse| String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html or text parameter.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. See possible values at the bottom of README. Parameter is only used if indicated html or url parameter.


## AlchemyText.getMicroformatData
Extract microformats from an HTML document or webpage URL.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url parameter not provided.
| url           | String     | Optional: HTTP URL. Required if html parameter not provided.
| urlForResponse| String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html parameter.


## AlchemyText.getPublicationDate
Get the publication date of an HTML document or webpage URL.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url parameter not provided.
| url           | String     | Optional: HTTP URL. Required if html parameter not provided.
| urlForResponse| String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html parameter.


## AlchemyText.getRelations
Extract Subject-Action-Object relations from an HTML document, webpage URL or plain TEXT. Supported languages: English, Spanish

| Field                   | Type       | Description
|-------------------------|------------|----------
| apiKey                  | credentials| Required: API key obtained from AlchemyAPI.
| html                    | String     | Optional: HTML content. Required if url and text parameters not provided.
| url                     | String     | Optional: HTTP URL. Required if html and text parameters not provided.
| text                    | String     | Optional: Text content. Required if html and url parameters not provided.
| urlForResponse          | String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html or text parameter.
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
| sourceText              | String     | Optional: How to obtain the source text from the webpage. See possible values at the bottom of README. Parameter is only used if indicated html or url parameter.


## AlchemyText.getTypedRelations
Use custom models to identify typed relations between detected entities in HTML document, webpage URL or plain TEXT. Source text in Typed Relations calls is truncated to 5 KB. Typed relations identify different types of connections between detected entities. For example, the entities "Oscar" and "Leonardo DiCaprio" might be linked by an "awardedTo" relation. To tailor results for your domain, you can specify your own custom entities and relations with custom models in Watson Knowledge Studio.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url and text parameters not provided.
| url           | String     | Optional: HTTP URL. Required if html and text parameters not provided.
| text          | String     | Optional: Text content. Required if html and url parameters not provided.
| urlForResponse| String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html or text parameter.
| model         | String     | Optional: The unique alphanumeric identifier for your custom model. You can also choose from the following public models: en-news - trained on English news content; es-news - trained on Spanish news content; ar-news - trained on Arabic news content.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.


## AlchemyText.getTextSentiment
Analyze the overall sentiment of HTML document, webpage URL or plain TEXT. Supported languages: Arabic, English, French, German, Italian, Portuguese, Russian, Spanish.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url and text parameters not provided.
| url           | String     | Optional: HTTP URL. Required if html and text parameters not provided.
| text          | String     | Optional: Text content. Required if html and url parameters not provided.
| urlForResponse| String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html or text parameter.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. See possible values at the bottom of README. Parameter is only used if indicated html or url parameter.


## AlchemyText.getTargetedSentiment
Analyze sentiment for targeted phrases in HTML document, webpage URL or plain TEXT. Supported languages: Arabic, English, French, German, Italian, Portuguese, Russian, Spanish.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url and text parameters not provided.
| url           | String     | Optional: HTTP URL. Required if html and text parameters not provided.
| text          | String     | Optional: Text content. Required if html and url parameters not provided.
| targets       | String     | Required: Pipe delimited list of phrases. The service will return sentiment information for each phrase that is found in the source text. Supports up to 20 phrases. Format: phrase1|phrase2|...
| urlForResponse| String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html or text parameter.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. See possible values at the bottom of README. Parameter is only used if indicated html or url parameter.


## AlchemyText.getRankedTaxonomy
Categorize an HTML document, webpage or plain text into a 5-level taxonomy. Supported languages: English.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url and text parameters not provided.
| url           | String     | Optional: HTTP URL. Required if html and text parameters not provided.
| text          | String     | Optional: Text content. Required if html and url parameters not provided.
| urlForResponse| String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html or text parameter.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. See possible values at the bottom of README. Parameter is only used if indicated html or url parameter.


## AlchemyText.getText
Extract primary text content from a webpage or from an HTML document. Cleaned page text is obtained by default in other HTML and URL functions. You can view the results of page cleaning in responses from most of the other methods by passing showSourceText=1.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url parameter not provided.
| url           | String     | Optional: HTTP URL. Required if html parameter not provided.
| urlForResponse| String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html parameter.
| showSourceText| String     | Optional: Set this to 1 to include the source text in the response.
| extractLinks  | String     | Optional: Set this to 1 to include hyperlinks in the extracted text.
| useMetadata   | String     | Optional: Set this to 0 to ignore description information in webpage metadata.
| cquery        | String     | Optional: A visual constraints query to apply to the web page. Required when sourceText is set to cquery. For more details visit http://www.ibm.com/watson/developercloud/doc/alchemylanguage/visual_constraints.shtml. Parameter is only used if indicated html or url parameter.
| xpath         | String     | Optional: An XPath query to apply to the web page. Required when sourceText is set to one of the XPath values. Parameter is only used if indicated html or url parameter.
| sourceText    | String     | Optional: How to obtain the source text from the webpage. See possible values at the bottom of README. Parameter is only used if indicated html or url parameter.


## AlchemyText.getRawText
Extract the plain text from a webpage or from an HTML document.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url parameter not provided.
| url           | String     | Optional: HTTP URL. Required if html parameter not provided.
| urlForResponse| String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html parameter.


## AlchemyText.getTitle
Extract the page title from a webpage or from an HTML document.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from AlchemyAPI.
| html          | String     | Optional: HTML content. Required if url parameter not provided.
| url           | String     | Optional: HTTP URL. Required if html parameter not provided.
| urlForResponse| String     | Optional: Input here will appear as the url value in the response. Parameter is only used if indicated html parameter.
| useMetadata   | String     | Optional: 1 or 0. Whether to use title information from the web page metadata (default = 1: enabled).


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
