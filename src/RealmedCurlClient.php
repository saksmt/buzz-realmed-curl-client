<?php

namespace Smt\Buzz\Client;

use Buzz\Client\Curl;

/**
 * Curl client with support for http-realm authentication
 * @package Smt\Buzz\Client
 * @author Kirill Saksin <kirillsaksin@yandex.ru>
 */
class RealmedCurlClient extends Curl
{

    /**
     * @const int Any authentication method
     */
    const AUTH_ANY = CURLAUTH_ANY;

    /**
     * @const int NTLM authentication method
     */
    const AUTH_NTLM = CURLAUTH_NTLM;

    /**
     * @const int Basic authentication method
     */
    const AUTH_BASIC = CURLAUTH_BASIC;

    /**
     * @const int Digest authentication method
     */
    const AUTH_DIGEST = CURLAUTH_DIGEST;

    /**
     * @const int Negotiate authentication method
     */
    const AUTH_NEGOTIATE = CURLAUTH_GSSNEGOTIATE;

    /**
     * Constructor
     * @param string $username Realm username
     * @param string $password Realm password
     */
    public function __construct($username, $password)
    {
        parent::__construct();
        $this->options[CURLOPT_HTTPAUTH] = CURLAUTH_ANY;
        $this->options[CURLOPT_USERPWD] = $username . ':' . $password;
    }

    /**
     * Set authentication method
     * @param int $method Authentication method
     * @return RealmedCurlClient This instance
     */
    public function setAuthenticationMethod($method)
    {
        $this->options[CURLOPT_HTTPAUTH] = $method;
        return $this;
    }
}
