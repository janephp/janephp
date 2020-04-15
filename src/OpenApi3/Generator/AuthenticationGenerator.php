<?php

namespace Jane\OpenApi3\Generator;

use Jane\OpenApi3\Generator\Authentication\HandleRequestGenerator;
use Jane\OpenApiCommon\Generator\AuthenticationGenerator as CommonAuthenticationGenerator;

class AuthenticationGenerator extends CommonAuthenticationGenerator
{
    use HandleRequestGenerator;
}
