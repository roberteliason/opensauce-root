set :application, 'shipyard'
set :repo_url, 'git@dev.o-lab.se:shipyard-wordpress-root-starter/shipyard-starter-theme.git'

set :scm, :git
set :ssh_options, { :forward_agent => true, }

set :deploy_via, :remote_cache
set :copy_exclude, [".git", ".DS_Store", ".gitignore", ".gitmodules"]

role :app, %w{root@127.0.0.1}
set :linked_dirs, %w{content/uploads content/cache content/languages}

set :composer_install_flags, '--no-dev --prefer-dist --no-scripts --quiet --optimize-autoloader'
set :composer_roles, :all

namespace :deploy do

  desc 'Restart application'
  task :restart do
    on roles(:app), in: :sequence, wait: 5 do
      # Your restart mechanism here, for example:
    end
  end

  after :restart, :clear_cache do
    on roles(:web), in: :groups, limit: 3, wait: 10 do
      # Here we can do anything such as:
      # within release_path do
      #   execute :rake, 'cache:clear'
      # end
    end
  end

  after :finishing, 'deploy:cleanup'

end
