<?php

namespace ProxyBundle\Controller;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Uri;
use Symfony\Bridge\PsrHttpMessage\Factory\DiactorosFactory;
use Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProxyController
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

        /** @var ClientInterface $client */
        $client = $this->container->get('proxy.client.'.$endpoint);

        $rel = $request->getAttribute('path');
        if ($request->getQueryParams()) {
            $rel .= '?'.\GuzzleHttp\Psr7\build_query($request->getQueryParams());
        }
        $rel = new Uri($rel);

        $uri = $client->getConfig('base_url');
        $uri = new Uri($uri);
        $uri = Uri::resolve($uri, $rel);

        $request = \GuzzleHttp\Psr7\modify_request($request, array(
            'uri' => $uri,
        ));

        $response = $client->send($request);

        if ($response->hasHeader('Transfer-Encoding')) {
            $response = $response->withoutHeader('Transfer-Encoding');
        }

        $httpFoundationFactory = new HttpFoundationFactory();
        $response = $httpFoundationFactory->createResponse($response);

        return $response;
    }
}
