<?php
include 'templates/cabecalho.php';
?>

<h2>Sobre o Projeto</h2>

<p>
    Este site foi desenvolvido como exemplo prático para demonstrar o uso
    das instruções <strong>include</strong>, <strong>require</strong>,
    <strong>include_once</strong> e <strong>require_once</strong> em PHP.
</p>

<p>
    A proposta do projeto é mostrar como organizar melhor uma aplicação web,
    separando componentes reutilizáveis, como cabeçalho e rodapé, além de
    centralizar configurações importantes, como a conexão com o banco de dados.
</p>

<p>
    Utilizando essa estrutura, o código fica mais limpo, fácil de manter e
    preparado para crescer conforme novas funcionalidades são adicionadas.
</p>

<h3>Recursos Utilizados</h3>

<ul>
    <li>PHP para desenvolvimento do backend;</li>
    <li>MySQL para armazenamento das notícias;</li>
    <li>HTML5 para estruturação das páginas;</li>
    <li>CSS3 para estilização e responsividade;</li>
    <li>Includes para reutilização de componentes.</li>
</ul>

<h3>Objetivos da Apostila</h3>

<p>
    Ao concluir esta atividade, o aluno deverá compreender a diferença entre
    <strong>include</strong> e <strong>require</strong>, saber quando utilizar
    cada um deles e aplicar esses conceitos em projetos reais.
</p>

<?php
include 'templates/rodape.php';
?>