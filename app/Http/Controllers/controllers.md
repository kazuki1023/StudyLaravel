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

