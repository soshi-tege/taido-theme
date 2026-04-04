
# Taido Project テーマ

Arc & Beyond社 Taido Project 専用のWordPressテーマです。

## 必要環境

- Node.js（Gulpによるビルド用）
- PHP + Composer（PHPCSによるコードチェック用）

## インストール手順

```bash
npm install
composer install
```

## 主な機能

- SCSS（`src/scss/`）からCSS（`css/style.css`）への自動コンパイル・圧縮・ソースマップ生成
- 画像（`src/images/`）の自動圧縮・最適化
- PHP/HTML/SCSS/画像の変更監視と自動ビルド・ブラウザリロード
- WordPress Coding Standards（PHPCS）によるコード品質チェック

## 主なコマンド

### CSS/画像ビルド

```bash
npx gulp build
```

### 監視・自動リロード

```bash
npx gulp watch
```

### コードチェック（Lint）

```bash
./vendor/bin/phpcs
```

## ディレクトリ構成

- `src/scss/`：SCSSソース
- `css/`：ビルド済みCSS
- `src/images/`：画像ソース
- `images/`：圧縮済み画像
- `includes/`：パーシャル・インクルード
- `vendor/`：Composer依存パッケージ

## 備考

- テーマの詳細情報は `style.css` に記載
- `.env` の `LOCAL_URL` を設定することで、ローカル環境での自動リロードが有効化されます
