<?php

namespace DinhQuocHan\Twig\Console;

use Illuminate\Console\Command;
use RuntimeException;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand('view:clear', 'Clear all compiled view files')]
class TwigViewClearCommand extends Command
{
    public function handle(): int
    {
        $files = $this->laravel['files'];
        $path = $this->laravel['config']['view.compiled'];

        if (! $path) {
            throw new RuntimeException('View path not found.');
        }

        foreach ($files->glob("{$path}/*") as $view) {
            if ($files->isDirectory($view)) {
                $files->deleteDirectory($view);
                continue;
            }
            if ($files->isFile($view)) {
                $files->delete($view);
            }
        }

        $this->components->info('Compiled blade & twig views cleared!');

        return self::SUCCESS;
    }
}
