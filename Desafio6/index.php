<?php
// 1. REQUER a conexão.
require_once 'config/conexao.php';


// 2. INCLUI o cabeçalho.
include 'templates/cabecalho.php';
?>


<h2>Últimas Notícias</h2>
<p>Veja o que há de novo em nossa plataforma e no mundo da tecnologia.</p>


<div class="noticias-container">
    <?php
    // 3. Consulta SQL para buscar informações da noticia
    $sql = "SELECT titulo, conteudo, data_publicacao 
            FROM noticias 
            ORDER BY data_publicacao DESC 
            LIMIT 6";
            
    $resultado = $conexao->query($sql);


    if ($resultado && $resultado->num_rows > 0) {
        
        // 4. Loop para criar cada card
        while ($noticia = $resultado->fetch_assoc()) {
            
            // 5. (Bônus) Formatação da data para o padrão BR
            // Criamos um objeto DateTime a partir da string do banco
            $data = new DateTime($noticia['data_publicacao']);
            // Formatamos para o padrão Dia/Mês/Ano
            $data_formatada = $data->format('d/m/Y H:i');


            // 6. (Bônus) Limita o tamanho do conteúdo para o card
            $conteudo_curto = mb_substr($noticia['conteudo'], 0, 150); // Pega os primeiros 150 caracteres
            if (mb_strlen($noticia['conteudo']) > 150) {
                $conteudo_curto .= "..."; // Adiciona "..." se o texto for maior
            }


            // 7. Exibe o HTML do Card
            echo '<article class="card">';
            echo '  <div class="card-conteudo">';
            echo '      <h3>' . htmlspecialchars($noticia['titulo']) . '</h3>';
            echo '      <p>' . htmlspecialchars($conteudo_curto) . '</p>';
            echo '  </div>';
            echo '  <div class="card-meta">';
            echo '      Publicado em: ' . $data_formatada;
            echo '  </div>';
            echo '</article>';
        }


    } else {
        echo "<p>Nenhuma notícia encontrada no banco de dados.</p>";
    }


    // 8. Fecha a conexão
    $conexao->close();
    ?>
</div> <?php
// 9. INCLUI o rodapé
include 'templates/rodape.php';
?>
