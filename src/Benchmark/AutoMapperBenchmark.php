<?php

namespace Jane\Benchmark;

use Doctrine\Common\Annotations\AnnotationReader;
use Jane\AutoMapper\AutoMapper;
use Jane\AutoMapper\Compiler\Accessor\ReflectionAccessorExtractor;
use Jane\AutoMapper\Compiler\FromSourcePropertiesMappingExtractor;
use Jane\AutoMapper\Compiler\FromTargetPropertiesMappingExtractor;
use Jane\AutoMapper\Compiler\SourceTargetPropertiesMappingExtractor;
use Jane\AutoMapper\Compiler\Transformer\ArrayTransformerFactory;
use Jane\AutoMapper\Compiler\Transformer\BuiltinTransformerFactory;
use Jane\AutoMapper\Compiler\Transformer\ChainTransformerFactory;
use Jane\AutoMapper\Compiler\Transformer\MultipleTransformerFactory;
use Jane\AutoMapper\Compiler\Transformer\ObjectTransformerFactory;
use Jane\AutoMapper\Context;
use Jane\AutoMapper\Extractor\PrivateReflectionExtractor;
use Jane\AutoMapper\MapperConfiguration;
use Jane\AutoMapper\MapperConfigurationFactory;
use Jane\AutoMapper\Tests\Domain\Address;
use Jane\AutoMapper\Tests\Domain\User;
use PhpBench\Benchmark\Metadata\Annotations\AfterMethods;
use PhpBench\Benchmark\Metadata\Annotations\BeforeMethods;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;
use PhpBench\Benchmark\Metadata\Annotations\Warmup;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;

/**
 * @BeforeMethods({"initAutomapper", "initData", "initBlackfire"})
 * @AfterMethods({"stopBlackfire"})
 * @Warmup(1)
 * @Revs(100000)
 * @Iterations(1)
 */
class AutoMapperBenchmark
{
    private $sourceTargetMappingExtractor;
    private $sourceTargetPrivateMappingExtractor;
    private $fromTargetMappingExtractor;
    private $fromSourceMappingExtractor;
    /** @var ChainTransformerFactory */
    private $transformerFactory;
    private $autoMapper;
    private $data;
    private $mapper;
    private $context;

    public function initAutomapper()
    {
        $this->autoMapper = new AutoMapper();
        $reflectionExtractor = new ReflectionExtractor();
        $reflectionExtractorPrivate = new PrivateReflectionExtractor();
        $phpDocExtractor = new PhpDocExtractor();
        $this->transformerFactory = new ChainTransformerFactory();
        $this->transformerFactory->addTransformerFactory(new MultipleTransformerFactory($this->transformerFactory));
        $this->transformerFactory->addTransformerFactory(new BuiltinTransformerFactory());
        $this->transformerFactory->addTransformerFactory(new ArrayTransformerFactory($this->transformerFactory));

        $this->sourceTargetMappingExtractor = new SourceTargetPropertiesMappingExtractor(new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$reflectionExtractor, $phpDocExtractor],
            [$reflectionExtractor],
            [$reflectionExtractor]
        ),
            new ReflectionAccessorExtractor(),
            $this->transformerFactory,
            new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()))
        );

        $this->fromTargetMappingExtractor = new FromTargetPropertiesMappingExtractor(new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$reflectionExtractor, $phpDocExtractor],
            [$reflectionExtractor],
            [$reflectionExtractor]
        ),
            new ReflectionAccessorExtractor(),
            $this->transformerFactory,
            new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()))
        );

        $this->fromSourceMappingExtractor = new FromSourcePropertiesMappingExtractor(new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$reflectionExtractor, $phpDocExtractor],
            [$reflectionExtractor],
            [$reflectionExtractor]
        ),
            new ReflectionAccessorExtractor(),
            $this->transformerFactory,
            new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()))
        );

        $this->sourceTargetPrivateMappingExtractor = new SourceTargetPropertiesMappingExtractor(new PropertyInfoExtractor(
            [$reflectionExtractorPrivate],
            [$reflectionExtractorPrivate, $phpDocExtractor],
            [$reflectionExtractorPrivate],
            [$reflectionExtractorPrivate]
        ),
            new ReflectionAccessorExtractor(true),
            $this->transformerFactory,
            new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()))
        );

        $this->transformerFactory->addTransformerFactory(new ObjectTransformerFactory($this->autoMapper, new MapperConfigurationFactory(
            $this->sourceTargetMappingExtractor,
            $this->fromSourceMappingExtractor,
            $this->fromTargetMappingExtractor
        ), true));

        $configurationUser = new MapperConfiguration($this->fromSourceMappingExtractor, User::class, 'array');
        $configurationAddress = new MapperConfiguration($this->fromSourceMappingExtractor, Address::class, 'array');
        $this->autoMapper->register($configurationUser);
        $this->autoMapper->register($configurationAddress);

        $this->mapper = $this->autoMapper->getMapper(User::class, 'array');
    }

    public function initData()
    {
        $address = new Address();
        $address->setCity('Toulon');
        $user = new User(1, 'yolo', '13');
        $user->address = $address;
        $user->addresses[] = $address;

        $this->data = $user;
        $this->context = new Context();
    }

    public function initBlackfire()
    {
//        \BlackfireProbe::getMainInstance()->enable();
    }

    public function benchToArray()
    {
        $this->mapper->map($this->data, $this->context);
    }

    public function stopBlackfire()
    {
//        \BlackfireProbe::getMainInstance()->disable();
    }
}
