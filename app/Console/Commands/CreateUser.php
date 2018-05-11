<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'a:b';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $name = $this->ask('Escribe el nombre de usuario');
      $email = $this->ask('Introduce tu dirección de correo electrónico');
      $password = $this->ask('Introduce tu password');

      $user = new User();
      $user->name = $name;
      $user->email = $email;
      $user->password = Hash::make($password);
      $user->save();
    }
}
