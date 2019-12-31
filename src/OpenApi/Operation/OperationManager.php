<?php

namespace Jane\OpenApi\Operation;

use Jane\OpenApi\JsonSchema\Model\Operation as OpenApiOperation;
use Jane\OpenApi\JsonSchema\Model\PathItem;
use Jane\OpenApi\JsonSchema\Model\OpenApi;
use Jane\OpenApiCommon\Operation\Operation;
use Jane\OpenApiCommon\Operation\OperationCollection;

class OperationManager
{
    public function buildOperationCollection(OpenApi $openApi, string $reference): OperationCollection
    {
        $operationCollection = new OperationCollection();

        if ($openApi->getPaths()) {
            foreach ($openApi->getPaths() as $path => $pathItem) {
                if ($pathItem instanceof PathItem) {
                    if ($pathItem->getDelete() instanceof OpenApiOperation) {
                        $operationCollection->addOperation(new Operation($pathItem, $pathItem->getDelete(), $path, Operation::DELETE, $reference . '/' . $path . '/delete'));
                    }

                    if ($pathItem->getGet() instanceof OpenApiOperation) {
                        $operationCollection->addOperation(new Operation($pathItem, $pathItem->getGet(), $path, Operation::GET, $reference . '/' . $path . '/get'));
                    }

                    if ($pathItem->getHead() instanceof OpenApiOperation) {
                        $operationCollection->addOperation(new Operation($pathItem, $pathItem->getHead(), $path, Operation::HEAD, $reference . '/' . $path . '/head'));
                    }

                    if ($pathItem->getOptions() instanceof OpenApiOperation) {
                        $operationCollection->addOperation(new Operation($pathItem, $pathItem->getOptions(), $path, Operation::OPTIONS, $reference . '/' . $path . '/options'));
                    }

                    if ($pathItem->getPatch() instanceof OpenApiOperation) {
                        $operationCollection->addOperation(new Operation($pathItem, $pathItem->getPatch(), $path, Operation::PATCH, $reference . '/' . $path . '/patch'));
                    }

                    if ($pathItem->getPost() instanceof OpenApiOperation) {
                        $operationCollection->addOperation(new Operation($pathItem, $pathItem->getPost(), $path, Operation::POST, $reference . '/' . $path . '/post'));
                    }

                    if ($pathItem->getPut() instanceof OpenApiOperation) {
                        $operationCollection->addOperation(new Operation($pathItem, $pathItem->getPut(), $path, Operation::PUT, $reference . '/' . $path . '/put'));
                    }
                }
            }
        }

        return $operationCollection;
    }
}
