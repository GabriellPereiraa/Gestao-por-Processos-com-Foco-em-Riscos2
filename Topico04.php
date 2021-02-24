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
            <h2 class="font-bold Cinza">
                <i class="fas fa-folder"></i>  Tópico 04 – Gerenciamento de riscos na Controladoria e Ouvidoria Geral do Estado do Ceará (CGE/CE)
            </h2>

            <hr class="hr4Cinza">

            <p class="Texto"><strong>Objetivo:</strong>  Apresentar as características gerais do gerenciamento de riscos no setor público e do Programa de Fortalecimento do Controle Interno do Poder Executivo, especialmente quanto à integridade e às três linhas de defesa do controle interno.</p>
            
            <hr class="hrLaranja">

            <p class="Texto">
                Inicialmente é importante destacar que o processo de implementação de gestão de riscos em uma organização, especialmente do setor público, requer o estabelecimento de uma estratégia de médio a longo prazo, que passa pelo cumprimento de uma série de desafios evolutivos quanto à maturidade de riscos organizacionais.
            </p>
            <p class="Texto">
                Nesse sentido, registre-se que a visão da QSP (2010) sobre a maturidade de riscos em uma organização contempla uma série de graus e correspondentes características, como a seguir alinhados:
            </p>
            <section id="Ingenuo">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-item" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" style="background-color: #4885AE;color:white">
                                    <h3>Ingênuo</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Nenhuma abordagem formal desenvolvida para a gestão de riscos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="Consciente">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-item" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2" style="background-color: #4885AE;color:white">
                                    <h3>Consciente</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Abordagem para a gestão de riscos dispersa em “silos”.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="Definido">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-item" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3" style="background-color: #4885AE;color:white">
                                    <h3>Definido</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Estratégia e políticas implementadas e comunicadas, apetite por riscos definido.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>   

            <section id="Gerenciado">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-item" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4" style="background-color: #4885AE;color:white">
                                    <h3>Gerenciado</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Abordagem corporativa para a gestão de riscos desenvolvida e comunicada.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>  
            
            <section id="Habilitado">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-item" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5" style="background-color: #4885AE;color:white">
                                    <h3>Habilitado</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                Gestão de riscos e controles internos totalmente incorporados às operações.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <div>
                <p class="FiqueAtentoTitulo"> Atenção</p>
                <p class="FiqueAtentoTexto">Além disso, Braga (2012) relata que “a discussão da gestão de riscos ainda é incipiente na Administração Pública pátria, restrita a uma presença mais acentuada nos setores que lidam com o Sistema Financeiro e naqueles que atuam em desastres naturais”.
                </p>
            </div>
            <br>

            <p class="Texto">
                Nada obstante, ainda como destaca Braga (2012), “os órgãos de controle podem contribuir sobremaneira nessa discussão, como indutores desse processo de gestão de riscos, em uma salutar interação”, pois a ampliação da discussão sobre gestão de riscos no âmbito estatal contribui para a eficiência da gestão e a disponibilização de serviços públicos de qualidade é possível não só com diminuição de custos, melhoria de processos e adoção de instrumentos de mercado, mas também por meio do tratamento das incertezas (BRAGA, 2012). 
            </p>
            <p class="Texto">
                Nesse sentido, a Controladoria e Ouvidoria Geral do Estado (CGE) atualizou seu Planejamento Estratégico para o período 2015 a 2022, aprovando-o por meio da Portaria no 183/2014, tendo, dentre os desafios a serem vencidos: a consolidação do controle interno preventivo baseado na gestão por processos; a universalização do atendimento em ouvidoria e acesso à informação; a educação para o controle social; o fortalecimento da ética e da transparência, e a estruturação e disponibilização de informações estratégicas para a tomada de decisão.
            </p>
            <p class="Texto">
                Assim, com a missão de “assegurar a adequada aplicação dos recursos públicos, contribuindo para uma gestão ética e transparente e para a oferta de serviços públicos com qualidade”, a CGE estabeleceu oito objetivos estratégicos para o período 2015-2022, a seguir relacionados, os quais serão alcançados por meio da execução de 35 projetos estratégicos.
            </p>

            <p class="Texto">
                <strong>1.</strong> Fortalecer a tomada de decisão pelos gestores, com base na atuação do controle interno como suporte à gestão;
            </p>
            <p class="Texto">
                <strong>2.</strong> Consolidar as auditorias com abordagens qualitativas e baseadas em riscos e processos;
            </p>
            <p class="Texto">
                <strong>3.</strong> Implantar a gestão de risco no Poder Executivo Estadual, considerando as necessidades do cidadão, as estratégias de Governo e as políticas setoriais;
            </p>
            <p class="Texto">
                <strong>4.</strong> Consolidar o Controle Interno Preventivo, baseado na Gestão por Processos;
            </p>
            <p class="Texto">
                <strong>5.</strong> Fortalecer a ouvidoria e o acesso à informação como instrumentos para consolidar a gestão ética, transparente, democrática e participativa;
            </p>
            <p class="Texto">
                <strong>6.</strong> Consolidar o modelo de gestão institucional integrada, provendo os recursos organizacionais necessários à prevenção de riscos, à auditoria interna e à ouvidoria;
            </p>
            <p class="Texto">
                <strong>7.</strong> Difundir a atuação da CGE junto à sociedade e fortalecer o desenvolvimento da cidadania, para o exercício do controle social;
            </p>
            <p class="Texto">
                <strong>8.</strong> Implantar a inteligência de negócio, agregando valor à prevenção de riscos, à auditoria interna e à ouvidoria.
            </p>

            <div>
                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                <p class="SaibaMaisTexto">Acesse a biblioteca do curso e leia o "<a href="https://drive.google.com/file/d/0B5moywX9O3sQZEVRRlMyakh4Q0E/view"  target="_blank">Planejamento Estratégico 2015-2022</a>".</p>
            </div>

            <p class="Texto">
                Nesse contexto, e alinhado aos objetivos estratégicos acima referidos, especialmente o que se refere à implantação da gestão de risco no Poder Executivo Estadual, a CGE iniciou a execução do Programa de Fortalecimento do Controle Interno no Poder Executivo, tendo como um dos projetos o Programa de Integridade do Poder Executivo. 
            </p>
            <p class="Texto">
                O referido Programa, lançado por ocasião do Seminário Controles Internos, Gestão de Riscos e Programa de Integridade, realizado em 30/08/2017, considera a integridade como um conjunto de mecanismos integrados, que criam o ambiente necessário para a Administração Pública gerar resultados com a qualidade esperada pela população, de forma regular, eficiente e proba. Nesse sentido, o objetivo do Programa de Integridade do Poder Executivo é sistematizar práticas de controle interno, de gestão de riscos e de governança, baseado no modelo de atuação das três linhas de defesa, estabelecido pelo The Institute of Internal Auditors (CGE, 2017).
            </p>

            <div class="col-sm">
                <div class="text-center">
                <p class="TituloFigura"><strong>Imagem 6:</strong> Controle Externo</p>
                <a href="imagens/Imagem06.png" data-toggle="lightbox" data-footer="Controle Externo">
                    <img class="img-fluid" src="imagens/Imagem06.png" alt="Alt_da_Imagem">
                </a>
                </div>
            </div>

            <p class="Texto">
                Para implantação do Programa de Integridade do Poder Executivo, será observado o cumprimento das seguintes estratégias (CGE, 2017): 
            </p>
            <p class="Texto">
                <i class="fas fa-arrow-right" style="color:#FC6B30;"></i> comprometimento e apoio da alta administração;
            </p>
            <p class="Texto">
                <i class="fas fa-arrow-right" style="color:#FC6B30;"></i> instância responsável pelo Plano de Integridade;
            </p>
            <p class="Texto">
                <i class="fas fa-arrow-right" style="color:#FC6B30;"></i> editar norma para implantação do Programa de Integridade; 
            </p>
            <p class="Texto">
                <i class="fas fa-arrow-right" style="color:#FC6B30;"></i> diagnóstico da situação atual do órgão - Análise de Riscos; 
            </p>
            <p class="Texto">
                <i class="fas fa-arrow-right" style="color:#FC6B30;"></i> desenvolver Plano de Implementação - estruturação das regras e instrumentos, Plano de Comunicação;
            </p>
            <p class="Texto">
                <i class="fas fa-arrow-right" style="color:#FC6B30;"></i> definir metodologia de monitoramento contínuo.
            </p>

            <p class="Texto">
                Em decorrência da implantação desse Programa, são esperados os resultados apresentados a seguir (CGE, 2017):
            </p>
            <p class="Texto">
                <i class="fas fa-arrow-right" style="color:#FC6B30;"></i> proporcionar razoável segurança no alcance dos resultados esperados;
            </p>
            <p class="Texto">
                <i class="fas fa-arrow-right" style="color:#FC6B30;"></i> gerar economias decorrentes do ganho de eficiência;
            </p>
            <p class="Texto">
                <i class="fas fa-arrow-right" style="color:#FC6B30;"></i> propiciar a adequada aplicação dos recursos públicos, em conformidade com as leis e regulamentos; 
            </p>
            <p class="Texto">
                <i class="fas fa-arrow-right" style="color:#FC6B30;"></i> proporcionar maior confiabilidade e qualidade das informações geradas para decisão e prestação de contas; 
            </p>
            <p class="Texto">
                <i class="fas fa-arrow-right" style="color:#FC6B30;"></i> transmitir o conceito de organização íntegra e transparente.
            </p>

            <div>
                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                <p class="SaibaMaisTexto">Acesse o link para o Seminário Controles Internos, Gestão de Riscos e Programa de Integridade, realizado em 30/08/2017: <a href="https://www.cge.ce.gov.br/2017/08/30/seminario-controles-internos-gestao-de-riscos-e-programa-de-integridade/"  target="_blank">https://www.cge.ce.gov.br/2017/08/30/seminario-controles-internos-gestao-de-riscos-e-programa-de-integridade/</a>
                </p>
            </div>
            <br>

            <p class="Texto">
                Finalmente, registramos que a implantação de gerenciamento de riscos na CGE está inserida nas estratégias de implantação do Programa de Integridade do Poder Executivo, e será mais bem detalhada em breve, em suas etapas e correspondente cronograma. 
            </p>

            <div>
                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                <p class="SaibaMaisTexto">Para uma leitura complementar leia "<a href="https://administradores.com.br/artigos/gestao-dos-riscos-no-setor-publico-ampliando-os-horizontes"  target="_blank">Gestão de Riscos no Setor Público – ampliando os horizontes</a>".</p>
            </div>

            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico03.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Referencias.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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