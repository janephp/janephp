<?php

namespace Jane\Component\OpenApi2\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\OpenApi2\JsonSchema\Model\ApiKeySecurity;
use Jane\Component\OpenApi2\JsonSchema\Model\BasicAuthenticationSecurity;
use Jane\Component\OpenApiCommon\Guesser\Guess\SecuritySchemeGuess;
use Jane\Component\OpenApiCommon\Registry\Schema;

class SecurityGuesser implements GuesserInterface, ClassGuesserInterface
{
    /**
     * {@inheritdoc}
     */
    public function supportObject($object): bool
    {
        return ($object instanceof ApiKeySecurity || $object instanceof BasicAuthenticationSecurity) && \in_array($object->getType(), SecuritySchemeGuess::getAvailableTypes());
    }

    /**
     * {@inheritdoc}
     *
     * @param ApiKeySecurity|BasicAuthenticationSecurity $object
     */
    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if (SecuritySchemeGuess::TYPE_API_KEY === $object->getType()) {
            $securitySchemeGuess = new SecuritySchemeGuess($name, $object, $object->getName(), $object->getType());
            $securitySchemeGuess->setIn($object->getIn());

            /** @var Schema $schema */
            $schema = $registry->getSchema($reference);
            $schema->addSecurityScheme($reference, $securitySchemeGuess);
        }
    }
}
