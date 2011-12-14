<style type='text/css'>
	table 
	{
		padding: 20px;
		border: 1px solid #f0f0f0;
		border-bottom: 2px solid #ccc;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
	}
	
	td
	{
		font: normal 12px Verdana, Geneva, sans-serif;
	}
	
	.title
	{
		text-align: center;
		font: 1.5em normal Georgia, 'Times new Roman', Times, serif;
	}
</style>
<?php

//build the api call

//we specify .json to get json formatted results
$api_url = "http://api.digitalnz.org/records/v2.json";

//the search query should be URL encoded
//this query looks for a number of different sports and the word cartoon
$search_text = $_GET['text'];

//you'll need to replace this dnz api key with your own one
$api_key = "6y98irEtPSynyEbqTPfw";

//limit our query to just 4 results - the response from the server will include 
//number of results available                
$num_results = "5";

//build up the api_call
$api_call = "http://api.digitalnz.org/records/v1.json"
. "?api_key=" . $api_key 
. "&search_text=" . urlencode($search_text)
. "&num_results=" . $num_results;
                                   
   // $api_call = 'http://api.digitalnz.org/records/v2.json?search_text='.urlencode($search_text).'&api_key='.$api_key;
	$api_response = json_decode(file_get_contents($api_call),true);
	
	foreach($api_response['results'] as $result) {
		$title = $result['title'];
		$subject = $result['category'];
		$description = $result['description'];
		$creator =  $result['author'];
		$source = $result['content_provider'];
		$thumbURL = $result['thumbnail_url'];
		
		formatResult($thumbURL, $title, $subject, $description, $creator, $source);
	}
	
	function formatResult($thumbURL, $title, $subject, $description, $creator, $source)
	{
		$html = "
		<table>
			<tr>
				<td class='title' colspan='2'> $title </td>
			</tr>
			<tr>
				<td><b>Subject </b></td>
				<td>$subject </td>
			</tr>
			<tr>
				<td><b>Description </b> </td>
				<td>$description </td>
			</tr>
			<tr>
				<td><b>Creator</b></td>
				<td>$creator </td>
			</tr>
			<tr>
				<td><b>Source</b></td>
				<td>$source</td>
			</tr>
		</table>
		";
		
		echo $html;
	}
?> 
