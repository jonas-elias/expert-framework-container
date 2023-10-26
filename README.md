# Expert Framework Container

O **Expert Framework Container** é um pacote PHP que fornece uma implementação simples de um contêiner de inversão de controle (IoC) para gerenciar a criação e resolução de instâncias de classes em suas aplicações.

Componente pertencente ao framework *Jonaselias\ExpertFramework* https://github.com/jonas-elias/mercado-software-expert

## Instalação 🚀

Para começar a usar o Pacote Expert Framework Container, você pode instalá-lo facilmente via Composer. Basta executar o seguinte comando:

```bash
composer require expert-framework/container
```

## Uso ✅
O Container oferece uma maneira conveniente de criar e gerenciar instâncias de classes. Você pode registrar instâncias no contêiner e, em seguida, recuperá-las quando necessário. Aqui está um exemplo de como usar o Container:

```php
use ExpertFramework\Container\Container;

$controller = Container::get('App\Api\Controllers\ProdutoController');
```

## Dúvidas 🤔
Caso exista alguma dúvida sobre como instalar, utilizar ou gerenciar o projeto, entre em contato com o email: jonasdasilvaelias@gmail.com

Um grande abraço!
