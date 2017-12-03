<?php

namespace Jane\OpenApi\Operation;

use Jane\OpenApi\Model\Operation as OpenApiOperation;

class Operation
{
    const DELETE = 'DELETE';
    const GET = 'GET';
    const POST = 'POST';
    const PUT = 'PUT';
    const PATCH = 'PATCH';
    const OPTIONS = 'OPTIONS';
    const HEAD = 'HEAD';

    /**
     * @var \Jane\OpenApi\Model\Operation
     */
    private $operation;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $reference;

    public function __construct(OpenApiOperation $operation, $path, $method, $reference, $basePath = '', $host = 'localhost')
    {
        $this->operation = $operation;
        $this->path = preg_replace('#^/+#', '/', $basePath . $path);
        $this->method = $method;
        $this->host = $host;
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return \Jane\OpenApi\Model\Operation
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }
}
