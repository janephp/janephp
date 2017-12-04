<?php

namespace Jane\OpenApi\Command;

use Jane\JsonSchema\Printer;
use Jane\OpenApi\JaneOpenApi;
use Jane\JsonSchema\Registry;
use Jane\JsonSchema\Schema;
use PhpParser\PrettyPrinter\Standard;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GenerateCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    public function configure()
    {
        $this->setName('generate');
        $this->setDescription('Generate an api client: class, normalizers and resources given a specific Json OpenApi file');
        $this->addOption('config-file', 'c', InputOption::VALUE_OPTIONAL, 'File to use for Jane OpenAPI configuration');
        $this->addOption('reference', null, InputOption::VALUE_NONE, 'Use the JSON Reference specification in your generated library');
        $this->addOption('async', null, InputOption::VALUE_NONE, 'Generate extra async methods compatible with amphp');
        $this->addOption('date-format', 'd', InputOption::VALUE_OPTIONAL, 'Date time format to use for date time field');
        $this->addArgument('openapi-file', InputArgument::OPTIONAL, 'Location of the OpenApi (Swagger) Schema file');
        $this->addArgument('namespace', InputArgument::OPTIONAL, 'Namespace prefix to use for generated files');
        $this->addArgument('directory', InputArgument::OPTIONAL, 'Directory where to generate files');
    }

    /**
     * {@inheritdoc}
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $options = [];

        $configFile = null;

        if (!$input->hasOption('config-file') && file_exists('.jane-openapi')) {
            $configFile = '.jane-openapi';
        } elseif ($input->hasOption('config-file') && null !== $input->getOption('config-file')) {
            $configFile = $input->getOption('config-file');
        }

        if ($configFile) {
            $configFile = $input->getOption('config-file');

            if (!file_exists($configFile)) {
                throw new \RuntimeException(sprintf('Config file %s does not exist', $configFile));
            }

            $options = require $configFile;

            if (!is_array($options)) {
                throw new \RuntimeException(sprintf('Invalid config file specified or invalid return type in file %s', $configFile));
            }
        } else {
            if ($input->hasArgument('openapi-file') && null !== $input->getArgument('openapi-file')) {
                $options['openapi-file'] = $input->getArgument('openapi-file');
            }

            if ($input->hasArgument('namespace') && null !== $input->getArgument('namespace')) {
                $options['namespace'] = $input->getArgument('namespace');
            }

            if ($input->hasArgument('directory') && null !== $input->getArgument('directory')) {
                $options['directory'] = $input->getArgument('directory');
            }

            if ($input->hasOption('date-format') && null !== $input->getOption('date-format')) {
                $options['date-format'] = $input->getOption('date-format');
            }

            if ($input->hasOption('reference') && null !== $input->getOption('reference')) {
                $options['reference'] = $input->getOption('reference');
            }

            if ($input->hasOption('async') && null !== $input->getOption('async')) {
                $options['async'] = $input->getOption('async');
            }
        }

        $options = $this->resolveConfiguration($options);
        $registry = new Registry();

        if (array_key_exists('openapi-file', $options)) {
            $registry->addSchema($this->resolveSchema($options['openapi-file'], $options));
        } else {
            foreach ($options['mapping'] as $schema => $schemaOptions) {
                $registry->addSchema($this->resolveSchema($schema, $schemaOptions));
            }
        }

        $janeOpenApi = JaneOpenApi::build($options);
        $printer = new Printer(new Standard());

        $janeOpenApi->generate($registry);
        $printer->output($registry);
    }

    protected function resolveConfiguration(array $options = [])
    {
        $optionsResolver = new OptionsResolver();
        $optionsResolver->setDefaults([
            'reference' => false,
            'date-format' => \DateTime::RFC3339,
            'async' => false,
        ]);

        if (array_key_exists('openapi-file', $options)) {
            $optionsResolver->setRequired([
                'openapi-file',
                'namespace',
                'directory',
            ]);
        } else {
            $optionsResolver->setRequired([
                'mapping',
            ]);
        }

        return $optionsResolver->resolve($options);
    }

    protected function resolveSchema($schema, array $options = [])
    {
        $optionsResolver = new OptionsResolver();

        // To support old schema
        $optionsResolver->setDefined([
            'openapi-file',
            'reference',
            'date-format',
            'async',
        ]);

        $optionsResolver->setRequired([
            'namespace',
            'directory',
        ]);

        $options = $optionsResolver->resolve($options);

        return new Schema($schema, $options['namespace'], $options['directory'], '');
    }
}
