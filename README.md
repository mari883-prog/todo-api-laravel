# ToDo API（Laravel）

## 概要
LaravelとSQLiteを用いて作成したシンプルなToDo管理APIです。  
バックエンド開発の基礎理解を目的に作成しました。

## 使用技術
- PHP（Laravel）
- SQLite

## 主な機能
- タスクの作成（Create）
- タスクの一覧取得（Read）
- タスクの更新（Update）
- タスクの削除（Delete）

## API例
- GET /api/tasks ：タスク一覧取得
- POST /api/tasks ：タスク作成
- PUT /api/tasks/{id} ：タスク更新
- DELETE /api/tasks/{id} ：タスク削除

## 工夫した点
- MVCアーキテクチャを意識し、Controller・Modelの責務を分離しました
- コードの可読性と拡張性を意識した設計を行いました
- 開発中に発生した設計上の課題について、公式ドキュメントやAIを活用しながら改善を行いました

## 今後の改善
- 認証機能の追加
- バリデーションの強化
- パフォーマンス改善

## 実行方法
1. composer install
2. cp .env.example .env
3. php artisan migrate
4. php artisan serve