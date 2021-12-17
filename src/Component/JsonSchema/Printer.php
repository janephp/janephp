<?php

namespace Jane\Component\JsonSchema;

use Jane\Component\JsonSchema\Registry\Registry;
use PhpCsFixer\Console\Command\FixCommand;
use PhpCsFixer\ToolInfo;
use PhpParser\PrettyPrinterAbstract;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Filesystem\Filesystem;

class Printer
{
    private $prettyPrinter;

    private $fixerConfig;

    private $useFixer = false;

    private $cleanGenerated = true;

    public function __construct(PrettyPrinterAbstract $prettyPrinter, string $fixerConfig = '')
    {
        $this->prettyPrinter = $prettyPrinter;
        $this->fixerConfig = $fixerConfig;
    }

    public function setUseFixer(bool $useFixer): void
    {
        $this->useFixer = $useFixer;
    }

    public function setCleanGenerated(bool $cleanGenerated): void
    {
        $this->cleanGenerated = $cleanGenerated;
    }

    public function output(Registry $registry): void
    {
        if ($this->cleanGenerated) {
            $fs = new Filesystem();
            foreach ($registry->getOutputDirectories() as $directory) {
                $fs->remove($directory);
                $fs->mkdir($directory);
            }
        }

        foreach ($registry->getSchemas() as $schema) {
            foreach ($schema->getFiles() as $file) {
                if (!file_exists(\dirname($file->getFilename()))) {
                    mkdir(\dirname($file->getFilename()), 0755, true);
                }

                file_put_contents($file->getFilename(), $this->prettyPrinter->prettyPrintFile([$file->getNode()]));
            }
        }

        if ($this->useFixer) {
            foreach ($registry->getOutputDirectories() as $directory) {
                $this->fix($directory);
            }
        }
    }

    protected function getDefaultRules(): string
    {
        $rules = [
            '@Symfony' => true,
            'self_accessor' => true,
            'array_syntax' => ['syntax' => 'short'],
            'concat_space' => ['spacing' => 'one'],
            'declare_strict_types' => true,
            'header_comment' => [
                'header' => <<<'EOH'
This file has been auto generated by Jane,

Do no edit it directly.
EOH
                ,
            ],
        ];

        if (version_compare(\PhpCsFixer\Console\Application::VERSION, '3.0.0', '>=')) {
            $rules['yoda_style'] = false;
        } elseif (version_compare(\PhpCsFixer\Console\Application::VERSION, '2.6.0', '>=')) {
            $rules['yoda_style'] = null;
        }

        return json_encode($rules);
    }

    protected function fix(string $path): void
    {
        if (!class_exists(FixCommand::class)) {
            return;
        }

        $command = new FixCommand(new ToolInfo());
        $config = [
            'path' => [$path],
        ];

        if (!empty($this->fixerConfig)) {
            $config['--config'] = $this->fixerConfig;
        } else {
            $config['--allow-risky'] = 'yes';
            $config['--rules'] = $this->getDefaultRules();
        }

        $command->run(new ArrayInput($config, $command->getDefinition()), new NullOutput());
    }
}
