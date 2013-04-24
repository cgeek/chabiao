yum -y install httpd php mysql mysql-server php-mysql

/sbin/chkconfig httpd on
/sbin/chkconfig –-add mysqld
/sbin/chkconfig mysqld on
/sbin/service httpd start
/sbin/service mysqld start
useradd www

yum -y install gcc-c++ zlib-devel openssl-devel perl cpio expat-devel gettext-devel openssl zlib curl autoconf tk
wget http://git-core.googlecode.com/files/git-1.7.10.tar.gz
tar zxvf git-1.7.10.tar.gz
cd git-1.7.10
./configure --prefix=/usr/local/git
make
make install


mkdir xunsearch-full
wget http://www.xunsearch.com/download/xunsearch-full-latest.tar.bz2
tar -xvf ./xunsearch-full-latest.tar.bz2 -C ./xunsearch-full
cd xunsearch-full
sh setup.sh
cd /xunsearch; bin/xs-ctl.sh restart


#关闭SELinux
setenforce 0
echo "/usr/sbin/setenforce 0" >> /etc/rc.local