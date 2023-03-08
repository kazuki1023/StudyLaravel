## memo

### @extend
- レイアウトファイルをアップデートし、親レイアウトとして継承する。

### @section
1. @section(当てはめるセクション名, そこに表示する値)
2. @endsectionをしようしたもの

### slot
- {{ }}で指定された変数に値を設定するためのもの。

### サブビュー
- [コンポーネントとサブビューの違い](https://hara-chan.com/it/programming/laravel-view-blade-component-subview/)
- 純粋に、他のビューを今のビューの一部として取り入れる。
- slotは使えない。
  - 代わりに、includeを使う。
  - ### include
    - @include (テンプレート名, [値の変数])