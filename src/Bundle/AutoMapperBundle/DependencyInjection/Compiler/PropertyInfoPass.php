<?php

namespace Jane\Bundle\AutoMapperBundle\DependencyInjection\Compiler;

use Jane\Component\AutoMapper\Extractor\MapToContextPropertyInfoExtractorDecorator;
use Symfony\Component\DependencyInjection\Argument\IteratorArgument;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;

class PropertyInfoPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        if (!$container->has('property_info')) {
            return;
        }

        $propertyInfoDefinition = $container->findDefinition('property_info');

        $container->setDefinition(
            'automapper.property_info.reflection_extractor.inner',
            new Definition(
                ReflectionExtractor::class,
                [
                    '$accessFlags' => ReflectionExtractor::ALLOW_PUBLIC | ReflectionExtractor::ALLOW_PROTECTED | ReflectionExtractor::ALLOW_PRIVATE,
                ]
            )
        );

        $container->setDefinition(
            'automapper.property_info.reflection_extractor',
            new Definition(
                MapToContextPropertyInfoExtractorDecorator::class,
                [
                    new Reference('automapper.property_info.reflection_extractor.inner'),
                ]
            )
        );

        $container->setDefinition(
            'automapper.property_info',
            new Definition(
                PropertyInfoExtractor::class,
                [
                    $this->replaceReflectionExtractor($propertyInfoDefinition->getArgument(0)),
                    $this->replaceReflectionExtractor($propertyInfoDefinition->getArgument(1)),
                    $this->replaceReflectionExtractor($propertyInfoDefinition->getArgument(2)),
                    $this->replaceReflectionExtractor($propertyInfoDefinition->getArgument(3)),
                    $this->replaceReflectionExtractor($propertyInfoDefinition->getArgument(4)),
                ]
            )
        );

        $container->setDefinition(
            'automapper.property_info.cache',
            new Definition(PropertyInfoCacheExtractor::class, [
                new Reference('.inner'),
                new Reference('cache.property_info'),
            ])
        )->setDecoratedService('automapper.property_info');
    }

    private function replaceReflectionExtractor(IteratorArgument $extractors): IteratorArgument
    {
        $newExtractors = [];

        /** @var Reference $extractor */
        foreach ($extractors->getValues() as $extractor) {
            $newExtractors[] = (string) $extractor === 'property_info.reflection_extractor'
                ? new Reference('automapper.property_info.reflection_extractor')
                : $extractor;
        }

        return new IteratorArgument($newExtractors);
    }
}
