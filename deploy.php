<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/cipfpbatoi/projectes-laravel-Kokon4.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts posar IP de la máquina


// Hooks

after('deploy:failed', 'deploy:unlock');
