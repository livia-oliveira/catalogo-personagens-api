# 📚 Catálogo de Personagens

Projeto pessoal para listar e gerenciar personagens favoritos de forma organizada.  
Idealizado como um exercício prático de desenvolvimento backend com Laravel.

---

## ✨ Funcionalidades
Este projeto é uma aplicação backend desenvolvida com Laravel que permite:

✅ Cadastro de usuários e autenticação via token  
✅ Criar, listar, atualizar e deletar personagens  
✅ Listar apenas os personagens do usuário autenticado  

Ideal para praticar conceitos de API REST, autenticação com Sanctum e relacionamento entre modelos!
---

## 🛠️ Tecnologias

- PHP ^8.2  
- Laravel ^12.x  
- SQLite (para desenvolvimento local)  
- Postman (para testar endpoints)  
- Git & GitHub

---

## ⚙️ Como rodar o projeto localmente

1. Clone o repositório:
```bash
git clone https://github.com/seu-usuario/catalogo-personagens.git
 
````
2. Instale as dependências:
```bash
composer install
 
````
3. Crie o banco e rode as migrations:
```bash
php artisan migrate
 
````
4. Rode o servidor local:
```bash
php artisan migrate
 
````

## 🔐 Autenticação
A autenticação usa Laravel Sanctum. Após login, é necessário enviar o token nos headers das requisições protegidas.

---

## 📚 Rotas da API
### 🧑 Usuário

| Método | Rota          | Descrição                          |
|--------|---------------|------------------------------------|
| POST   | /api/register | Registrar um novo usuário          |
| POST   | /api/login    | Realizar login                     |
| POST   | /api/logout   | Realizar logout                    |
| GET    | /api/user     | Obter dados do usuário autenticado |

---

### 🧙 Personagens

| Método | Rota                  | Descrição                                    |
|--------|-----------------------|----------------------------------------------|
| GET    | /api/personagens      | Listar todos os personagens                  |
| POST   | /api/personagens      | Criar um novo personagem                     |
| GET    | /api/personagens/{personagem} | Exibir um personagem específico              |
| PUT    | /api/personagens/{personagem} | Atualizar um personagem                      |
| DELETE | /api/personagens/{personagem} | Deletar um personagem                        |
| GET    | /api/meus-personagens | Listar apenas os personagens do usuário logado |

---

## 💡 Aprendizados
- Laravel Sanctum para autenticação via token

- Relacionamentos entre usuários e personagens

- Validação com Form Requests

- Boas práticas de versionamento com Git

- Criação de APIs RESTful com Laravel

---

## 🖊️ Autora
Lívia Oliveira
[GitHub](https://github.com/livia-oliveira)


---


## 📄 Licença
Este projeto está sob a licença MIT.




