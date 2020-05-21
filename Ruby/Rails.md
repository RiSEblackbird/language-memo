### [rack/utils.rb at master · rack/rack · GitHub](https://github.com/rack/rack/blob/master/lib/rack/utils.rb)
  - HTTPステータスについて、Rails内でシンボルで表現する記述についての説明。
    ```200 => 'OK', 404 => 'Not Found', 422 => 'Unprocessable Entity', ...```

  - 参考：[RailsのHTTPステータスのシンボル表現まとめ | blog.toshimaru.net](https://blog.toshimaru.net/rails-http-status-symbols/)
    ~~~ruby
    # Rails apiでのコントローラーにおける用例
    def destroy
      @hoge = Hoge.find(params[:id])
      if @hoge.destroy
        head :no_content, status: :ok
      else
        render json: @hoge.errors, status: :unprocessable_entity
      end
    end
    ~~~
