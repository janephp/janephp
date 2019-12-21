<?php

namespace Jane\OpenApi\Command;

use Jane\OpenApi\JaneOpenApi;
use Jane\OpenApi\Registry;
use Jane\OpenApi\Schema;
use Jane\OpenApiCommon\Command\GenerateCommand as CommonGenerateCommand;

class GenerateCommand extends CommonGenerateCommand
{
    protected const REGISTRY_CLASS = Registry::class;
    protected const OPEN_API_CLASS = JaneOpenApi::class;
    protected const SCHEMA_CLASS = Schema::class;
}
