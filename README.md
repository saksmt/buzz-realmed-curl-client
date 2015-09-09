smt/buzz-realmed-curl-client
============================

[Buzz Browser](http://github.com/kriswallsmith/buzz) curl client with support for http-realm authentication.

Installation
------------

    composer require smt/buzz-realmed-curl-client
    
That's it!

Usage
-----

    <?php
    
    use Smt\Buzz\Client\RealmedCurlClient;
    use Buzz\Browser;
    
    $client = new RealmedCurlClient('username', 'password');
    $client->setAuthenticationMethod(RealmedCurlClient::AUTH_NTLM);
    $browser = new Browser($client);
    $browser->get(/* ... */);
    
**Available authentication methods:**

 - `RealmedCurlClient::AUTH_ANY` - cURL "any" authentication method;
 - `RealmedCurlClient::AUTH_BASIC` - Basic authentication method;
 - `RealmedCurlClient::AUTH_NTLM` - NTLM authentication method;
 - `RealmedCurlClient::AUTH_DIGEST` - Digest authentication method;
 - `RealmedCurlClient::AUTH_NEGOTIATE` - Negotiate authentication method;
 
For more see [Buzz Browser](http://github.com/kriswallsmith/buzz)