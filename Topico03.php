<?php
// HEADER
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid">
            <h2 class="font-bold Azul">
                <i class="fas fa-folder"></i>  Tópico 03 – O modelo de estrutura integrada de gestão de riscos COSO II
            </h2>

            <hr class="hr4">

            <p class="Texto"><strong>Objetivo:</strong>  Apresentar informações básicas que levem ao conhecimento das três dimensões do modelo de gestão integrada de riscos – objetivos da organização, componentes do gerenciamento de riscos e objetos controle.</p>
            
            <hr class="hrLaranja">

            <div class="row">
                <div class="col-8">
                <br>
                    <p class="Texto">
                        Conforme mencionado no tópico anterior, será abordado aqui o modelo de estrutura integrada de gestão de riscos COSO II, o qual trata o paradigma de gestão de riscos por meio de um modelo integrado de três conjuntos de dimensões que presume a existência de um relacionamento direto entre os objetivos que uma organização pretende alcançar [primeira dimensão], os componentes do gerenciamento de riscos [segunda dimensão] e os objetos de controle [terceira dimensão], o qual pode ser visualizado por meio de uma matriz tridimensional, em forma de cubo (COSO, 2007, p. 7).
                    </p>
                    <p class="Texto">
                        Com efeito, de acordo com COSO (2007, p. 5), a dimensão referente aos objetivos que uma organização almeja atingir contemplam as seguintes categorias:
                    </p>
                </div>
                <div class="col-sm">
                    <div class="text-center">
                    <p class="TituloFigura"><strong>Imagem 5:</strong> Matriz Tridimensional</p>
                    <a href="imagens/Imagem05.png" data-toggle="lightbox" data-footer="- Matriz Tridimensional">
                        <img class="img-fluid" src="imagens/Imagem05.png" alt="Alt_da_Imagem">
                    </a>
                    </div>
                </div>
            </div>
            <br>

            <section id="Estrategicos">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" style="background-color: #4885AE;color:white">
                                    <h3>Estratégicos</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Metas gerais, alinhadas com o que suportem à sua missão.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="Operacional">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2" style="background-color: #4885AE;color:white">
                                    <h3>Operacional</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Utilização eficaz e eficiente dos recursos
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="Comunicacao">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3" style="background-color: #4885AE;color:white">
                                    <h3>Comunicação</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Confiabilidade de relatórios.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>   

            <section id="Conformidade">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4" style="background-color: #4885AE;color:white">
                                    <h3>Conformidade</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Cumprimento de leis e regulamentos aplicáveis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <p class="Texto">
                De outra parte, a dimensão referente aos componentes do gerenciamento de riscos corporativos “é constituída de oito componentes inter-relacionados, pelo qual a administração gerencia a organização, e estão integrados com o processo de gestão”, conforme a seguir COSO (2007, p. 6):
            </p>  
            
            <section id="AmbienteInterno">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5" style="background-color: #4885AE;color:white">
                                    <h3>Ambiente Interno</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    O ambiente interno compreende o tom de uma organização e fornece a base pela qual os riscos são identificados e abordados pelo seu pessoal, inclusive a filosofia de gerenciamento de riscos, o apetite a risco, a integridade e os valores éticos, além do ambiente em que estes estão.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="FixacaoObjetivos">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6" style="background-color: #4885AE;color:white">
                                    <h3>Fixação de objetivos</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                Os objetivos devem existir antes que a administração possa identificar os eventos em potencial que poderão afetar a sua realização. O gerenciamento de riscos corporativos assegura que a administração disponha de um processo implementado para estabelecer os objetivos que propiciem suporte e estejam alinhados com a missão da organização e sejam compatíveis com o seu apetite a riscos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="IdentificacaoEventos">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7" style="background-color: #4885AE;color:white">
                                    <h3>Identificação de Eventos</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse7" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Os eventos internos e externos que influenciam o cumprimento dos objetivos de uma organização devem ser identificados e classificados entre riscos e oportunidades. Essas oportunidades são canalizadas para os processos de estabelecimento de estratégias da administração ou de seus objetivos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="AvaliacaoRiscos">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8" style="background-color: #4885AE;color:white">
                                    <h3>Avaliação de Riscos</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse8" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Os riscos são analisados, considerando-se a sua probabilidade e o impacto como base para determinar o modo pelo qual deverão ser administrados. Esses riscos são avaliados quanto à sua condição de inerentes e residuais.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="RespostaRisco">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9" style="background-color: #4885AE;color:white">
                                    <h3>Resposta a Risco</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse9" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    A administração escolhe as respostas aos riscos - evitando, aceitando, reduzindo ou compartilhando – desenvolvendo uma série de medidas para alinhar os riscos com a tolerância e com o "apetite a risco".
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="AtividadesControle">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10" style="background-color: #4885AE;color:white">
                                    <h3>Atividades de Controle</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse10" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Políticas e procedimentos são estabelecidos e implementados para assegurar que as respostas aos riscos sejam executadas com eficácia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="InformacoesComunicacoes">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11" style="background-color: #4885AE;color:white">
                                    <h3>Informações e Comunicações</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse11" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    As informações relevantes são identificadas, colhidas e comunicadas de forma e no prazo que permita que sejam cumpridas as responsabilidades. A comunicação eficaz também ocorre em um sentido mais amplo, fluindo em todos os níveis da organização.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="Monitoramento">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12" style="background-color: #4885AE;color:white">
                                    <h3>Monitoramento</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse12" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    A integridade da gestão de riscos corporativos é monitorada e são feitas as modificações necessárias. O monitoramento é realizado através de atividades gerenciais contínuas ou avaliações independentes ou de ambas as formas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <p class="Texto">
                Por outro lado, e com base na premissa de que a metodologia do COSO II é aplicável a qualquer setor da organização, uma vez que é focada em riscos dos processos e não em tarefas ou departamentos isolados, a terceira dimensão prevê que os controles devem ser exercidos sobre todos os objetos ou níveis organizacionais da entidade, pois em cada processo existem riscos potenciais e os controles devem sempre estar presentes para mitigar esses riscos independentemente de onde eles possam ocorrer, seja numa subsidiária, numa unidade de negócio, numa divisão ou ao nível da própria entidade (COSO, 2007).
            </p>

            <p class="Texto">
            Destaquem-se ainda algumas especificidades relativas à aplicação da metodologia do COSO II como instrumento de gestão de riscos (COSO, 2017):
            </p>

            <section id="Relacionamento">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13" style="background-color: #4885AE;color:white;" >
                                    <h3><i class="fas fa-bullseye" style="height:25px;" ></i> Relacionamento entre Objetivos e Componentes</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse13" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    <i class="fas fa-arrow-right" style="color:#FC6B30;"></i> Existe um relacionamento direto entre os objetivos, que uma organização se empenha em alcançar, e os componentes do gerenciamento de riscos corporativos, que representam aquilo que é necessário para o seu alcance. Quanto mais consistente e presente essa relação, maior a capacidade de a entidade manter o enfoque na totalidade de seu gerenciamento de riscos, ou na categoria de objetivos, componentes, unidade da organização ou qualquer um dos subconjuntos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="Eficacia">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14" style="background-color: #4885AE;color:white;" >
                                    <h3><i class="fas fa-bullseye" style="height:25px;" ></i> Eficácia</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse14" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    <i class="fas fa-arrow-right" style="color:#FC6B30;"></i> A determinação do grau de eficácia do gerenciamento de riscos corporativos de uma organização corresponde ao julgamento decorrente da avaliação da presença e da eficácia do funcionamento dos oito componentes. Desse modo, os componentes também são critérios para o gerenciamento eficaz de riscos corporativos. Para que os componentes possam estar presentes e funcionem adequadamente, não poderá haver fraquezas significantes, e os riscos necessitam ser enquadrados no apetite a risco da organização. Quando se constata que o gerenciamento de riscos corporativos é eficaz em cada uma das quatro categorias de objetivos, isso significa que os mais altos níveis colegiados de gestão de uma entidade (o Conselho de Administração e a Diretoria Executiva, por exemplo) terão garantia razoável de que entenderam até que ponto os objetivos estratégicos e operacionais estão realmente sendo alcançados, o sistema de comunicação da empresa é confiável, e todas as leis e regulamentos cabíveis estão sendo observados. Os oito componentes não funcionarão de forma idêntica em todas as organizações. A aplicação, e obtenção de um resultado eficaz, da metodologia COSO II para a gestão de riscos em quaisquer organizações, privadas ou públicas, deverá ser conduzida de modo a assegurar que cada um de seus componentes esteja presente e funcionando, naturalmente de forma adaptada ao tipo institucional e formal da organização.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="Limitacoes">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15" style="background-color: #4885AE;color:white;" >
                                    <h3><i class="fas fa-bullseye" style="height:25px;" ></i> Limitações</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse15" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    <i class="fas fa-arrow-right" style="color:#FC6B30;"></i> A despeito de oferecer importantes benefícios, o gerenciamento de riscos corporativos está sujeito a limitações, especialmente em decorrência do fato de que o julgamento humano, no processo decisório, pode ser falho, motivo pelo qual as decisões de respostas a risco e o estabelecimento dos controles necessitam levar em conta os custos e benefícios relativos. São exemplos de falhas dessa natureza: o erro ou engano humano; o conluio entre duas ou mais pessoas; e a recusa ou aceite da gestão em relação às decisões de gestão de riscos. Essas limitações impedem que as instâncias superiores de gestão (o Conselho de Administração e a Diretoria Executiva, por exemplo) tenham absoluta garantia da realização dos objetivos da organização.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="FuncoesResponsabilidades">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16" style="background-color: #4885AE;color:white;" >
                                    <h3><i class="fas fa-bullseye" style="height:25px;" ></i> Funções e Responsabilidades</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse16" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    <i class="fas fa-arrow-right" style="color:#FC6B30;"></i> Cada um dos empregados de uma organização tem uma parcela de responsabilidade no gerenciamento de riscos corporativos. O gestor principal e titular de uma organização é o responsável maior e deve assumir a responsabilidade da iniciativa. Cabe aos outros gestores executivos e estratégicos apoiar a filosofia de administração de riscos da organização, incentivar a observação de seu apetite a risco e administrar os riscos dentro de suas esferas de responsabilidade, conforme as tolerâncias a risco. Em geral, cabe aos gestores responsáveis pela gestão de riscos, pela gestão financeira, pela gestão da auditoria interna, dentre outros, responsabilidades fundamentais de suporte. Os outros membros da organização são responsáveis pela execução da gestão de riscos em cumprimento das diretrizes e dos protocolos estabelecidos. A mais alta instância de gestão de uma organização (o Conselho de Administração, por exemplo) executa importante atividade de supervisão da gestão de riscos da organização, estando ciente e de acordo com o grau de apetite a risco da organização. Diversas partes externas, como clientes, revendedores, parceiros comerciais, auditores externos, agentes normativos e analistas financeiros freqüentemente fornecem informações úteis para a condução da gestão de riscos, porém não são responsáveis pela sua eficácia e nem fazem parte do próprio gerenciamento de riscos da organização.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <p class="Texto">
                Concluindo, há de se ressaltar que o modelo de gerenciamento de riscos baseado na metodologia COSO II contempla abordagens integradas, que levam em conta os objetivos que uma organização pretende alcançar, os componentes que compõem um processo de gerenciamento de riscos e os objetos organizacionais de aplicação de controles, visualizados por meio de uma matriz tridimensional, em forma de cubo, em que cada um dos elementos que integram as correspondentes dimensões mantém relacionamentos com os demais em busca do melhor funcionamento do todo, sem deixar de considerar as limitações humanas próprias dos profissionais envolvidos e de suas respectivas responsabilidades funcionais. 
            </p>

            <div>
                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                <p class="SaibaMaisTexto">Para uma leitura complementar, acesse a biblioteca do curso e leia o Sumário Executivo do documento “<a href="https://drive.google.com/file/d/0B5moywX9O3sQc2xRUm9ReWJ2RTQ/view" target="_blank">COSO – Gerenciamento de Riscos Corporativos - Estrutura Integrada</a>”, de Stephem Hill.</p>
            </div>

            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico02.3.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico04.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
                </div>
            </div>

            <script>
                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                    event.preventDefault();
                    $(this).ekkoLightbox();
                });                    
            </script>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>