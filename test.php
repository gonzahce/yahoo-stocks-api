<?php 

require('vendor/larapack/dd/src/helper.php');
require('vendor/autoload.php');

use Scheb\YahooFinanceApi\ApiClient;
use Scheb\YahooFinanceApi\ApiClientFactory;
use GuzzleHttp\Client;

$client = ApiClientFactory::createApiClient();

// Returns Scheb\YahooFinanceApi\Results\ExchangeRate
$exchangeRate = $client->getExchangeRate("EUR", "USD");

// Returns Scheb\YahooFinanceApi\Results\Quote
$quote = $client->getQuote("AAPL");

// Returns an array of Scheb\YahooFinanceApi\Results\ExchangeRate
$exchangeRates = $client->getExchangeRates([
    ["USD", "EUR"],
    ["EUR", "USD"],
]);

dd($quote);
dd($exchangeRate);

?>