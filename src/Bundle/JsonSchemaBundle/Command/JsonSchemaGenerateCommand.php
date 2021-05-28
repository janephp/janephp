<?php

namespace Jane\Bundle\JsonSchemaBundle\Command;

use Jane\Component\JsonSchema\Console\Command\GenerateCommand;
use Jane\Component\JsonSchema\Console\Loader\ConfigLoader;
use Jane\Component\JsonSchema\Console\Loader\SchemaLoader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

final class JsonSchemaGenerateCommand extends Command
{
    /**
     * @var GenerateCommand
     */
    private $generateCommand;

    public function __construct()
    {
        $this->generateCommand = new GenerateCommand(new ConfigLoader(), new SchemaLoader());

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setName('jane:json-schema:generate')
            ->setDescription('Generate a set of class and normalizers given a specific Json Schema file')
            ->addOption('config-file', 'c', InputOption::VALUE_REQUIRED, 'File to use for Jane configuration');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $configFile = $input->getOption('config-file');
        if (null === $configFile) {
            if (!is_file($configFile = __DIR__ . '/../../../../../../../config/jane/json_schema.php')) {
                $configFile = '.jane';
            }
        }

        $inputArray = new ArrayInput(['--config-file' => $configFile], $this->generateCommand->getDefinition());
        $this->generateCommand->execute($inputArray, $output);

        $sfStyle = new SymfonyStyle($input, $output);
        $sfStyle->success('Generation done.');

        return 0;
    }
}
