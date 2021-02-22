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
                <i class="fas fa-folder"></i> 01.2 – Quais os riscos que nos interessam?
            </h2>

            <hr class="hr4">

            <p class="Texto">
                O interesse deste curso está voltado para os riscos relacionados à gestão das organizações, das instituições, cuja existência atual e futura depende de como são administradas e dos resultados que alcançam. Assim, o foco está relacionado aos riscos associados às metas, aos objetivos e aos resultados estabelecidos pelas organizações e de como eles se relacionam com os recursos alocados, com a comunicação empreendida, com a visibilidade alcançada e com o desempenho ao longo do tempo, por exemplo. 
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Imagem 1:</strong>  - Relacionamento das Metas, objetivos e resultados com os recursos</p>
                <a href="imagens/Imagem01.png" data-toggle="lightbox" data-footer="Relacionamento das Metas, objetivos e resultados com os recursos">
                    <img class="img-fluid" src="imagens/Imagem01.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura">Relacionamento das Metas, objetivos e resultados com os recursos</p>
            </div>
            <br>

            <p class="Texto">
            Mesmo assim, faz-se necessário focar um pouco mais esse universo tão abrangente de riscos. Dessa forma, pode-se considerar que os riscos relativos à gestão das organizações que mais interessam aos gestores e a tantos quantos tratem da missão de gerenciá-las são os que se referem às <strong>dimensões estratégica, financeira, operacional e de conformidade.</strong>
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Imagem 2:</strong>  - Relacionamento das Metas, objetivos e resultados com os recursos</p>
                <a href="imagens/Imagem02.png" data-toggle="lightbox" data-footer="Relacionamento das Metas, objetivos e resultados com os recursos">
                    <img class="img-fluid" src="imagens/Imagem02.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura">Relacionamento das Metas, objetivos e resultados com os recursos</p>
            </div>
            <br>

            <p class="Texto">
                Nesse sentido, por exemplo, podem-se indicar, a seguir, algumas características organizacionais inerentes à <strong>dimensão estratégica</strong>, cujos riscos associados são objeto de interesse:
            </p>

            <section id="ObjetivosEstratégicos">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" style="background-color: #4885AE;color:white">
                                    <h3>Objetivos Estratégicos</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Projeções quantitativas ou qualitativas para o futuro de uma organização, normalmente estabelecidas de forma participativa entre representantes das partes relacionadas e que têm interesse na organização, observados requisitos de exequibilidade.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="Iniciativas">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2" style="background-color: #4885AE;color:white">
                                    <h3>Iniciativas</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                Ações que marcam o início de qualquer atividade, projeto, processo organizacional, vinculadas a objetivos definidos previamente.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="Aquisições">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3" style="background-color: #4885AE;color:white">
                                    <h3>Aquisições</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Ações de incorporação de insumos para o processo operacional de uma organização.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="Planejamento">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4" style="background-color: #4885AE;color:white">
                                    <h3>Planejamento e Aquisição de recursos</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                Ações de preparo, organização e controle para viabilizar a estruturação de recursos de toda ordem e o processo operacional de uma organização.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="Governança">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5" style="background-color: #4885AE;color:white">
                                    <h3>Governança</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Estrutura que visa suprir a necessidade de assegurar que as empresas proporcionem retornos aos seus financiadores, investidores e fornecedores de recursos, inclusive acionistas, acrescentando valor às empresas, a longo prazo.
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
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6" style="background-color: #4885AE;color:white">
                                    <h3>Comunicação e relação com o público</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                Ações de transmissão e recepção de mensagens com todas as partes relacionadas e que têm algum interesse com e nas organizações.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <p class="Texto">
            No que se refere à dimensão financeira, algumas das características organizacionais cujos riscos estão associados estão, a seguir, exemplificadas: 
            </p>

            <section id="GestaoContabil">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7" style="background-color: #4885AE;color:white">
                                    <h3>Gestão Contábil e reporte</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse7" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Ações que assegurem a consistência e a integridade dos registros e relatórios contábeis, de acordo com a estrutura patrimonial, econômica e financeira de uma organização.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="GestaoLiquidez">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8" style="background-color: #4885AE;color:white">
                                    <h3>Gestão de liquidez e crédito</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse8" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Ações que assegurem eficiência e eficácia na gestão financeira de bens, direitos e obrigações de uma organização.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="ApresentacaoPublico">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9" style="background-color: #4885AE;color:white">
                                    <h3>Apresentação ao público</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse9" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                Modelo que proporciona oportuno, tempestivo e adequado conjunto de relatórios que comunicam a situação patrimonial, econômica e financeira às diversas partes relacionadas com os interesses de uma organização.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="FontesRecursos">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10" style="background-color: #4885AE;color:white">
                                    <h3>Fontes de recursos</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse10" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Estrutura que viabiliza oportuna, tempestiva e adequada alocação de recursos financeiros, viabilizando a eficiência do processo operacional de uma organização.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="VariacaoCambial">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11" style="background-color: #4885AE;color:white">
                                    <h3>Variação cambial</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse11" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                Ações que assegurem proteção às dívidas e a outras obrigações de uma organização que estejam atreladas a alteração de cotação de moeda estrangeira.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            
            <p class="Texto">
            Em relação à dimensão operacional ou das operações, são apresentadas, a seguir, algumas características organizacionais para os quais estão relacionados riscos: 
            </p>

            <section id="GestaoPatrimonio">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12" style="background-color: #4885AE;color:white">
                                    <h3>Gestão de patrimônio</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse12" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                Modelo e estrutura que assegura as melhores condições de uso e de retorno aos recursos de uma organização e aos correspondentes investimentos realizados.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="GestaoContingencias">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13" style="background-color: #4885AE;color:white">
                                    <h3>Gestão de contingências</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse13" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                Modelo e estrutura que definem o que deve ser feito por uma organização ante a possibilidade de ocorrência de situações operacionais indesejadas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="GestaoPessoas">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14" style="background-color: #4885AE;color:white">
                                    <h3>Gestão de pessoas e de recursos humanos</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse14" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                Modelo e estrutura definidos para gestão dos que atuam em uma organização, independente de seu vínculo profissional ou empresarial, sob a ótica dos processos de seleção, contratação, manutenção, desenvolvimento, sucessão e desligamento.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="TecnologiaInformacao">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15" style="background-color: #4885AE;color:white">
                                    <h3>Tecnologia da informação e informação</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse15" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                Estrutura de recursos de natureza tecnológica, em termos de hardware e software, que proporcionam a melhor especificação, desenvolvimento, aplicação e manutenção de sistemas de informação e de comunicação.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="GestaoEstoque">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16" style="background-color: #4885AE;color:white">
                                    <h3>Compras e gestão de estoques</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse16" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                Modelo e estrutura organizacional que proporciona adequada eficiência no processo de aquisição e conseqüente gestão dos estoques de insumos a serem utilizados no processo operacional de uma organização.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="Serviços">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17" style="background-color: #4885AE;color:white">
                                    <h3>Serviços</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse17" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                Modelo e estrutura organizacional que viabiliza a prestação de serviços internos de apoio e suporte a todas as áreas e unidades que compõem a organização.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <p class="Texto">
                Finalmente, quanto à <strong>dimensão conformidade</strong>, algumas das características organizacionais para as quais os riscos devem ser observados estão apresentadas abaixo:
            </p>

            <section id="AmbienteRegulatorio">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                    <h3>Ambiente regulatório</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse18" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                Estrutura institucional que submete uma organização a critérios de natureza econômica e social definidos pelo Estado em relação a determinados serviços públicos que lhe são delegados.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="JurídicoLegal">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                    <h3>Jurídico e legal</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse19" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                Ações que assegurem eficiência e eficácia na gestão financeira de bens, direitos e obrigações de uma organização.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="CodigoConduta">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                    <h3>Código de conduta</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse20" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                Conjunto de requisitos de natureza ética e moral que devem ser seguidos por todos os que atuam em uma organização.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <p class="Texto">
            Enfim, os riscos que interessam neste curso são os relativos à dinâmica de gestão de uma organização no contexto de sua perspectiva estratégica, financeira, operacional e de regulação, considerando ainda sua razão de ser e os interesses das diversas partes relacionadas. 
            </p>

            <div>
                <p class="CuriosidadeTitulo"> Curiosidade</p>

                <p class="CuriosidadeTexto">A Secretaria Estadual de Saúde do Estado XZPTO em seu planejamento estratégico para o quadriênio 2016 a 2019 definiu os seguintes objetivos:
                </p>

                <p class="CuriosidadeTexto">
                <i class="fas fa-check" style="color:#FC6B30;"></i>  fornecer serviços de saúde para a população do estado, priorizando os indivíduos de menor renda.
                </p>
                <p class="CuriosidadeTexto">
                <i class="fas fa-check" style="color:#FC6B30;"></i>  contribuir para a redução da morte infantil por falta de atendimento aos recém-nascidos. 
                </p>
                <p class="CuriosidadeTexto">
                <i class="fas fa-check" style="color:#FC6B30;"></i>  contribuir para a redução de nascimento não desejado, principalmente entre as adolescentes, na faixa dos 12 aos 18 anos. 
                </p>
                <p class="CuriosidadeTexto">
                <i class="fas fa-check" style="color:#FC6B30;"></i>  fornecer medicamentos essenciais à vida gratuitamente ou a preços condizentes com a renda dos beneficiários envolvidos em situação de doença grave ou terminal. 
                </p>
                <p class="CuriosidadeTexto">
                <i class="fas fa-check" style="color:#FC6B30;"></i>  zelar pela qualidade do serviço médico oferecido pelos hospitais e pelos postos de saúde do Estado. 
                </p>

                <p class="CuriosidadeTexto">
                Durante esse quadriênio, a Secretaria resolveu avaliar o Departamento de Aquisição e Logística, responsável por adquirir e distribuir material hospitalar, médico e farmacêutico para os Hospitais e postos de saúde do Estado XZPTO. Nesse departamento temos dois setores: o de compras e o de almoxarifado.
                </p>

                <p class="CuriosidadeTexto">
                O setor de compras é responsável por adquirir:
                </p>
                <p class="CuriosidadeTexto">
                <i class="fas fa-arrow-right" style="color:#FC6B30;"></i>  material hospitalar para cirurgias programadas e emergenciais;
                </p>
                <p class="CuriosidadeTexto">
                <i class="fas fa-arrow-right" style="color:#FC6B30;"></i>  bens e equipamentos para as instalações dos hospitais;
                </p>
                <p class="CuriosidadeTexto">
                <i class="fas fa-arrow-right" style="color:#FC6B30;"></i>  remédios essenciais à vida, direcionados a doenças graves e terminais; e
                </p>
                <p class="CuriosidadeTexto">
                <i class="fas fa-arrow-right" style="color:#FC6B30;"></i>  fornecer medicamentos essenciais à vida gratuitamente ou a preços condizentes com a renda dos beneficiários envolvidos em situação de doença grave ou terminal. 
                </p>
                <p class="CuriosidadeTexto">
                <i class="fas fa-arrow-right" style="color:#FC6B30;"></i>  preservativos para distribuição gratuita nos postos de saúde.
                </p>

                <p class="CuriosidadeTexto">O setor de almoxarifado recebe os produtos adquiridos, estoca e atende às demandas dos hospitais e postos de saúde.
                </p>
                <p class="CuriosidadeTexto">Considerando as competências do departamento e dos setores, reflita sobre o gerenciamento dos riscos e responda às perguntas a seguir:
                </p>

                <p class="CuriosidadeTexto">
                <i class="fas fa-bullseye" style="color:#FC6B30;"></i>  Como você categorizaria os riscos que podem afetar esse departamento? 
                </p>
                <p class="CuriosidadeTexto">
                <i class="fas fa-bullseye" style="color:#FC6B30;"></i>  Quais os eventos relevantes que podem representar riscos para o cumprimento das competências do departamento? 
                </p>
                <p class="CuriosidadeTexto">
                <i class="fas fa-bullseye" style="color:#FC6B30;"></i>  Relacione no mínimo 10 riscos que decorrem dos possíveis eventos. A partir dos eventos relacionados que revisão você faria na categorização? 
                </p>
            </div>


            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Apresentacao.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico01.2.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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