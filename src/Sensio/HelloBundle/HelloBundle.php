<?php

namespace Sensio\HelloBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class HelloBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getNamespace()
    {
        return __NAMESPACE__;
    }
}