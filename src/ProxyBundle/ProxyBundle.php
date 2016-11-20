<?php

namespace ProxyBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ProxyBundle extends Bundle
{
    public function getParent()
    {
        return 'BangpoundGuzzleProxyBundle';
    }
}
