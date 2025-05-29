<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ConfigureMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:configure';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Configura el correo electrónico para AWS EC2';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $envPath = base_path('.env');

        if (!File::exists($envPath)) {
            $this->error('El archivo .env no existe');
            return;
        }

        $envContent = File::get($envPath);

        // Configuración para AWS SES
        $mailConfig = [
            'MAIL_MAILER=smtp',
            'MAIL_HOST=email-smtp.us-east-1.amazonaws.com',
            'MAIL_PORT=587',
            'MAIL_USERNAME=',
            'MAIL_PASSWORD=',
            'MAIL_ENCRYPTION=tls',
            'MAIL_FROM_ADDRESS=goncalvesnicolas1000@gmail.com',
            'MAIL_FROM_NAME="${APP_NAME}"',
        ];

        foreach ($mailConfig as $config) {
            $key = explode('=', $config)[0];
            if (!preg_match("/^{$key}=/m", $envContent)) {
                $envContent .= "\n{$config}";
            }
        }

        File::put($envPath, $envContent);

        $this->info('Configuración de correo actualizada. Por favor, completa las credenciales en el archivo .env');
        $this->info('Necesitarás configurar:');
        $this->info('1. MAIL_USERNAME: Tu SMTP username de AWS SES');
        $this->info('2. MAIL_PASSWORD: Tu SMTP password de AWS SES');
    }
}
