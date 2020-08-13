<html>
<head>
    <meta charset="utf-8">
    <title>Exerc Herança - POO</title>
</head>
<body>

    <!--Crie as classes, utilizando a herança para
        acessar os atributos da classe extendida:
        PESSOA      PROFESSOR       ALUNO
        - nome      - registro      - codigo
        - RG        - disciplina    - turma
        - endereco-->

    <form class="" action="exerc1_WesleySilva.php" method="post">
        <!--Pessoa-->
        <input type="text" name="nome" placeholder="Nome:">
        <input type="number" min="100000000" max="999999999" name="rg" placeholder="RG:">
        <input type="text" name="endereco" placeholder="Endereço:">

        <!--Professor-->
        <hr>
        <input type="number" min="10000" max="99999" name="reg" placeholder="Registro:">
        <input type="text" name="disc" placeholder="Disciplina:">
        
        <!--Aluno-->
        <hr>
        <input type="number" min="10000" max="99999" name="cod" placeholder="Código:">
        <input type="text" name="tur" placeholder="Turma:">

        <select name="profalu">
        <option>Professor</option>
        <option>Aluno</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>