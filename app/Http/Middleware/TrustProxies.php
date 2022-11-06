<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;
use Symfony\Component\HttpFoundation\Request as RequestAlias;

class TrustProxies extends Middleware
{
    protected String $proxies = '*';
    protected int $headers = RequestAlias::HEADER_X_FORWARDED_AWS_ELB;
}
