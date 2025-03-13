
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sluttbarbershop</title>

    <link rel="stylesheet" href="./src/css/style.css">
</head>
<body>
    <header>
        <img class="fundo" src="./src/img/fundo.jpeg">
        <div class="div_logo">
            <img class="logo" src="./src/img/logor2.png">
            <h2 class="nome te">Al Slutt</h2>
            <h3 class="titulo te">Barber Shop</h3>
        </div>
        <div class="agendamento">
            
            <a class="botao_agendamento" href="https://wa.me/555499175733"><img src="./src/img/relogio.png">Agendar Horário</a>
            
        </div>
    </header>

    <main>

        <section class="servicos">
            <h2 class="titulo">Serviços</h2>

            <div>
                <a id="cabelo">
                    <img src="./src/img/cabelo.jpeg">
                    <button name="cabelo">Cabelo</button>
                </a>

                <a id="barba">
                    <img src="./src/img/barba.jpeg">
                    <button name="barba">Barba</button>
                </a>
            </div>
            <div>
                <a id="combos">
                    <img src="./src/img/etiqueta2.jpeg">
                    <button name="combos">Combos</button>
                </a>

                <a id="consultoria">
                    <img src="./src/img/consultoria.jpeg">
                    <button name="consultoria">Consultoria</button>
                </a>
            </div>
            <div>
                <a id="planos">
                    <img src="./src/img/planos.jpeg">
                    <button name="planos">Planos</button>
                </a>
            </div>
        </section>

        <section class="avaliacoes">
            
            <h2 class="titulo">Nossas Avaliações</h2>

            <div class="pre_carrosel">
                <a class="ant" id="ant"><h1> < </h1></a>
                <div class="carrosel">
                    <a class="elm1" id="elm1">
                        <h2>Carlos Menezes</h2>
                        
                        <p>"Atendimento impecável! O ambiente é super aconchegante e o corte ficou exatamente como eu queria. Recomendo demais!"</p>
                    </a>

                    <a id="elm2" class="a1">
                        <h2>Júlio Santos</h2>

                        <p>"Finalmente encontrei uma barbearia onde realmente entendem o que eu peço. Profissionais atenciosos e corte de alta qualidade!"</p>
                    </a>

                    <a id="elm3" class="a2">
                        <h2>Marcos Oliveira</h2>

                        <p>"Além do corte perfeito, o papo foi excelente! A equipe é muito profissional e o preço vale cada centavo. Com certeza voltarei!"</p>
                    </a>
                </div>
                <a class="dep" id="dep"><h1> > </h1></a>
            </div>

            <script src="./carrosel.js"></script>
        </section>
        
        <section class="localizacao">
        </section>

        <div id="minhaJanela" class="minhaJanela">
            <div class="cabecalho">
                <h2 id="titulo">Titulo</h2>

                <h2 id="fechar" class="btn_fechar">x</h2>
            </div>

            <div class="linha"></div>

            <div>
                <a href=""></a>
                <a href=""></a>
            </div>
            <div>
                <a href=""></a>
                <a href=""></a>
            </div>
            <div>
                <a href=""></a>
                <a href=""></a>
            </div>

        </div>

    </main>

    <footer>
        <p>SIRs S.A.</p>
    </footer>
</body>
</html>

<script src="./servicos.js"></script>
