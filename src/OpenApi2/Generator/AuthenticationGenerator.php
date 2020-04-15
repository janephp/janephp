<?php

namespace Jane\OpenApi2\Generator;

use Jane\OpenApi2\Generator\Authentication\HandleRequestGenerator;
use Jane\OpenApiCommon\Generator\AuthenticationGenerator as CommonAuthenticationGenerator;

class AuthenticationGenerator extends CommonAuthenticationGenerator
{
    use HandleRequestGenerator;
}
