<?php

namespace Jane\Component\OpenApi2\Generator;

use Jane\Component\OpenApi2\Generator\Client\ServerPluginGenerator;
use Jane\Component\OpenApiCommon\Generator\ClientGenerator as BaseClientGenerator;

class ClientGenerator extends BaseClientGenerator
{
    use ServerPluginGenerator;
}
