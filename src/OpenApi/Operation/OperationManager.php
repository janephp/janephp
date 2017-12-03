<?php

namespace Jane\OpenApi\Operation;

use Jane\OpenApi\Model\Operation as OpenApiOperation;
use Jane\OpenApi\Model\PathItem;
use Jane\OpenApi\Model\OpenApi;

class OperationManager
{
    public function buildOperationCollection(OpenApi $openApi, $reference)
    {
        $operationCollection = new OperationCollection();
        $host = $openApi->getHost() === null ? 'localhost' : $openApi->getHost();

        if ($openApi->getPaths()) {
            foreach ($openApi->getPaths() as $path => $pathItem) {
                if ($pathItem instanceof PathItem) {
                    if ($pathItem->getDelete() instanceof OpenApiOperation) {
                        $operationCollection->addOperation(new Operation($pathItem->getDelete(), $path, Operation::DELETE, $reference . '/' . $path . '/delete', $openApi->getBasePath(), $host));
                    }

                    if ($pathItem->getGet() instanceof OpenApiOperation) {
                        $operationCollection->addOperation(new Operation($pathItem->getGet(), $path, Operation::GET, $reference . '/' . $path . '/get', $openApi->getBasePath(), $host));
                    }

                    if ($pathItem->getHead() instanceof OpenApiOperation) {
                        $operationCollection->addOperation(new Operation($pathItem->getHead(), $path, Operation::HEAD, $reference . '/' . $path . '/head', $openApi->getBasePath(), $host));
                    }

                    if ($pathItem->getOptions() instanceof OpenApiOperation) {
                        $operationCollection->addOperation(new Operation($pathItem->getOptions(), $path, Operation::OPTIONS, $reference . '/' . $path . '/options', $openApi->getBasePath(), $host));
                    }

                    if ($pathItem->getPatch() instanceof OpenApiOperation) {
                        $operationCollection->addOperation(new Operation($pathItem->getPatch(), $path, Operation::PATCH, $reference . '/' . $path . '/patch', $openApi->getBasePath(), $host));
                    }

                    if ($pathItem->getPost() instanceof OpenApiOperation) {
                        $operationCollection->addOperation(new Operation($pathItem->getPost(), $path, Operation::POST, $reference . '/' . $path . '/post', $openApi->getBasePath(), $host));
                    }

                    if ($pathItem->getPut() instanceof OpenApiOperation) {
                        $operationCollection->addOperation(new Operation($pathItem->getPut(), $path, Operation::PUT, $reference . '/' . $path . '/put', $openApi->getBasePath(), $host));
                    }
                }
            }
        }

        return $operationCollection;
    }
}
