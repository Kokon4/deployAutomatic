<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/Kokon4/deployAutomatic.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('futbolfemeni.ord.ddaw.com')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/deployAutomatic');

// Hooks

after('deploy:failed', 'deploy:unlock');
