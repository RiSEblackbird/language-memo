## 公式ガイド(https://ja.reactjs.org/)
## 現代の JavaScript チュートリアル(https://ja.javascript.info/)
## MDN Web Docs / JavaScript (https://developer.mozilla.org/ja/docs/Web/JavaScript)

### [JSXの導入](https://ja.reactjs.org/docs/introducing-jsx.html)

### [ReactDOM](https://ja.reactjs.org/docs/react-dom.html)
  - DOM の紹介(https://developer.mozilla.org/ja/docs/Web/API/Document_Object_Model/Introduction)
    - 主要なAPIが列挙されている。
  - DOM(Document Object Model)
    - インターフェースは無意識的に使用されていることが多い。(HTMLTableElementなど)
### [constructor()](https://ja.reactjs.org/docs/react-component.html#constructor)
- React jsの「マウント」とは何ですか？([https://www.it-swarm.dev/ja/javascript/・・・](https://www.it-swarm.dev/ja/javascript/react-js%E3%81%AE%E3%80%8C%E3%83%9E%E3%82%A6%E3%83%B3%E3%83%88%E3%80%8D%E3%81%A8%E3%81%AF%E4%BD%95%E3%81%A7%E3%81%99%E3%81%8B%EF%BC%9F/1054754698/))

### [コンポーネントと props](https://ja.reactjs.org/docs/components-and-props.html)

### [this](https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Operators/this)
呼び出しの条件によって意味が変わる。呼び出し元に注意して扱う。
  - Global object (グローバルオブジェクト)
  - https://developer.mozilla.org/ja/docs/Glossary/Global_object
  - グローバルスコープ上に常に存在するオブジェクト
- [JavaScriptの「this」は「4種類」？？ | Qiita](https://qiita.com/takeharu/items/9935ce476a17d6258e27)

### [export default](https://ja.javascript.info/import-export#ref-535)
インポート先で波括弧なしに呼び出せるようになる。

### [extends](https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Classes/extends)
子クラスの定義  
ex. ```class Small extends Big {}``` だと、'Small'を'Big'の子クラスとして作成する。

### [.findIndex()](https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Array/findIndex)
~~~js
deleateProduct = (id) => {
    axios.delete(`http://localhost:3001/products/${id}`)
    .then((response) => {
      const productIndex = this.state.products.findIndex(x => x.id === id)
      // この、状態の、"products"テーブルの、{ id }番目のもの。
      const deletedProducts = update(this.state.products, {$splice: [[productIndex, 1]]})
      this.setState({products: deletedProducts})
      console.log('set')
    })
    .catch((data) =>{
      console.log(data)
    })
  }
~~~
