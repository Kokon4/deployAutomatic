<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@github.com:cipfpbatoi/repositori-b-sic-Kokon4.git');

add('shared_files', ['.env']);
add('shared_dirs', ['storage']);
add('writable_dirs', ['storage','bootstrap/cache']);
// Hosts posar IP de la máquina

host('3.225.53.211') ->set('remote_user', 'sa04-deployer')
->set('identity_file', '~/.ssh/id_rsa')
 ->set('deploy_path', '/var/www/es-cipfpbatoi-deployer/html'); 

after('deploy:failed', 'deploy:unlock');

before('deploy:symlink','artisan:migrate');
