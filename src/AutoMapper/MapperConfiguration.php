<?php

namespace Jane\AutoMapper;

use Jane\AutoMapper\Compiler\Compiler;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt\Class_;
use PhpParser\PrettyPrinter\Standard;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MapperConfiguration implements MapperConfigurationInterface
{
    private $source;

    private $target;

    private $options;

    private $hash;

    private $compiler;

    public function __construct(Compiler $compiler, string $source, string $target, array $options = [])
    {
        $this->compiler = $compiler;
        $this->source = $source;
        $this->target = $target;
        $this->options = $this->getOptionsResolver()->resolve($options);
        $this->hash = $this->buildHash($source, $target, $options);
    }

    public function supports(string $source, string $target, array $options = [])
    {
        $options = $this->getOptionsResolver()->resolve($options);

        return $this->buildHash($source, $target, $options) === $this->hash;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getTarget(): string
    {
        return $this->target;
    }

    protected function getClassName(): string
    {
        return sprintf('Mapper_%s', $this->hash);
    }

    protected function compile(): Class_
    {
        $class = $this->compiler->getMapping($this->source, $this->target, $this->options);
        $class->name = new Name($this->getClassName());

        return $class;
    }

    public function getMapper(): Mapper
    {
        $classname = $this->getClassName();

        if (!class_exists($classname)) {
            $class = $this->compile();
            $printer = new Standard();
            $code = $printer->prettyPrint([$class]);
            // Yolo
            eval($code);
        }

        return new $classname();
    }

    protected function buildHash(string $source, string $target, array $options = [])
    {
        return hash('md5', serialize([
            $source,
            $target,
            $options
        ]));
    }

    protected function getOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }
}