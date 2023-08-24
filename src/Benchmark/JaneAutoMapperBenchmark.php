<?php

namespace Jane\Benchmark;

use Doctrine\Common\Annotations\AnnotationReader;
use Jane\Component\AutoMapper\AutoMapper;
use Jane\Component\AutoMapper\Generator\Generator;
use Jane\Component\AutoMapper\Loader\FileLoader;
use Jane\Component\AutoMapper\Tests\Fixtures\Address;
use Jane\Component\AutoMapper\Tests\Fixtures\User;
use PhpBench\Benchmark\Metadata\Annotations\BeforeMethods;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;
use PhpBench\Benchmark\Metadata\Annotations\Warmup;
use PhpParser\ParserFactory;
use Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;

/**
 * @BeforeMethods({"initAutomapper"})
 *
 * @Warmup(1)
 *
 * @Revs(60)
 *
 * @Iterations(60)
 */
class JaneAutoMapperBenchmark
{
    private $autoMapper;

    public function initAutomapper()
    {
        @unlink(__DIR__ . '/../../cache');
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        $loader = new FileLoader(new Generator(
            (new ParserFactory())->create(ParserFactory::PREFER_PHP7),
            new ClassDiscriminatorFromClassMetadata($classMetadataFactory)
        ), __DIR__ . '/../../cache');

        $this->autoMapper = AutoMapper::create(true, $loader);
    }

    public function benchAutoMapper()
    {
        $address = new Address();
        $address->setCity('Toulon');
        $user = new User(1, 'yolo', '13');
        $user->address = $address;
        $user->addresses[] = $address;

        json_encode($this->autoMapper->map($user, 'array'));
    }
}
