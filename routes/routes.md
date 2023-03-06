## memo 

### ルーティングとは
#### 特定のアドレスにアクセスすると、そのアドレスに割り当てられたプログラムが実行される。

### routesフォルダ
#### webページに公開するものはすべてweb.phpにルート情報を記述する。

### view関数
#### 指定されたテンプレートファイルをロード→レンダリングして返す働きをする。

### HTML出力方法
- get関数の第二引数にreturnでHTMLのソースコードを直接返す。
- ヒアドキュメント
- - <<<演算子を使って、リスト内に直接記入されたテキストをまとめて変数に代入するもの。

### アクションにルートを割り当てるやり方
（ **本のだとできない** ）
1. 全部書く
- Route::get('hello', 'App\Http\Controllers\HelloController@index');

2. useでコントローラーをwen.phpにインポート
- web.php参照

[参考サイト](tairaengineer-note.com/laravel-error-target-class-does-not-exist/)

### アクションとアドレスの関係
- ex) http://アプリケーションのアドレス/コントローラー/アクション