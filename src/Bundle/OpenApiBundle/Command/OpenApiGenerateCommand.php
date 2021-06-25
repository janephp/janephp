<?php

namespace Jane\Bundle\OpenApiBundle\Command;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

final class OpenApiGenerateCommand extends Command
{
    /**
     * @var GenerateCommand
     */
    private $generateCommand;

    public function __construct()
    {
        $this->generateCommand = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setName('jane:open-api:generate')
            ->setDescription('Generate an api client: class, normalizers and resources given a specific OpenApi file')
            ->addOption('config-file', 'c', InputOption::VALUE_REQUIRED, 'File to use for Jane OpenAPI configuration');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $configFile = $input->getOption('config-file');
        if (null === $configFile) {
            if (!is_file($configFile = __DIR__ . '/../../../../../../../config/jane/open_api.php')) {
                $configFile = '.jane-openapi';
            }
        }

        $inputArray = new ArrayInput(['--config-file' => $configFile], $this->generateCommand->getDefinition());
        $this->generateCommand->execute($inputArray, $output);

        $sfStyle = new SymfonyStyle($input, $output);
        $sfStyle->success('Generation done.');

        return 0;
    }
}
