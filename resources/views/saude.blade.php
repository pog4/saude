<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacao Saúde</title>
</head>
<body>
    <main>
        <div>
            <h1>Aplicação Saúde - Cálculo do IMC</h1>
            <p>Esta aplicação realização o cálculo do IMC de uma pessoa, informando sua classificação com relação a este cáculo.</p>
        </div>
        <div>
            <form action="{{url('/imc')}}" method="get">
                <label id="lnome" for="nome">Nome:</label>
                <input type="text" name="nome" placeholder="Informe seu nome" required><br/>
                <label id="ldatanascimento" for="datanascimento">Data de Nascimento:</label>
                <input type="date" name="datanascimento" placeholder="Informe sua data de nascimento" required><br/>
                <label id="lpeso" for="peso">Peso:</label>
                <input type="number" step="0.01" name="peso" placeholder="Informe seu peso" required><br/>
                <label id="laltura" for="altura">Altura:</label>
                <input type="number" name="altura" step="0.01" placeholder="Informe sua altura" required><br/>
                <label id="sonoid" for="sono">Média de horas de sono:</label>
                <input type="number" name="sono" placeholder="Informe sua media de horas que você dorme" required><br/>
                <br/>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>
</body>
</html>
