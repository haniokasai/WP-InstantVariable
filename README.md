# WP-InstantVariable
WordPressで設定画面に変数欄を追加できます

#Todo
- 設定画面に　|変数名|カテゴリ名|デフォルト値|値（オプション)|説明（オプション)|値の種類（オプション)| を追加
- 任意の値をプラグイン側でfuncを呼び出すことで追加可能:ivar_add("foo","なんとか","デフォルト値")、ivar_del("foo")(存在すればtrue,なければfalse)
- phpで値で名前によって呼び出すことが可:ivar("foo");
- プレビュー画面にある設定にも追加可能ivar_padd("foo") ivar_pdel("foo")
- カスタムコードで記事内でも呼び出し可能
