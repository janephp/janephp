<?php

namespace Jane\Benchmark;

use Doctrine\Common\Annotations\AnnotationReader;
use Jane\Component\AutoMapper\Tests\Fixtures\Address;
use Jane\Component\AutoMapper\Tests\Fixtures\User;
use PhpBench\Benchmark\Metadata\Annotations\BeforeMethods;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;
use PhpBench\Benchmark\Metadata\Annotations\Warmup;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * @BeforeMethods({"initObjectNormalizer"})
 * @Warmup(1)
 * @Revs(60)
 * @Iterations(60)
 */
class ObjectNormalizerBenchmark
{
    private $objectNormalizer;

    public function initObjectNormalizer()
    {
        $classMetadataFactory = new CacheClassMetadataFactory(
            new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader())),
            new FilesystemAdapter('SymfonyMetadata')
        );

        $propertyAccessor = PropertyAccess::createPropertyAccessorBuilder()
            ->setCacheItemPool(new FilesystemAdapter('SymfonyPropertyAccessor'))
            ->getPropertyAccessor();

        $this->objectNormalizer = new Serializer([new DateTimeNormalizer(), new ObjectNormalizer($classMetadataFactory, null, $propertyAccessor)], []);
    }

    public function benchObjectNormalizer()
    {
        $address = new Address();
        $address->setCity('Toulon');
        $user = new User(1, 'yolo', '13');
        $user->address = $address;
        $user->addresses[] = $address;

        $this->objectNormalizer->normalize($user);
    }
}
