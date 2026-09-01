<?php

namespace Jane\Bundle\OpenApiBundle\Command;

use Jane\Component\JsonSchema\Console\Loader\ConfigLocator;
use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\InvalidArgumentException;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'jane:open-api:generate', description: 'Generate an api client: class, normalizers and resources given a specific OpenApi file')]
final class OpenApiGenerateCommand extends Command
{
    public function __construct(
        private readonly GenerateCommand $generateCommand,
        private readonly ConfigLocator $configLocator,
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addOption('config-file', 'c', InputOption::VALUE_REQUIRED, 'File to use for Jane OpenAPI configuration');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $configFile = $this->configLocator->locate($this->configFileOption($input), [
            'config/jane/open-api.php',
            'config/jane/open_api.php',
        ], '.jane-openapi');

        $inputArray = new ArrayInput(['--config-file' => $configFile], $this->generateCommand->getDefinition());
        $returnCode = $this->generateCommand->run($inputArray, $output);

        if (Command::SUCCESS === $returnCode) {
            (new SymfonyStyle($input, $output))->success('Generation done.');
        }

        return $returnCode;
    }

    private function configFileOption(InputInterface $input): ?string
    {
        $configFile = $input->getOption('config-file');

        if (null === $configFile) {
            return null;
        }

        if (!\is_string($configFile) || '' === $configFile) {
            throw new InvalidArgumentException('The "--config-file" option must be a non-empty file path.');
        }

        return $configFile;
    }
}
