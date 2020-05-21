### [3.2 ミドルウェアスタックを設定する | Rails guide](https://railsguides.jp/rails_on_rack.html#%E3%83%9F%E3%83%89%E3%83%AB%E3%82%A6%E3%82%A7%E3%82%A2%E3%82%B9%E3%82%BF%E3%83%83%E3%82%AF%E3%82%92%E8%A8%AD%E5%AE%9A%E3%81%99%E3%82%8B)
  ~~~ruby
  ### 3000番ポートへのアクセスを許可する
  class Application < Rails::Application
    config.load_defaults 5.1

    config.api_only = true
    config.middleware.insert_before 0, Rack::Cors do
      allow do
        origins 'http://localhost:3000'
        resource '*',
        :headers => :any,
        :methods => [:get, :post, :patch, :delete, :options]
      end
    end
  end
  ~~~