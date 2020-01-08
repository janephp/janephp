<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\MapperConfigurationInterface;
use PhpParser\PrettyPrinter\Standard;

class FileLoader implements MapperClassLoaderInterface
{
    private $compiler;

    private $directory;

    private $hotReload;

    private $printer;

    private $registry;

    public function __construct(Compiler $compiler, string $directory, bool $hotReload = true)
    {
        $this->compiler = $compiler;
        $this->directory = $directory;
        $this->hotReload = $hotReload;
        $this->printer = new Standard();
    }

    public function load(MapperConfigurationInterface $mapperConfiguration): void
    {
        $className = $mapperConfiguration->getMapperClassName();
        $classPath = $this->directory . \DIRECTORY_SEPARATOR . $className . '.php';

        if (!$this->hotReload) {
            require $classPath;
        }

        $hash = $mapperConfiguration->getModificationHash();
        $registry = $this->getRegistry();

        if (!isset($registry[$className]) || $registry[$className] !== $hash || !file_exists($classPath)) {
            $this->saveMapper($mapperConfiguration);
        }

        require $classPath;
    }

    private function getRegistry()
    {
        if (!file_exists($this->directory)) {
            mkdir($this->directory);
        }

        if (!$this->registry) {
            $registryPath = $this->directory . \DIRECTORY_SEPARATOR . 'registry.php';

            if (!file_exists($registryPath)) {
                $this->registry = [];
            } else {
                $this->registry = require $registryPath;
            }
        }

        return $this->registry;
    }

    private function addHashToRegistry($className, $hash)
    {
        $registryPath = $this->directory . \DIRECTORY_SEPARATOR . 'registry.php';
        $this->registry[$className] = $hash;
        file_put_contents($registryPath, "<?php\n\nreturn " . var_export($this->registry, true) . ";\n");
    }

    public function saveMapper(MapperConfigurationInterface $mapperConfiguration): void
    {
        $className = $mapperConfiguration->getMapperClassName();
        $classPath = $this->directory . \DIRECTORY_SEPARATOR . $className . '.php';
        $hash = $mapperConfiguration->getModificationHash();
        $classCode = $this->printer->prettyPrint([$this->compiler->compile($mapperConfiguration)]);

        file_put_contents($classPath, "<?php\n\n" . $classCode . "\n");

        $this->addHashToRegistry($className, $hash);
    }
}
