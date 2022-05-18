<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GW Plus</title>
    <link rel="stylesheet" href="../css/admin-filmes.css">
</head>
<body>

    <div id="site">
        <form action="#">
            <input type="text" name="fil-nome" id="fil-nome" placeholder="NOME DO FILME" class="entrada" required>

            <label for="fil-foto">CARREGAR FOTO</label>
            <input type="file" id="fil-foto" name="fil-foto" accept=".jpg, .jpeg, .png" required>

            <input type="password" name="fil-senha" id="fil-senha" placeholder="SENHA" class="entrada" required>

            <input type="number" name="fil-nota" id="fil-nota" placeholder="NOTA IMDB" class="entrada" required>

            <select name="fil-ativo" id="fil-ativo" class="entrada select">
                <option value="" disabled selected>ATIVO NO SITE?</option>
                <option value="Ativo">ATIVO</option>
                <option value="Inativo">INATIVO</option>
            </select>

            <select name="fil-lancamento" id="fil-lancamento" class="entrada select">
                <option value="" disabled selected>LANÇAMENTO?</option>
                <option value="Sim">SIM</option>
                <option value="Não">NÃO</option>
            </select>

            <input type="submit" value="CADASTRAR" id="bt-cad" class="entrada">

        </form>
    
    </div>

        <div id="tabela">
            <div id="tabela-cabecalho">
                <div class="tabela-cab-titulo">
                    ID
                </div>
                <div class="tabela-cab-titulo">
                    NOME
                </div>
                <div class="tabela-cab-titulo">
                    DESCRIÇÃO
                </div>
                <div class="tabela-cab-titulo">
                    VÍDEO
                </div>
                <div class="tabela-cab-titulo">
                    THUMB
                </div>
                <div class="tabela-cab-titulo">
                    NOTA
                </div>
                <div class="tabela-cab-titulo">
                    CATEGORIA
                </div>
                <div class="tabela-cab-titulo">
                    ATIVO
                </div>
                <div class="tabela-cab-titulo">
                    LANÇAMENTO
                </div>
                <div class="tabela-cab-titulo">
                    EDITAR
                </div>
                <div class="tabela-cab-titulo"”>
                    EXCLUIR
                </div>
            </div>

            <div id="tabela-corpo">
                <div class="tabela-linha">
                    <div class="tabela-celula">
                         1–1
                    </div>
                    <div class="tabela-celula">
                         1–1
                    </div>
                    <div class="tabela-celula">
                         1–1
                    </div>
                    <div class="tabela-celula">
                         1–1
                    </div>
                    <div class="tabela-celula">
                         1–1
                    </div>
                    <div class="tabela-celula">
                         1–1
                    </div>
                    <div class="tabela-celula">
                         1–1
                    </div>
                    <div class="tabela-celula">
                         1–1
                    </div>
                    <div class="tabela-celula">
                         1–1
                    </div>
                    <div class="tabela-celula">
                         1–1
                    </div>
                    <div class="tabela-celula">
                         1–1
                    </div>
                </div>
            </div>
        </div>

    

    

</body>
</html>