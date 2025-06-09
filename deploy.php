<?php

namespace Deployer;

require 'recipe/laravel.php';

// Config

set('application', 'futbolfemeni');
set('repository', 'git@github.com:Kokon4/deployAutomatic.git');

add('shared_files', ['.env']);
add('shared_dirs', ['storage']);
add('writable_dirs', ['storage', 'bootstrap/cache']);

// Hosts

host('34.237.244.74')
    ->setRemoteUser('futboldeployer')
    ->setHostname('34.237.244.74')
    ->set('deploy_path', '/var/www/futbolfemeni/html');

task('deploy:push_env', function () {
    upload('.env', '{{deploy_path}}/shared/.env');
});

task('reload:php-fpm', function () {
    run('sudo /etc/init.d/php8.3-fpm restart');
});

before('deploy:shared', 'deploy:push_env');

// Hooks
after('deploy','reload:php-fpm');
after('deploy:failed', 'deploy:unlock');
