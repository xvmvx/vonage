$client = new Vonage\Client(new Vonage\Client\Credentials\Basic(API_KEY, API_SECRET)); 
$client = new Vonage\Client(
    new Vonage\Client\Credentials\Basic(API_KEY, API_SECRET),
    [
        'base_api_url' => 'https://example.com'
    ]
);
