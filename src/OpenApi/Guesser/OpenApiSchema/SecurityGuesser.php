<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\JsonSchema\Guesser\GuesserInterface;
use Jane\JsonSchema\Registry;
use Jane\OpenApi\Guesser\Guess\SecuritySchemeGuess;
use Jane\OpenApi\JsonSchema\Model\APIKeySecurityScheme;
use Jane\OpenApi\JsonSchema\Model\HTTPSecurityScheme;
use Jane\OpenApi\JsonSchema\Model\OAuth2SecurityScheme;
use Jane\OpenApi\JsonSchema\Model\OpenIdConnectSecurityScheme;

class SecurityGuesser implements GuesserInterface, ClassGuesserInterface
{
    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        return ($object instanceof APIKeySecurityScheme || $object instanceof HTTPSecurityScheme || $object instanceof OAuth2SecurityScheme || $object instanceof OpenIdConnectSecurityScheme) && \in_array($object->getType(), SecuritySchemeGuess::getAvailableTypes());
    }

    /**
     * {@inheritdoc}
     *
     * @param APIKeySecurityScheme|HTTPSecurityScheme|OAuth2SecurityScheme|OpenIdConnectSecurityScheme $object
     */
    public function guessClass($object, $name, $reference, Registry $registry)
    {
        return new SecuritySchemeGuess($name, $object->getType(), $object);
    }
}
