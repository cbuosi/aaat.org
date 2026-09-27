![AAAT](https://raw.githubusercontent.com/cbuosi/aaat.org/refs/heads/main/img/quem-somos4.png)

# Associação Antialcoólica de Taquaritinga (AAAT)

Site institucional da Associação Antialcoólica de Taquaritinga, desenvolvido com foco em acolhimento, acessibilidade, transparência e divulgação das atividades da entidade.

No ar em **https://aaat.org.br**

---

## Sobre a Associação

A Associação Antialcoólica de Taquaritinga é uma entidade sem fins lucrativos fundada em 05 de setembro de 1982.

Há mais de 40 anos, atua no acolhimento e apoio a pessoas e famílias afetadas pelo alcoolismo e outras drogas, promovendo reuniões semanais, orientação, fortalecimento familiar e ações de conscientização.

> “Em cada cálice de álcool há lágrimas de mães, esposas e filhos.”

---

## Objetivos

- Apoiar pessoas em recuperação
- Fortalecer vínculos familiares
- Promover conscientização sobre álcool e drogas
- Oferecer acolhimento e escuta
- Incentivar a reintegração social

---

## Tecnologias Utilizadas

- PHP 8 (sem framework e sem dependências a instalar)
- HTML5 e CSS3 com custom properties
- Bootstrap 5.3
- JavaScript e jQuery 3.7
- Font Awesome 6.5

Bootstrap, jQuery e Font Awesome são carregados por CDN, então não há `composer install` nem `npm install`: basta copiar os arquivos para o servidor.

---

## Recursos do Site

- Layout unificado: cabeçalho, menu e rodapé existem em um lugar só
- Modo claro e modo escuro, com a escolha guardada no navegador
- Layout responsivo, com menu próprio para celular
- Galerias de fotos e página de evento com vídeo
- Área de documentos oficiais para download
- Funciona tanto na raiz de um domínio quanto em uma subpasta

---

## Estrutura do Projeto

```text
/
├── index.php              # programa único: roteia e monta a página
├── config.php             # menu, contatos, documentos, galerias e textos
├── .htaccess              # URLs limpas e bloqueio das pastas internas
│
├── layout/
│   ├── header.php         # <head> e navbar
│   ├── footer.php         # prédio, redes sociais, rodapé e Analytics
│   ├── page-open.php      # abre o card e o cabeçalho das páginas
│   └── page-close.php
│
├── partials/              # blocos reaproveitados entre páginas
│   ├── card-header.php    # ícone + título + subtítulo
│   ├── gallery.php        # galeria a partir de um array de fotos
│   ├── documents.php      # lista de PDFs para download
│   └── texto-44-anos.php
│
├── pages/                 # apenas o conteúdo de cada página
│   ├── home.php
│   ├── reunioes.php
│   ├── eventos.php
│   ├── quermesse.php
│   ├── jantar-2026.php
│   ├── premiacao-2026.php
│   ├── documentos.php
│   ├── contato.php
│   └── 404.php
│
├── css/style.css
├── js/site.js
├── img/  img2/  video/    # fotos, galerias e vídeos
├── Docs/                  # PDFs oficiais
├── conteudo/              # textos de origem (não servidos na web)
└── favico/
```

---

## Páginas

| Rota | Conteúdo |
|------|----------|
| `/` | Institucional e destaques |
| `/reunioes` | Horários, endereço e como funcionam os encontros |
| `/eventos` | Galeria de atividades da associação |
| `/quermesse` | Quermesse da Amizade 2026 |
| `/jantar-2026` | Jantar Beneficente 2026, com vídeo |
| `/premiacao-2026` | Premiação e comemoração dos 44 anos |
| `/documentos` | Estatuto, atas e demonstrativos |
| `/contato` | Endereço, telefones e e-mail |

---

## Como Executar

O PHP já traz um servidor embutido, suficiente para desenvolvimento:

```bash
php -S localhost:8000
```

Depois abra `http://localhost:8000`.

Esse servidor não lê o `.htaccess`, então as URLs limpas não funcionam nele: use `http://localhost:8000/index.php?p=eventos` para navegar. Para testar as URLs limpas é preciso um Apache com `mod_rewrite`.

---

## Como Alterar o Site

**Trocar um telefone, e-mail ou endereço:** edite `$SITE` no `config.php`. O valor aparece em todas as páginas que o usam.

**Adicionar ou remover um item do menu:** edite `$ROUTES` no `config.php`. O menu é gerado a partir dele — não há lista de links repetida em lugar nenhum. Cada rota tem `title` (título completo, vai na aba do navegador), `label` (texto curto do menu) e, opcionalmente, `label2` para uma segunda linha.

**Criar uma página nova:**

1. Acrescente a rota em `$ROUTES` no `config.php`
2. Crie o arquivo correspondente em `pages/`, começando por `require` de `layout/page-open.php` e terminando com `layout/page-close.php`

**Adicionar um documento para download:** coloque o PDF em `Docs/` e acrescente uma entrada em `$DOCUMENTOS` no `config.php`.

**Criar uma galeria:** coloque as fotos em uma pasta dentro de `img/`, declare o array no `config.php` e use `partials/gallery.php` na página.

> Atenção: uma rota não pode ter o mesmo nome de uma pasta existente (`css`, `js`, `img`, `img2`, `Docs`, `favico`, `video`). Em sistemas que não diferenciam maiúsculas, o Apache encontraria a pasta e não aplicaria a reescrita — foi por isso que a rota de documentos se chama `documentos`, e não `docs`.

---

## Publicação

Copie os arquivos para o servidor. Dois pontos de atenção:

- O `.htaccess` começa com ponto e muitos programas de FTP não o enviam por padrão. Sem ele as URLs limpas dão 404.
- Se a hospedagem não tiver `mod_rewrite`, mude `$URLS_LIMPAS` para `false` no `config.php`. Os links passam a ser `index.php?p=eventos`, que funciona em qualquer servidor.

O caminho base é detectado sozinho, então o mesmo código roda em `https://aaat.org.br/` e em `http://localhost/aaat/` sem alteração.

---

## Reuniões

As reuniões acontecem semanalmente:

- Sábados
- Das 20h00 às 22h00

### Endereço

```text
Av. João de Jorge, nº 538
Vila São Paulo
Taquaritinga/SP
CEP: 15900-110
```

---

## Contato

### Telefone

- (16) 3252-3903
- (16) 99612-7221

### E-mail

```text
aataquaritinga@gmail.com
```

### Facebook

- https://www.facebook.com/profile.php?id=100011397605586

---

## Melhorias Futuras

- Formulário de contato funcional
- Área administrativa para publicar eventos
- Integração com WhatsApp
- Integração com Google Maps
- Sistema de notícias

---

## Licença

Projeto institucional desenvolvido para a Associação Antialcoólica de Taquaritinga.

Todos os direitos reservados.
