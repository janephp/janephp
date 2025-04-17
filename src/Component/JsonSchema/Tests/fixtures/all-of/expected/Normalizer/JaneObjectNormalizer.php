<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Normalizer;

use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
        
        \Jane\Component\JsonSchema\Tests\Expected\Model\Test::class => \Jane\Component\JsonSchema\Tests\Expected\Normalizer\TestNormalizer::class,
        
        \Jane\Component\JsonSchema\Tests\Expected\Model\Otherchildtype::class => \Jane\Component\JsonSchema\Tests\Expected\Normalizer\OtherchildtypeNormalizer::class,
        
        \Jane\Component\JsonSchema\Tests\Expected\Model\Childtype::class => \Jane\Component\JsonSchema\Tests\Expected\Normalizer\ChildtypeNormalizer::class,
        
        \Jane\Component\JsonSchema\Tests\Expected\Model\Parenttype::class => \Jane\Component\JsonSchema\Tests\Expected\Normalizer\ParenttypeNormalizer::class,
        
        \Jane\Component\JsonSchema\Tests\Expected\Model\Foo::class => \Jane\Component\JsonSchema\Tests\Expected\Normalizer\FooNormalizer::class,
        
        \Jane\Component\JsonSchema\Tests\Expected\Model\Bar::class => \Jane\Component\JsonSchema\Tests\Expected\Normalizer\BarNormalizer::class,
        
        \Jane\Component\JsonSchema\Tests\Expected\Model\Baz::class => \Jane\Component\JsonSchema\Tests\Expected\Normalizer\BazNormalizer::class,
        
        \Jane\Component\JsonSchema\Tests\Expected\Model\BazBaz::class => \Jane\Component\JsonSchema\Tests\Expected\Normalizer\BazBazNormalizer::class,
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
        return [
            
            \Jane\Component\JsonSchema\Tests\Expected\Model\Test::class => false,
            \Jane\Component\JsonSchema\Tests\Expected\Model\Otherchildtype::class => false,
            \Jane\Component\JsonSchema\Tests\Expected\Model\Childtype::class => false,
            \Jane\Component\JsonSchema\Tests\Expected\Model\Parenttype::class => false,
            \Jane\Component\JsonSchema\Tests\Expected\Model\Foo::class => false,
            \Jane\Component\JsonSchema\Tests\Expected\Model\Bar::class => false,
            \Jane\Component\JsonSchema\Tests\Expected\Model\Baz::class => false,
            \Jane\Component\JsonSchema\Tests\Expected\Model\BazBaz::class => false,
        ];
    }
}