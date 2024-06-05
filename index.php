</ul>
        </nav>
        <main>
            <article>
                <img src="img/exemplo.jpg" alt="foto noticia" class="fotonoticia">
                <p class="textonoticia">Fãs de “The Simpsons” vão às redes sociais lamentar a morte do querido personagem depois de 35 anos de série.Os fãs prestaram homenagem ao personagem na rede X. “</p>
                <img src="img/saibamais.png" alt="Saiba Mais" class="saibamais">
            </article>
            <article>
                conteudo 2
            </article>
            <article>
                conteudo 3
            </article>
            <article>
                conteudo 4
            </article>
            <article>
                conteudo 5
            </article>
            <article>
                conteudo 6
            </article>
            <?php 
                $sql = "SELECT * FROM tb_noticia ORDER BY RAND() LIMIT 6;";
                $resultado = mysqli_execute_query($conexao, $sql);
                while($dados = mysqli_fetch_array($resultado))
                {
                    echo '
                    <article>
                        <img src="img/'.$dados["imagem"].'" alt="foto noticia" class="fotonoticia">
                        <p class="textonoticia">'.$dados["titulo"].'</p>
                        <a href="noticia.php?id_noticia='.$dados["id_noticia"].'">
                            <img src="img/saibamais.png" alt="Saiba Mais" class="saibamais">
                        </a>
                    </article>
                    ';                    
                }
            ?>        
        </main>
        <footer>
            <a href="#"><img src="img/whats.png" alt="whatsapp" width="226"></a>