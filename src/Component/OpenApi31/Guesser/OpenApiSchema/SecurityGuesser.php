<?php

namespace Jane\Component\OpenApi31\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\OpenApi31\JsonSchema\Model\SecurityScheme;
use Jane\Component\OpenApi31\Normalizer\EnrichedSecurityScheme;
use Jane\Component\OpenApiCommon\Guesser\Guess\SecuritySchemeGuess;
use Jane\Component\OpenApiCommon\Registry\Schema;

class SecurityGuesser implements GuesserInterface, ClassGuesserInterface
{
    public function supportObject($object): bool
    {
        return $object instanceof SecurityScheme && \in_array($object->type ?? null, SecuritySchemeGuess::getAvailableTypes());
    }

    /**
     * @param SecurityScheme|EnrichedSecurityScheme $object
     */
    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if (!\in_array($object->type ?? null, [SecuritySchemeGuess::TYPE_HTTP, SecuritySchemeGuess::TYPE_API_KEY])) {
            return;
        }

        $isHttp = $object->type === SecuritySchemeGuess::TYPE_HTTP;
        $variable = $isHttp ? $name : ($object instanceof EnrichedSecurityScheme ? $object->name ?? $name : $name);

        $securitySchemeGuess = new SecuritySchemeGuess($name, $object, $variable, $object->type ?? null);

        switch ($securitySchemeGuess->getType()) {
            case SecuritySchemeGuess::TYPE_HTTP:
                $scheme = SecuritySchemeGuess::SCHEME_BEARER;
                if ($object instanceof EnrichedSecurityScheme && null !== ($object->scheme ?? null)) {
                    $scheme = ($object->scheme ?? null);
                }
                $scheme = ucfirst(mb_strtolower($scheme));
                $securitySchemeGuess->setScheme($scheme);
                break;
            case SecuritySchemeGuess::TYPE_API_KEY:
                if ($object instanceof EnrichedSecurityScheme) {
                    $securitySchemeGuess->setIn($object->in ?? null);
                }
                break;
        }

        /** @var Schema $schema */
        $schema = $registry->getSchema($reference);
        $schema->addSecurityScheme($reference, $securitySchemeGuess);
    }
}
