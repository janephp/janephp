<?php

namespace Jane\OpenApi2\Generator;

use Jane\OpenApi2\Generator\Client\ServerPluginGenerator;
use Jane\OpenApiCommon\Generator\ClientGenerator as BaseClientGenerator;

class ClientGenerator extends BaseClientGenerator
{
    use ServerPluginGenerator;
}
