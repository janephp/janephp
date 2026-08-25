<?php

namespace Jane\Component\OpenApiCommon\Naming;

class OperationNamingFactory
{
    /**
     * @param OperationNamingInterface|list<OperationNamingInterface> $operationNamings
     */
    public static function create(OperationNamingInterface|array $operationNamings = []): OperationNamingInterface
    {
        $namings = \is_array($operationNamings) ? $operationNamings : [$operationNamings];

        if ([] === $namings) {
            return new ChainOperationNaming([
                new OperationIdNaming(),
                new OperationUrlNaming(),
            ]);
        }

        foreach ($namings as $naming) {
            if (!$naming instanceof OperationNamingInterface) {
                throw new \InvalidArgumentException(\sprintf('Operation naming must implement %s, "%s" given', OperationNamingInterface::class, get_debug_type($naming)));
            }
        }

        return new ChainOperationNaming($namings);
    }
}
