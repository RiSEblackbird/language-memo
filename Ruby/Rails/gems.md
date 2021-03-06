## [Shrine](https://github.com/shrinerb/shrine)

- Ruby製のアプリケーションに画像アップロード機能を提供する。
- Getting Started · Shrine
  https://shrinerb.com/docs/getting-started

## [rack-cors](https://github.com/cyu/rack-cors)

- [rack-corsでCORS設定をする | Hatena](https://techblog.lclco.com/entry/2018/09/30/200122) :: gem製作者様の使用法解説
- [Ruby on Rails+ReactでCRUDを実装してみた | Qiita](https://qiita.com/yoshimo123/items/9aa8dae1d40d523d7e5d) :: この記事を閲覧しているときに遭遇。
- [これだけでイイ、Rails5でAPIサーバを作るときのCORS設定 | Qiita](https://qiita.com/IzumiSy/items/c10949e9a00d1c61613c)
  - アクセスを許可するドメインを制限したい場合に便利っぽい？？？
- [オリジン間リソース共有 (CORS) | MDN](https://developer.mozilla.org/ja/docs/Web/HTTP/CORS)
  - [Origin (オリジン) | MDN](https://developer.mozilla.org/ja/docs/Glossary/Origin)
    - プロトコル、ホスト、ポートによって定義され、それらが全て一致する場合のみ同一のオリジンであると言うことができる。
    - 同じオリジンのコンテンツに操作を限定する場合も、CORSを使用する事でオリジン間でのHTTPリクエストを実行することができる？？？  
    - つまり、Railsでは、ページでの操作でJsonを生成してバックエンドと通信してページを更新するような動作がオリジン間でのHTTPリクエストの成立に当たるのだろうか？？？
- [JSONPは危険なので禁止 | yohgaki's blog ](https://blog.ohgaki.net/stop-using-jsonp)
  - gemの説明でJSNOPを使用しないことが述べられているが、当記事のようにJSNOPはセキュリティ上使用しない方が良いと言う趣旨のものが複数目立つ。
    - [クロスサイトスクリプティング（XSS）のセキュリティ対策とは？](https://www.shadan-kun.com/blog/measure/1052/)
