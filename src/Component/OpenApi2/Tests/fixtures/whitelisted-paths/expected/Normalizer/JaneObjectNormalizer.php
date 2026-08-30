<?php

namespace Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Normalizer;

use Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\CheckArray;
use Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\ValidatorTrait;
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
        
        \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Company::class => \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Normalizer\CompanyNormalizer::class,
        
        \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Project::class => \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Normalizer\ProjectNormalizer::class,
        
        \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\ProjectClient::class => \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Normalizer\ProjectClientNormalizer::class,
        
        \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Projects::class => \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Normalizer\ProjectsNormalizer::class,
        
        \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Error::class => \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Normalizer\ErrorNormalizer::class,
        
        \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\PaginationLinks::class => \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Normalizer\PaginationLinksNormalizer::class,
        
        \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\CompanyPatchBody::class => \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Normalizer\CompanyPatchBodyNormalizer::class,
        
        \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\ProjectsPostBody::class => \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Normalizer\ProjectsPostBodyNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\ReferenceNormalizer::class,
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