<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Normalizer;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\User::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\UserNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\Credentials::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\CredentialsNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\Token::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\TokenNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\Planet::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\PlanetNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\PlanetPhysicalProperties::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\PlanetPhysicalPropertiesNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\PlanetPhysicalPropertiesTemperature::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\PlanetPhysicalPropertiesTemperatureNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\PlanetAtmosphereItem::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\PlanetAtmosphereItemNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\Satellite::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\SatelliteNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\SatelliteOrbit::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\SatelliteOrbitNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\PaginatedResource::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\PaginatedResourceNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\PaginatedResourceMeta::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\PaginatedResourceMetaNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\ImageUploadedMessage::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\ImageUploadedMessageNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\BadRequestError::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\BadRequestErrorNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\ForbiddenError::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\ForbiddenErrorNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\NotFoundError::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\NotFoundErrorNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\UnauthorizedError::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\UnauthorizedErrorNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\Conflict::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\ConflictNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\UnprocessableEntity::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\UnprocessableEntityNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\TooManyRequestsError::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\TooManyRequestsErrorNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\PlanetsGetJsonResponse200::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\PlanetsGetJsonResponse200Normalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\PlanetsGetXmlResponse200::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\PlanetsGetXmlResponse200Normalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\PlanetsPlanetIdImagePostBody::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\PlanetsPlanetIdImagePostBodyNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\UserSignupPostBody::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\UserSignupPostBodyNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\ReferenceNormalizer::class,
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
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}