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


