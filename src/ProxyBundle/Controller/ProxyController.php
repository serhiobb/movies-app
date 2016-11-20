<?php

namespace ProxyBundle\Controller;

use Bangpound\Bundle\GuzzleProxyBundle\Controller\ProxyController as Controller;
use Bangpound\Bundle\GuzzleProxyBundle\DependencyInjection\Configuration;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Symfony\Bridge\PsrHttpMessage\Factory\DiactorosFactory;
use Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProxyController extends Controller
{
    use ContainerAwareTrait;

    /**
     * @param $endpoint
     * @param Request $request
     *
     * @return Response
     */
    public function proxy($endpoint, Request $request)
    {
        $psr7Factory = new DiactorosFactory();
        $request = $psr7Factory->createRequest($request);

        $response = parent::proxy($endpoint, $request);

        $httpFoundationFactory = new HttpFoundationFactory();
        $response = $httpFoundationFactory->createResponse($response);

        return $response;
    }
}
