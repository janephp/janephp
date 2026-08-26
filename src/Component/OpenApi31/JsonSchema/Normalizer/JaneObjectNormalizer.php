<?php

namespace Jane\Component\OpenApi31\JsonSchema\Normalizer;

use Jane\Component\OpenApi31\JsonSchema\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\JsonSchema\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;
    protected $normalizers = [
        \Jane\Component\OpenApi31\JsonSchema\Model\OpenApi::class => OpenApiNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Info::class => InfoNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Contact::class => ContactNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\License::class => LicenseNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Server::class => ServerNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\ServerVariable::class => ServerVariableNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Components::class => ComponentsNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\PathItem::class => PathItemNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Operation::class => OperationNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\ExternalDocumentation::class => ExternalDocumentationNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Parameter::class => ParameterNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\RequestBody::class => RequestBodyNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\MediaType::class => MediaTypeNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Encoding::class => EncodingNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Responses::class => ResponsesNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Response::class => ResponseNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Example::class => ExampleNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Link::class => LinkNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Header::class => HeaderNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Tag::class => TagNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Reference::class => ReferenceNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\SecurityScheme::class => SecuritySchemeNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\OauthFlows::class => OauthFlowsNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Implicit::class => ImplicitNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Password::class => PasswordNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\ClientCredentials::class => ClientCredentialsNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\AuthorizationCode::class => AuthorizationCodeNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Schema::class => SchemaNormalizer::class,

        \Jane\Component\OpenApi31\JsonSchema\Model\Discriminator::class => DiscriminatorNormalizer::class,

        \Jane\Component\JsonSchemaRuntime\Reference::class => \Jane\Component\OpenApi31\JsonSchema\Runtime\Normalizer\ReferenceNormalizer::class,
    ];
    protected $normalizersCache = [];

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \array_key_exists(\get_class($data), $this->normalizers);
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[\get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($data, $format, $context);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $type, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [
            \Jane\Component\OpenApi31\JsonSchema\Model\OpenApi::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Info::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Contact::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\License::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Server::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\ServerVariable::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Components::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\PathItem::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Operation::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\ExternalDocumentation::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Parameter::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\RequestBody::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\MediaType::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Encoding::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Responses::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Response::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Example::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Link::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Header::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Tag::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Reference::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\SecurityScheme::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\OauthFlows::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Implicit::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Password::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\ClientCredentials::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\AuthorizationCode::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Schema::class => false,
            \Jane\Component\OpenApi31\JsonSchema\Model\Discriminator::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}
