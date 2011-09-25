set :application, "aboutme"
set :domain, "173.230.152.239"
set :repository,  "git://github.com/ade56/aboutme.git"
set :user, "root"
set :scm, :git
set :deploy_to, "/apps/#{application}"

role :app, domain
role :web, domain
role :db,  domain, :primary => true