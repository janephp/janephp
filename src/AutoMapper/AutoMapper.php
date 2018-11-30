<?php

namespace Jane\AutoMapper;

use Doctrine\Common\Annotations\AnnotationReader;
use Jane\AutoMapper\Compiler\Accessor\ReflectionAccessorExtractor;
use Jane\AutoMapper\Compiler\Compiler;
use Jane\AutoMapper\Compiler\EvalLoader;
use Jane\AutoMapper\Compiler\FromSourcePropertiesMappingExtractor;
use Jane\AutoMapper\Compiler\FromTargetPropertiesMappingExtractor;
use Jane\AutoMapper\Compiler\MapperClassLoaderInterface;
use Jane\AutoMapper\Compiler\SourceTargetPropertiesMappingExtractor;
use Jane\AutoMapper\Compiler\Transformer\ArrayTransformerFactory;
use Jane\AutoMapper\Compiler\Transformer\BuiltinTransformerFactory;
use Jane\AutoMapper\Compiler\Transformer\ChainTransformerFactory;
use Jane\AutoMapper\Compiler\Transformer\DateTimeTransformerFactory;
use Jane\AutoMapper\Compiler\Transformer\MultipleTransformerFactory;
use Jane\AutoMapper\Compiler\Transformer\NullableTransformerFactory;
use Jane\AutoMapper\Compiler\Transformer\ObjectTransformerFactory;
use Jane\AutoMapper\Compiler\Transformer\UniqueTypeTransformerFactory;
use Jane\AutoMapper\Extractor\PrivateReflectionExtractor;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\NameConverter\AdvancedNameConverterInterface;

class AutoMapper extends AbstractAutoMapper
{
    /**
     * Use this for test, benchmark and fast prototyping.
     *
     * @internal
     */
    public static function create(bool $private = true, MapperClassLoaderInterface $loader = null, AdvancedNameConverterInterface $nameConverter = null, string $classPrefix = 'Mapper_'): self
    {
        if ($loader === null) {
            $loader = new EvalLoader(new Compiler());
        }

        if ($private) {
            $reflectionExtractor = new PrivateReflectionExtractor();
        } else {
            $reflectionExtractor = new ReflectionExtractor();
        }

        $phpDocExtractor = new PhpDocExtractor();
        $propertyInfoExtractor = new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$phpDocExtractor, $reflectionExtractor],
            [$reflectionExtractor],
            [$reflectionExtractor]
        );
        $accessorExtractor = new ReflectionAccessorExtractor($private);
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $transformerFactory = new ChainTransformerFactory();

        $sourceTargetMappingExtractor = new SourceTargetPropertiesMappingExtractor(
            $propertyInfoExtractor,
            $accessorExtractor,
            $transformerFactory,
            $classMetadataFactory
        );

        $fromTargetMappingExtractor = new FromTargetPropertiesMappingExtractor(
            $propertyInfoExtractor,
            $accessorExtractor,
            $transformerFactory,
            $classMetadataFactory,
            $nameConverter
        );

        $fromSourceMappingExtractor = new FromSourcePropertiesMappingExtractor(
            $propertyInfoExtractor,
            $accessorExtractor,
            $transformerFactory,
            $classMetadataFactory,
            $nameConverter
        );

        $autoMapper = new self($loader, new MapperConfigurationFactory(
            $sourceTargetMappingExtractor,
            $fromSourceMappingExtractor,
            $fromTargetMappingExtractor,
            $classPrefix
        ));

        $transformerFactory->addTransformerFactory(new MultipleTransformerFactory($transformerFactory));
        $transformerFactory->addTransformerFactory(new NullableTransformerFactory($transformerFactory));
        $transformerFactory->addTransformerFactory(new UniqueTypeTransformerFactory($transformerFactory));
        $transformerFactory->addTransformerFactory(new DateTimeTransformerFactory());
        $transformerFactory->addTransformerFactory(new BuiltinTransformerFactory());
        $transformerFactory->addTransformerFactory(new ArrayTransformerFactory($transformerFactory));
        $transformerFactory->addTransformerFactory(new ObjectTransformerFactory($autoMapper));

        return $autoMapper;
    }
}
