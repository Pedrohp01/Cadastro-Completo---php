
# 📋 Sistema de Cadastro Completo (HTML + PHP + MySQL)

## ✅ Descrição

Este é um sistema de cadastro simples desenvolvido com **HTML** para as interfaces e **PHP** para a lógica de backend. Ele permite as seguintes operações básicas em um banco de dados MySQL:  
- **Cadastrar**  
- **Pesquisar**  
- **Alterar**  
- **Deletar**

## 🚀 Funcionalidades

✅ Tela inicial de navegação  
✅ Cadastro de novos registros  
✅ Pesquisa de registros  
✅ Alteração de registros por ID  
✅ Exclusão de registros por ID  
✅ Estrutura visual simples, moderna e responsiva  

## 🛠️ Tecnologias Utilizadas

- HTML5  
- CSS3 (embutido)  
- PHP 7+  
- MySQL ou MariaDB  

## 📁 Estrutura de Arquivos

```
├── alterar.html
├── alteraregistro.php
├── bancodedados.php
├── cadastrar.html
├── deletar.html
├── deletarregistro.php
├── index.html
├── pesquisar.html
├── retornacadastro.php
├── retornadeletarpeloid.php
├── retornapesquisapelacidade.php
├── retornapesquisapelaidade.php
├── retornapesquisapelonome.php
├── retornaalterarpeloid.php
├── retornatodos.php
```

## ⚙️ Como Funciona?

1. O **usuário acessa o `index.html`** e escolhe a operação desejada.
2. Preenche os formulários das páginas correspondentes (`cadastrar.html`, `alterar.html`, etc).
3. Os dados são enviados para os **scripts PHP**, que se conectam ao banco de dados via `bancodedados.php` e executam a operação.
4. O PHP retorna uma mensagem de sucesso ou erro.

## 📝 Configuração do Banco de Dados

1. Crie um banco de dados no MySQL, exemplo: `cadastro_db`
2. Crie uma tabela, exemplo:

```sql
CREATE TABLE pessoas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    idade INT,
    email VARCHAR(100)
);
```

3. Configure o arquivo `bancodedados.php` com suas credenciais de acesso ao MySQL:

```php
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "cadastro_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
```

## 🖥️ Como Executar?

1. Coloque todos os arquivos em uma pasta dentro do **servidor local** (ex: `htdocs` no XAMPP ou `www` no WAMP).
2. Execute o **servidor Apache e MySQL**.
3. Acesse pelo navegador:  
`http://localhost/nome-da-pasta/index.html`

## ❗ Atenção

- As páginas HTML enviam dados para scripts PHP via **POST** ou **GET**, dependendo da operação.  
- Este projeto é **didático**, ideal para aprender CRUD com PHP e MySQL.  
- Para **produção**, recomenda-se usar validação avançada, prepared statements e frameworks.  

## 🎨 Melhorias Futuras

- Criar `style.css` externo para centralizar o design  
- Utilizar PDO ou MySQLi com **prepared statements**  
- Adicionar mensagens de sucesso/erro diretamente nas páginas HTML  
- Melhorar a responsividade com **media queries**  


## ❤️ Licença

Este projeto está licenciado sob a **MIT License** - sinta-se livre para usar e modificar!  
