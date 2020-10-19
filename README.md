# language-memo

## 情報サイト

### Code Tips || Tutorial

- [Zenn｜プログラマーのための情報共有コミュニティ](https://zenn.dev/)

- [Learn to code at home | freeCodeCamp.org](https://www.freecodecamp.org/)

- [W3Schools Online Web Tutorials](https://www.w3schools.com/)

### IT総合.1(ネタは広いがTips寄り)

- [Qiita](https://qiita.com/)
- [DEV Community 👩‍💻👨‍💻](https://dev.to/)

### IT総合.2(ガジェットや歴史など広範囲)

- [How-To Geek - We Explain Technology](https://www.howtogeek.com/)

### 動画資料

- [オンラインコース - いろんなことを、あなたのペースで | Udemy](https://www.udemy.com/)

## 運用方針 2020.10~

参考リンク先を集約する。  
各リポジトリに参考先のリンクは掲載しているが、それぞれを見に行くのは億劫なので当リポジトリをハブとして各サイトや自分のリポジトリへ飛べるようにする。

### 基本階層

サンプルコードや画像を保存することを考慮して、メモは各階のREADME.mdにまとめる

~~~
Top
├── README.MD         // 総合的な情報サイトのリンク
└── {Language}        // 言語単位のフォルダ
    ├── README.MD               // 言語の公式リファレンス、特化型の記事サイトなど
    └── {Flamework / Library}   // その言語向けのフレームワークやライブラリのフォルダ
        ├── README.MD           // ツールの公式リファレンス、特化型の記事サイトなど
        └── {Library / Tip}     // FWやツール向けのライブラリや構成する技術要素
            └── README.MD       // ライブラリや技術要素の公式ドキュメントや参考記事など

├── │ └──
~~~

## 旧README(~2020.07)

用語を調べたりしても、リポジトリ毎にメモすると埋もれてしまうので、このリポジトリのメモに集約する。  

- ここで言う用語は、言語やフレームワークについて学習中に調べたWebの基礎用語などの関連事項も含む。  
  - 例えば、'DOM'はReactの専門語では無いが、Reactについて学習中に遭遇したら ~~"React用語.md"に~~ メモする。  
  - **初学の時点で遭遇する用語は、そのカテゴリで再び遭遇することが多い。**  
  - ~~jsの'this'についてもReact学習中に遭遇したらまず"React用語.md"にメモして、別の機会にJavaScript自体を学習中に'this'が理解できていないことがあれば"JavaScript用語.md"に同様にメモする。このように~~**メモファイル間での記載の重複は気にしないことにする。**
