## Módulo 6 - Front Básico

O laravel por padrão usa o template engine *Blade* para a renderização dinâmica no frontend. O blade consegue manipular dados vindos do backend, acessar helpers da framework e utiliza diretivas para realização de logicas.

Podemos criar nossas próprias diretivas, no arquivo *app/Providers/AppServiceProvider.php* no método *boot()* basta usar a facade  *Blade::directive.*

- {{ }} - Presenta informações do backend no front, realizando um tratamento para limpar html e js.
- {!! !!} - Presenta informações do backend no front, não realiza tratamento de dados.
- {{ Js::from(*$user*) }} - Passar dados direto para o javascript.
- @if - Diretivas de controle na blade
- @unless - É o contrario do if.
- @isset - Valida se um atributo está setado.
- @empty - Verifica se está vazio.
- @auth - Valida se o usuario está logado.
- @guest - Valida usuarios não logados.
- @production - Valida se o servidor está em módo produção.
- @env - Valida em qual ambiente o servidor está rodando.
- @switch - Escolha entre alguma das opções
    - @case - opção
    - @break - fim da opção
    - @default - opcão padrão
- @for - Loop
- @foreach - Loop
    - $loop→first - Primeiro elemento da iteração
    - $loop→last - Ultimo elemento da iteração
    - $loop→index - Index atual
    - $loop→remaining - Quantas iterações faltam.
    - $loop→even - Iteração par.
    - $loop→odd - Iteração impar.
    - $loop→iteration - Iteração atual.
    - $loop→parent - Variavel loop do foreach mais esterno.
    - $loop→depth - Nivel do loop em caso de loops aninhados.
    - $loop→count -  Total de itens no array que está sendo iterado.
- @while - Loop
- @class - Permite passar uma lista de classes css para um html.
- @style - Permite passar uma lista de estilos diretamente para o html
- @checked - Valida se o html será checked ou não.
- @selected - Usado no select html para dizer qual item está selecionado.
- @disable - Desabilitar um elemento html
- @readonly - Um elemento html será somente leitura.
- @required - Um atributo do html é obrigatório.
- @error - Usando para mostrar mensagens de error nas views.

### Herança de templates

Podemos criar um layout base para o projeto e através da herança de template podemos 

- @yield - Gera uma section no template, renderizando um conteúdo dinâmico.
- @extends - Faz a herança com outro template.
- @section - Conteúdo do template filho que será renderizado no componente pai.
- @sectionMissing - Verifica se existe uma view estendendo um section específica.
- @hasSection - Verifica se existe uma view estendendo um section específica.
- @include - Inclui “manualmente” um pagina. Existem variações do include para vários tipos de validação.
- @stack -
- @pushonce -
- @prependonce -

### Blade components

No laravel podem criar 2 tipos de componentes, class components ou anonymous components. Todos os componentes seram chamados atraves de uma tag no formato <x-name_component />

- Quem renderiza o componente é a classe associada.
- Variavies publicas criadas na classe, ficam disponiveis na view.
- Ao passar um atributo para o HTML esse será passado para a classe via construtor.
- Os componentes possuem um atributo especial chamado $attributes que possuem algums métodos, como o class() e merge()
- @aware - é utilizada para pegar um atributo do componente pai.
- {{ $slot }} - É utilizada para incluir dentro do componente um novo elemento HTML ou outro componente.
- Podemos usar slots nomeados {{ $icon }}, para passar o conteúdo é necessário usar a tag          <x-slot:icon></x-slot:icon>
- No método render() podemos retornar uma clouser que recebe um array. Esse array contem todo o que está sendo passado para a classe do componente. Dessa forma temos acesso as informações.

### Compilando assets

- instalar dependencias js
- O arquivo vite.config.js indica quais pastar o vite ira compilar.
- Podemos utilizar a facade Vite para acessar imagens, css e js dentro da pasta resource.
- Também podemos criar uma macro que facilite a utilização da facede vite.

### Tailwind CSS

No laravel 11 o tailwind css já vem por padrão, em outras versões do laravel basta seguir a documentação do tailwind. O arquivo *tailwind.config.js* é responsavel por configurar o tailwind, indicando em quais tipos de arquivos ele deve ser executado, também podemos criar nossas configurações de css.

### AlpineJS

Instalar e adicionar a chamada do alpine no arquivo *resources/js/app.js*