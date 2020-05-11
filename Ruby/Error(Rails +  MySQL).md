### [【Rails】MySQL2がbundle installできない時の対応方法 | Qiita](https://qiita.com/fukuda_fu/items/463a39406ce713396403#3-%E3%82%A8%E3%83%A9%E3%83%BC%E5%86%85%E5%AE%B9%E3%82%B0%E3%82%B0%E3%82%8B) :: rails newの時点で発生。記事を参考にして同様に解決
  自分の場合は、  
  ```
  $ brew info openssl
  ↓が出てくる
  For compilers to find openssl@1.1 you may need to set:
    export LDFLAGS="-L/usr/local/opt/openssl@1.1/lib"
    export CPPFLAGS="-I/usr/local/opt/openssl@1.1/include”
  $ bundle config --local build.mysql2 "--with-cppflags=-I/usr/local/opt/openssl@1.1/include"
  $ bundle config --local build.mysql2 "--with-ldflags=-L/usr/local/opt/openssl@1.1/lib"
  ```
