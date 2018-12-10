---
post_title: 'Get list of topics having principle'
layout: api_doc
published: true
---
# Get list of topics having principle

This endpoint is used to get list of topics having principle.

## URL

`https://{{HOST}}/udp/topic/principle/{principle}`

## Method

<div class="get">GET</div>

## Required IMS Scopes

* apollo_read


## URL Path Variable

|Name|Description|Example|Type|
|---|---|---|---|
|**principle** <br>*required*|App or User or Device|/udp/topic/principle/user|String|


## Request Header Parameters

|Type|Value|Description|
|---|---|---|
|**Authentication** <br>*required*|Bearer {access_token}|IMS access token|

## Example


### Request

```shell
curl -X GET \
  'https://{{HOST}}/udp/topic/principle/user' \
  -H 'Authorization: Bearer {access_token}'
```


### Response

```json
[
    {
        "userId": "Apollo.testUser1",
        "principle": "User",
        "topicRelation": "SUBSCRIBER",
        "topicName": "temperature"
    },
    {
        "userId": "Apollo.testUser1",
        "principle": "App",
        "topicRelation": "PUBLISHER",
        "topicName": "fire"
    }
]
```

## Errors

|Code|Description|
|---|---|
|403| The request can not be processed if token is not valid or expired. |
|500|Any other error e.g. DB operation failed	| 



## Response Body Parameters

|Name           |Description                              |Schema|
|---|---|---|
|userId         |user id for which the relation is present|String|
|principle    	|App or user or Device 			          |String|
|topicRelation  |publisher or subscriber				  |String|
|topicName    	|topic for which relation is present 	  |String|

