<?php

namespace Costumerservice\Chatbot\Console;

use Illuminate\Console\Command;

class InstallChatbot extends Command
{
    protected $signature = 'chatbot:install';

    protected $description = 'Install Costumerservice Chatbot package';

    public function handle()
    {
        $this->info('Installing Costumerservice Chatbot...');

        $this->call('vendor:publish', [
            '--tag' => 'chatbot-assets'
        ]);

        $this->call('vendor:publish', [
            '--tag' => 'chatbot-config'
        ]);

        $this->call('vendor:publish', [
            '--tag' => 'chatbot-views'
        ]);

        $this->call('migrate');

        $this->info('Chatbot installed successfully!');
    }
}
