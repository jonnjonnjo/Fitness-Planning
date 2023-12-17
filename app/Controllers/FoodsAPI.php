<?php
class FoodsAPI
{

    public function sendGetRequest($calories)
    {
        $url = "http://localhost:8080/foodAPI/{$calories}%20cal";

        $response = file_get_contents($url);

        // Process the response

        return $response;
    }
}
