# Taido Project Theme

Taido Project 用の WordPress テーマです。

## 必要要件

- Node.js (gulp ビルド用)
- PHP + Composer (PHPCS 用)

## インストール

```bash
npm install
composer install
```

## CSS ビルド

SCSS のソースは `src/scss/` にあります。コンパイルと minify 済みの CSS は sourcemaps 付きで `css/style.css` に出力されます。

```bash
npx gulp build
```

## 監視

```bash
npx gulp watch
```

## Lint (PHPCS)

このリポジトリには Composer 経由で WordPress Coding Standards が含まれています。PHPCS は vendor 配下から実行できます。

```bash
./vendor/bin/phpcs
```

## 構成

- `src/scss/` - SCSS ソース
- `css/` - コンパイル済み CSS 出力
- `templates/` - テーマテンプレート
- `includes/` - パーシャルとインクルード

## 備考

- テーマのメタ情報は `style.css` に定義されています。
