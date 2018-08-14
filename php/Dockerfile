FROM php:7.0-fpm
RUN apt-get update \
	# 手动安装依赖
	&& apt-get install -y libmemcached-dev zlib1g-dev \
	# 安装需要的扩展
   && pecl install mysqli \
   && pecl install pdo_mysql \
   && pecl install memcached-3.0.4 \
   && pecl install redis-4.1.1 \
   && pecl install swoole-4.0.4 \
   # 启用扩展
   && docker-php-ext-enable mysqli memcached redis swoole pdo_mysql
