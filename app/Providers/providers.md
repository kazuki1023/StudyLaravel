## memo

### サービスプロバイダー
[Laravelサービスプロバイダーついに理解](https://reffect.co.jp/laravel/laravel-service-provider-understand)

```
public function boot(): void
    {
        $validator = $this->app['validator'];
        $validator->resolver(function($translator, $data, $rules, $message) {
            return new HelloValidator($translator, $data, $rules, $message);
        });
    }
```
- バリデータは、$this->app['validator'];に保存サれてる。
- resolveメソッドで、バリデーションの処理を実装できる。
- Validatorのインスタンスをreturn