# Equipments Library

## What's?

This is mainly a small-scale facility management system for the company.

The foundation is Concrete 5.

## Requirements

・[Composer](https://getcomposer.org/)

・[Docker](https://www.docker.com/)

## Usage

1. data内にconcrete5の公式リポジトリをclone

```
cd data

# Use SSH
$ git clone git@github.com:concrete5/concrete5.git .

# Use HTTPS
$ git clone https://github.com/concrete5/concrete5.git .
```

下記のエラーが出る場合、
```
fatal: destination path '.' already exists and is not an empty directory.
```
「クローン先のディレクトリが空じゃないよ！」と言われているので、空にする。このとき、隠しファイルも消すこと。

2. 1のディレクトリで必要なライブラリをインストールする

```
$ composer install
```

下記のエラーが出る場合、
```
Your requirements could not be resolved to an installable set of packages.
```
大抵はライブラリの依存関係でエラーが出ているので、` composer.lock `を削除すればうまくいく場合が多い。

3. .envファイルをコピーする
```
コピー先で設定は自由に変えて頂いて構いません。
$ cp .env-sample .env
```

4. dockerを起動する
```
起動
$ docker-compose up -d
（初回はビルドが入るため、時間がかかります）

終了
$ docker-compose down
```

## Settings

### ・Portを変更する
1. [docker-compose.yml](./docker-compose.yml)を開く
2. 変更したいコンテナのportsを書き換える
3. （docker動作中なら）コンテナを再起動する

### ・PHP My Adminのインポートサイズを変更する
1. [upload.ini](./docker/phpmyadmin/upload.ini)を開く
2. 設定値を変更する
```
例

upload_max_filesize=128M
```

### GDの設定値を変更する
PHP 7.4以降はGDのパラメータが異なるようなので注意。

1. PHPの[Dockerfile](./docker/php/Dockerfile)を開く

2. ` docker-php-ext-configure `を修正する
```
# Exsample: (PHP 7.4)

# 7.4以降は末尾のdirがない
docker-php-ext-configure --with-freetype=/usr/include/
```

## Available by default

・PHP

・MySQL

・PHP My Admin
