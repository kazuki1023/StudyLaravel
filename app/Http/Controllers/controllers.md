## memo

### MVCモデルについて
![MVCモデル](https://cbc-study.com/files/images/performance/laravel/12.gif)

- 参考サイト一覧
- [#6 Laravelの仕組み〜MVCの理解〜](https://cbc-study.com/training/backend/laravel3)

- [Laravelの構造と処理の流れを【MVCモデル】で初心者向けに解説【model,view,controller】](https://hikopro.com/laravel-mvc/)


### アクション
- コントローラーに用意される処理のこと。
- メゾットの形で用意される。
- 複数用意可能。
- returnでhtmlのソースコードを返す。
- - この内容が、アクセスしたwebブラウザへ返され、それが表示されることになる。

#### アクション、コントローラーを利用するためには...
- アクションにルートを割り当てる設定が必要。
- Route::getの第二引数に **呼び出すコントローラーとアクション** を指定。
- - コントロール名＠アクション名

### 値をテンプレートに渡す。
#### コントローラー→テンプレートに、必要な変数などの値を受け渡す必要あり。

#### テンプレートへの値の受け渡し
- indexアクションのviewメゾットを呼び出すときに、必要な値をテンプレート側にわたす
- view関数の第二引数に配列が渡される。
- 配列なので、いくつでも渡せる。

### バリデーションの基本処理
- '設定するフォームの項目名' => 'ルールの指定'
```console
$validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150'
        ];
```
- name
  - nameという項目にrequiredというルールを設定。
```console
'name' => 'required',
```
- age
  - numeric(数値である)かつbetween:0,150で0~150の間の数字って指定する。
```console
'mail' => 'email',
```

### バリデーションのルール詳細
- 網羅的に書いてあるので、辞書として使えそう
[バリデーションルールのまとめ](https://www.wakuwakubank.com/posts/376-laravel-validation/)
[Laravelのバリデーションで指定できる内容をざっくりまとめ直しました。](https://qiita.com/fagai/items/9904409d3703ef6f79a2)


### バリデータ
- Requestインスタンスと検証ルールの引数を渡すことで自動的にフォームの値をチェック
- 問題があれば、getのページにリダイレクトして、フォームの再表示を行う。

- しかし下の時使えない。
  - エラーの時、リダイレクトせず、別の処理をしたい、
  - フォーム以外で使いたい。

- この時使えるのが、バリデータ
### バリデータ
- validatorクラスをインスタンス化して使用。
- validateメソッドを呼びdさず、このvalidatorクラスのインスタンスを作成、しょりでバリデーションの処理をカスタマイズできる。
- 参考サイト
[Laravel 9.x バリデーション](https://readouble.com/laravel/9.x/ja/validation.html)

- 使い方
  - Validatorインスタンスをmakeというメソッドを使って作成する必要あり。
  - 第一引数はチェックする値をまとめた配列
  - 第二引数が使用する検証ルールの情報をまとめたものが指定。
```console
Validator::make($request->all(), [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ]);
```
- あとはエラーが起きたときの処理
``` console
        if ($validator ->fails()) {
            エラー時の処理
        }
```

- エラーが発生したときのリダイレクト
``` console
    <!-- 指定のアドレスにリダイレクト  -->
    return redirect('/hello')
    <!-- エラーメッセージの表示。引数にValidatorインスタンスを入れることでエラーメッセージをリダイレクト先に渡す -->
    ->withErrors($validator)
    <!-- 送信されたフォームの値をそのまま引き継ぐ -->
    ->withInput(); 

```