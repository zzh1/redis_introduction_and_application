<?php
/**
 * 1-1 课程内容概要
 *
 * 课程介绍
 *     第一部分 初始redis
 *          redis概念
 *          redis安装
 *          redis的数据类型
 *
 *      第二部分 操作redis
 *          PHP的redis扩展安装
 *          PHP操作redis的五种类型
 *
 * 1-2初识redis
 *
 * 什么是redis
 *      redis是远程的
 *      redis是基于内存的
 *      redis是非关系型数据库
 *          关系型数据库需要存储之前必须定义好数据字典，后续的存储按照存储字典存储；
 *          redis不需要数据字典
 *
 * 1-3 redis的应用场景
 *      缓存
 *      队列
 *      数据存储
 *
 *
 * 1-4 redis安装
 *      1. 服务器环境: linux/CentOs release 6.8
 *      2. Redis版本(2.8.13  http://download.redis.io/releases)
 *      3. 预装软件(gcc,tcl)
 *              gcc : C语言编译器，redis是用C语言写的，必须安装gcc
 *              tcl : 另一种语言，redis的一些测试组件是tcl写的
 *
 *
 * 2-2 redis安装
 *      1.tar -xf redis-2.8.13.tar.gz
 *      2.make
 *      3.sudo make install
 *
 * 2-3 redis客户端安装
 *
 *
 * 3-1 redis的五种数据类型
 *      如图(3-1 redis的五种数据类型)
 *
 * 3-2 string类型操作
 *      如图（3-2 string类型操作）
 *
 * 3-3 list类型操作
 *      list类型
 *          如图(3-3-1 list类型)
 *      list基本操作
 *          如图（3-3-2 list基本操作）
 *
 * 3-4 set类型
 *      set类型
 *          如图(3-4-1 set类型)
 *      set基本操作
 *          如图（3-4-2 set基本操作）
 *
 * 3-5 hash类型
 *      hash类型
 *          如图(3-5-1 hash类型)
 *      hash基本操作
 *          如图（3-5-2 hash基本操作）
 *
 * 3-6 sort set类型
 *      sort set类型[图片]
 *          如图(3-6-1 sort set类型)
 *      hash基本操作
 *          如图（3-6-2 sort set基本操作）
 *
 *
 * 4-1 PHP redis扩展安装环境
 *      服务器环境：linux/centos release 6.8
 *      PHP(5.3) （phpize/php-config）
 *      PHP redis扩展( wget https://github.com/phpredis/phpredis/archive/develop.zip )
 *
 *      PS: 安装 phpize和php-config扩展可以 yum install php-devel (php扩展安装所需要工具)
 *      两个参考博客
 *          lnmp安装  https://blog.csdn.net/z13615480737/article/details/79530334
 *          redis 安装 https://www.cnblogs.com/hanyinglong/p/5036558.html
 *
 * 4-2 具体安装步骤
 *      unzip develop.zip
 *      phpize
 *      ./configure --with-php-config=/usr/bin/php-config
 *      make/make install
 *      php.ini - extension = redis.so
 *
 * 5-1 redis的链接操作
 *      说明
 *          文档地址：https://github.com/phpredis/phpredis
 *          redis类的命名空间是根
 *          phpredis的命令和参数基本和redis.io中的实际命令对应
 *
 *      连接
 * 5-2 string类型操作
 * 5-3 list类型操作
 * 5-4 set类型操作
 * 5-5 hash类型操作
 * 5-6 sort set类型操作
 *
 *
 * 6-1课程总结
 *      redis概念
 *      redis安装
 *      redis的五种数据类型
 *      PHP的redis扩展安装
 *      PHP操作redis的五种数据类型
 *
 *
 *
 *
 *
 *
 *
 *
 *
 */