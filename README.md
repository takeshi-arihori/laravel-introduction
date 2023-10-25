# PHP フレームワーク Laravel 入門 第 2 版 練習問題

# laravel-introduction

## docker にアクセスして MySQL を起動する

```
docker exec -it MySQLコンテナのID mysql -u sail -p
```

### ChatGPT プロンプト 1

```
# Laravelを使用した開発を行っています。開発環境及び必要事項を読み込んだ後、以下の内容に遵守して問題を解決して下さい。

## 開発環境

Laravel Sail にて環境構築を行っています。

Laravel 10.28.0
docker 20.10.22
docker-compose v2.15.1
PHP 8.2.11
phpMyAdmin 5.2.1 (最新版)
node v18.18.2
```

### ChatGPT プロンプト 2

```

# 以下の内容に遵守して問題を解決して下さい。

## 問題

## 試したこと

## エラー文など

```

### ファイルが重複している場合や、特定のコミットに戻る際にファイルが削除されない

1. まず、現在のワーキングツリーの変更を全て破棄します。

```
git clean -fd
```

-f は強制的にファイルを削除するためのオプションで、-d はディレクトリも削除するためのオプションです。

2. 現在のワーキングツリーとインデックスの変更を破棄し、最後のコミットの状態に戻します。

```
git reset --hard
```

3. その後、目的のコミットに戻ることができます。

```
git checkout [コミットハッシュ]
```

この手順で、重複しているファイルや不要なファイルを削除し、特定のコミットの状態に戻ることができます。ただし、git clean や git reset --hard は取り消し不可能な操作なので、慎重に行ってください。
