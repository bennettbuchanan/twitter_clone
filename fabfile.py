from fabric.api import *

env.user = 'admin'

env.hosts = ['158.69.92.186']

dist = "mywebapp"


def pack():
    local("tar --exclude='*.tar.gz' -cvzf %s.tar.gz ." % dist)


def deploy():
    put('%s.tar.gz' % dist, '/tmp/%s.tar.gz' % dist)
    run('sudo mkdir /tmp/%s' % dist)
    run('sudo tar -xzf /tmp/%s.tar.gz -C /var/www/html' % dist)
    run('sudo rm -rf /tmp/%s /tmp/%s.tar.gz' % (dist, dist))
