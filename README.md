
# Taido Project テーマ

Arc & Beyond社 Taido Project 専用のWordPressテーマです。

## 必要環境

- Node.js（Gulpによるビルド用）
- PHP + Composer（PHPCSによるコードチェック用）

## テーマの編集手順（開発者用）

1. [GitHub リポジトリ](https://github.com/soshi-tege/taido-theme) からリポジトリを取得し、作業用ブランチを作成します。（重要：mainブランチへの直接の git push はブロックされます）
2. ローカル環境で「Taido Project」テーマを有効化します。
3. 任意のエディターで該当ファイルを編集します。
4. フロントページや投稿ページを開き、表示崩れがないことを確認します。
5. 変更内容を git push して Pull Request を作成し、テーマ管理者（@soshi-tege）をメンションします。

## 開発依存パッケージのインストール

```bash
npm install
composer install
```

## 更新手順（本番環境）

1. WordPress管理画面の「外観 > テーマ」で、現在のバージョンを確認します。
2. 管理者メニューの「Deployer for Git」を開きます。
3. 「Update Theme」をクリックして更新を実行します。
4. 更新後に再度「外観 > テーマ」を開き、バージョンが更新されていることを確認します。

## 主な機能

- SCSS（`src/scss/`）からCSS（`css/style.css`）への自動コンパイル・圧縮・ソースマップ生成
- 画像（`src/images/`）の自動圧縮・最適化
- PHP/HTML/SCSS/画像の変更監視と自動ビルド・ブラウザリロード
- WordPress Coding Standards（PHPCS）によるコード品質チェック

## 主なコマンド

### CSS/画像ビルド

```bash
npx gulp
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
- `.env` の `LOCAL_URL` を設定することで、ローカル環境での自動リロードが有効化されます（ファイルを保存する度に更新され、複数画面での開発において便利です）
