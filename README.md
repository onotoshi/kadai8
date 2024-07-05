①課題番号-プロダクト名
課題番号: PHP_01 - フードシェアリング掲示板

②課題内容（どんな作品か）
フードシェアリング掲示板は、ユーザーが余った食材や料理を共有し、他の人と分け合うためのオンラインプラットフォームです。このアプリケーションを通じて、食材の無駄を減らし、コミュニティ内でのリソース共有を促進します。

③DEMO アプリケーションのデモンストレーション手順：
トップページ (index.php) を開く:

ユーザーは、名前、メールアドレス、内容、そして写真を入力するフォームが表示されます。
必要な情報を入力し、「投稿する」ボタンをクリックします。
データ登録処理 (insert.php):

入力された情報がデータベースに保存されます。
写真がアップロードされている場合、指定されたディレクトリに保存されます。
投稿が完了すると、トップページにリダイレクトされます。
掲示板一覧 (select.php) を確認:

登録されたデータが一覧表示されます。
各投稿には、名前、メールアドレス、内容、投稿日時、そして写真が含まれます。
④作ったアプリケーション用のIDまたはPasswordがある場合
ID: なし
PW: なし

⑤工夫した点・こだわった点
リアルタイムでのデータ登録:
投稿されたデータがすぐにデータベースに反映され、掲示板に表示されます。
デザイン:
LINEのようなシンプルで使いやすいインターフェースを目指しました。
CSSを使って、背景色やボタンのデザインにこだわり、視覚的に見やすくしました。
⑥難しかった点・次回トライしたいこと(又は機能)
難しかった点:

さくらインターネットのサーバーへの接続設定に苦労しました。特に、データベースのホスト名やユーザー名、パスワードの設定に時間がかかりました。
画像のアップロード処理と、そのファイルパスをデータベースに保存する処理の実装が難しかったです。
次回トライしたいこと:

フォームから投稿されたデータのバリデーションを強化し、入力ミスを防ぐ機能を追加したいです。
地図機能を追加して、投稿された食材の場所を表示し、受け取りやすさを向上させることを検討しています。
⑦質問・疑問・感想、シェアしたいこと等なんでも
質問: データベース接続の際に、ホスト名の指定が非常に重要だと感じました。サーバー環境に依存する部分が多いですが、より汎用的に設定できる方法はありますか？
感想: PHPを使ったウェブアプリケーション開発の学習が進み、実際に動くプロダクトを作成することができて非常に満足しています。特に、さくらインターネットのサーバーへのデプロイ経験が得られたことが大きな収穫でした。
