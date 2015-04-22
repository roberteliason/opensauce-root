set :stage, :production

role :app, %w{roberte@stage.o-lab.se}
set :linked_dirs, %w{content/uploads content/cache content/languages}

set :deploy_to, '/stage/www/opensauce/'
set :linked_files, %w{local-config.php content/object-cache.php content/debug.log}
set :branch, "develop"
