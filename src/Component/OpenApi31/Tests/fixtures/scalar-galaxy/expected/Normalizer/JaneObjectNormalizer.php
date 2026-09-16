<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer;

use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\User::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\UserNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Credentials::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\CredentialsNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Token::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\TokenNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PlanetPhysicalProperties::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetPhysicalPropertiesNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PlanetPhysicalPropertiesTemperature::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetPhysicalPropertiesTemperatureNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PlanetAtmosphereItem::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetAtmosphereItemNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Satellite::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\SatelliteNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\SatelliteOrbit::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\SatelliteOrbitNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PaginatedResource::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PaginatedResourceNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PaginatedResourceMeta::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PaginatedResourceMetaNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\ImageUploadedMessage::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\ImageUploadedMessageNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\BadRequestError::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\BadRequestErrorNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\ForbiddenError::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\ForbiddenErrorNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\NotFoundError::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\NotFoundErrorNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UnauthorizedError::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\UnauthorizedErrorNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Conflict::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\ConflictNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UnprocessableEntity::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\UnprocessableEntityNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\TooManyRequestsError::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\TooManyRequestsErrorNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PlanetsGetJsonResponse200::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetsGetJsonResponse200Normalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PlanetsGetXmlResponse200::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetsGetXmlResponse200Normalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PlanetsPlanetIdImagePostBody::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetsPlanetIdImagePostBodyNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UserSignupPostBody::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\UserSignupPostBodyNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
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
        $normalizer = match ($normalizerClass) {
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\UserNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\UserNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\CredentialsNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\CredentialsNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\TokenNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\TokenNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetPhysicalPropertiesNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetPhysicalPropertiesNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetPhysicalPropertiesTemperatureNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetPhysicalPropertiesTemperatureNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetAtmosphereItemNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetAtmosphereItemNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\SatelliteNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\SatelliteNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\SatelliteOrbitNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\SatelliteOrbitNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PaginatedResourceNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PaginatedResourceNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PaginatedResourceMetaNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PaginatedResourceMetaNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\ImageUploadedMessageNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\ImageUploadedMessageNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\BadRequestErrorNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\BadRequestErrorNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\ForbiddenErrorNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\ForbiddenErrorNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\NotFoundErrorNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\NotFoundErrorNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\UnauthorizedErrorNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\UnauthorizedErrorNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\ConflictNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\ConflictNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\UnprocessableEntityNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\UnprocessableEntityNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\TooManyRequestsErrorNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\TooManyRequestsErrorNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetsGetJsonResponse200Normalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetsGetJsonResponse200Normalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetsGetXmlResponse200Normalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetsGetXmlResponse200Normalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetsPlanetIdImagePostBodyNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\PlanetsPlanetIdImagePostBodyNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\UserSignupPostBodyNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\UserSignupPostBodyNormalizer(),
            \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Normalizer\ReferenceNormalizer::class => new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Normalizer\ReferenceNormalizer(),
            default => throw new \InvalidArgumentException('Unknown normalizer class: ' . $normalizerClass),
        };
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface) {
            $normalizer->setNormalizer($this->normalizer);
        }
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface) {
            $normalizer->setDenormalizer($this->denormalizer);
        }
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}