# Laravel APIサンプル

---

## 環境

- PHP 8.1
- Laravel 9.19
- MySQL
- Docker

## 開発環境セットアップ

1. `cd laravel-api-sample`
2. `docker run --rm -u "$(id -u):$(id -g)" -v $(pwd):/var/www/html -w /var/www/html laravelsail/php81-composer:latest composer install` を実行
3. `.env.example` を `.env` として複製
4. `vendor/bin/sail up -d` を実行しコンテナ起動
5. `vendor/bin/sail php artisan key:generate` を実行
6. `vendor/bin/sail artisan migrate` を実行しテーブル作成
7. `vendor/bin/sail artisan db:seed --class=ShopSeeder` を実行しサンプルデータを生成
7. `vendor/bin/sail artisan scribe:generate` を実行しAPI仕様書を生成
8. ブラウザから `http://localhost/docs` にアクセスし動作確認