set :stage, :production

role :app, %w{root@127.0.0.1}
set :linked_dirs, %w{content/uploads content/cache content/languages}

set :deploy_to, '/path/to/url/'
set :linked_files, %w{local-config.php content/object-cache.php content/debug.log}
set :branch, "master"
