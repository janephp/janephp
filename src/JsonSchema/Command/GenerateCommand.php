<?php

namespace Jane\JsonSchema\Command;

use Jane\JsonSchema\Jane;
use Jane\JsonSchema\Printer;
use Jane\JsonSchema\Registry;
use Jane\JsonSchema\Schema;
use PhpParser\PrettyPrinter\Standard;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GenerateCommand extends Command
{
    use ConfigLoader;

    /**
     * {@inheritdoc}
     */
    public function configure()
    {
        $this->setName('generate');
        $this->setDescription('Generate a set of class and normalizers given a specific Json Schema file');
        $this->addOption('config-file', 'c', InputOption::VALUE_REQUIRED, 'File to use for Jane configuration', '.jane');
    }

    /**
     * {@inheritdoc}
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $options = $this->loadConfig($input->getOption('config-file'));
        $registry = new Registry();

        if (\array_key_exists('json-schema-file', $options)) {
            $registry->addSchema($this->resolveSchema($options['json-schema-file'], $options));
            $registry->addOutputDirectory($options['directory']);
        } else {
            foreach ($options['mapping'] as $schema => $schemaOptions) {
                $registry->addSchema($this->resolveSchema($schema, $schemaOptions));
                $registry->addOutputDirectory($schemaOptions['directory']);
            }
        }

        $jane = Jane::build($options);
        $fixerConfigFile = '';

        if (\array_key_exists('fixer-config-file', $options) && null !== $options['fixer-config-file']) {
            $fixerConfigFile = $options['fixer-config-file'];
        }

        $printer = new Printer(new Standard(), $fixerConfigFile);

        if (\array_key_exists('use-fixer', $options) && \is_bool($options['use-fixer'])) {
            $printer->setUseFixer($options['use-fixer']);
        }
        if (\array_key_exists('clean-generated', $options) && \is_bool($options['clean-generated'])) {
            $printer->setCleanGenerated($options['clean-generated']);
        }

        $jane->generate($registry);
        $printer->output($registry);

        return 0;
    }

    protected function resolveSchema($schema, array $options = [])
    {
        $optionsResolver = new OptionsResolver();

        // To support old schema
        $optionsResolver->setDefined([
            'json-schema-file',
            'reference',
            'date-format',
            'full-date-format',
            'date-prefer-interface',
            'date-input-format',
            'strict',
            'use-fixer',
            'fixer-config-file',
            'clean-generated',
            'use-cacheable-supports-method',
            'normalizer-force-null-when-nullable',
        ]);

        $optionsResolver->setRequired([
            'root-class',
            'namespace',
            'directory',
        ]);

        $options = $optionsResolver->resolve($options);

        return new Schema($schema, $options['namespace'], $options['directory'], $options['root-class']);
    }
}
