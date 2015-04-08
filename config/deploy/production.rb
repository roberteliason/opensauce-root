set :stage, :production

set :deploy_to, '/path/to/url/'
set :linked_files, %w{local-config.php content/object-cache.php content/debug.log}
set :branch, "master"
