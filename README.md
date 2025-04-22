```markdown
# 🔮 Consulta de Signo Zodiacal

Projeto desenvolvido como parte da disciplina **Programação Web**, com o objetivo de criar uma aplicação front-end em PHP que identifica o **signo zodiáco** de um usuário com base na sua **data de nascimento**.

---

## 📸 Prévia

![Preview](assets/imgs/preview.jpg)

---

## 🧱 Estrutura do Projeto

```
signos/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── imgs/
│   │   └── estrelado.jpg
├── layouts/
│   └── header.php
├── index.php
├── show_zodiac_sign.php
└── signos.xml
```

---

## 🚀 Funcionalidades

- Formulário com campo de data e ícone de calendário
- Página de resultado com nome e descrição do signo
- Lógica em PHP que interpreta a data e compara com ranges do XML
- Interface estilizada com **Bootstrap 5** e fundo estrelado (estilo glassmorphism)
- Arquivo `signos.xml` com os 12 signos zodiacais e suas respectivas datas e descrições

---

## 💻 Requisitos

- PHP ≥ 7.4
- [XAMPP](https://www.apachefriends.org/index.html) ou servidor local equivalente
- Navegador moderno
- Editor de código (recomendado: PHPStorm ou VSCode)

---

## 🛠️ Como rodar localmente

1. Instale o XAMPP
2. Copie o projeto para:
   ```
C:\xampp\htdocs\Projects\signos
   ```
3. Inicie o Apache pelo XAMPP
4. Acesse no navegador:
   ```
http://localhost/Projects/signos
   ```

---

## 🧠 Como funciona

- O usuário insere sua data de nascimento
- O PHP formata essa data no padrão `d/m`
- O arquivo `signos.xml` é carregado e percorrido
- A lógica compara se a data se encaixa no intervalo de um dos signos
- O signo correspondente é exibido

---

## 📄 Licença

MIT License © 2025

---

## 👨‍🏫 Créditos

Desenvolvido por João Victor Santos da Costa] para a disciplina **Programação Web - UNOPAR**   
```