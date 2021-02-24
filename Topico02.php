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
            <h2 class="font-bold LaranjaEstado">
                <i class="fas fa-folder"></i> 2 – Gerenciamento de Riscos
            </h2>

            <hr>

            <p class="Texto"><strong>Objetivo:</strong>  Proporcionar aos alunos conhecimentos básicos sobre as razões pelas quais os riscos devem ser gerenciados, o significado do processo de gerenciamento de riscos e as principais formas de como proceder a esse gerenciamento.</p>
            

            <h2 class="font-bold LaranjaEstado">
                <i class="fas fa-folder"></i> 02.1 - Por que gerenciar riscos?
            </h2>

            <hr class="hrLaranja">

            <p class="Texto">
                Tendo em vista o que até aqui foi exposto, especialmente em relação ao escopo dos riscos que devem ser de interesse em uma organização, na seção precedente, pode-se inferir, naturalmente, que tais situações merecem e devem ser objeto de atenção específica por parte dos gestores e técnicos em uma organização. 
            </p>
            <p class="Texto">
                Tanto assim que entidades, como, por exemplo, a <span style="color:#FC6B30;">The International Organisation of Supreme Audit Institutions </span>(Organização Internacional de Entidades Fiscalizadoras Superiores), prescrevem que <strong>quaisquer entidades públicas ou privadas </strong>estão condicionadas a eventos, incidentes ou ocorrências provocados por origens internas ou externas e que acarretam conseqüências positivas ou negativas aos seus correspondentes desempenhos (INTOSAI, 2007).
            </p>
            <p class="Texto">
                Já o Ministério da Economia e Finanças do Reino Unido afirma que
            </p>

            <div class="col-md-12">
                <blockquote class="blockquoteEad">
                    <p class="mb-0">“qualquer que seja o propósito de uma organização, o alcance de seus objetivos está cercado pela incerteza que tanto apresenta ameaça como oferece oportunidades para seu sucesso.”
                    </p>
                    <footer class="blockquote-footer">( HM TREASURY, 2004) –</footer>
                </blockquote>
            </div>
            <br>

            <p class="Texto">
                No âmbito da abordagem de Hill (2006, p. 38), como o risco faz parte das rotinas pessoal e profissional de cada um, sua gestão requer
            </p>


            <p class="Texto">
            Já a CGU e o MPOG, no âmbito da IN no 01/2016, consideram como objetivos da gestão de riscos: 
            </p>

            <div class="col-md-12">
                <blockquote class="blockquoteEad">
                    <p class="mb-0">“Art. 15. São objetivos da gestão de riscos:
                    </p>
                    <p class="mb-0">I – assegurar que os responsáveis pela tomada de decisão, em todos os níveis do órgão ou entidade, tenham acesso tempestivo a informações suficientes quanto aos riscos aos quais está exposta a organização, inclusive para determinar questões relativas à delegação, se for o caso; 
                    </p>
                    <p class="mb-0">II – aumentar a probabilidade de alcance dos objetivos da organização, reduzindo os riscos a níveis aceitáveis; e 
                    </p>
                    <p class="mb-0">III – agregar valor à organização por meio da melhoria dos processos de tomada de decisão e do tratamento adequado dos riscos e dos impactos negativos decorrentes de sua materialização. ”
                    </p>
                    <footer class="blockquote-footer">( GGU, 2016) –</footer>
                </blockquote>
            </div>
            <br>

            <p class="Texto">
                Retornando ao Decreto nº 29.388/2008 (CGE, 2016), que institui a auditoria preventiva com foco em riscos no Poder Executivo do Estado do Ceará, observa-se que a instituição dessa abordagem de Auditoria prevista em seu art. 1º está associada ao correspondente conceito, o qual traz em seu conteúdo o objetivo para gerenciamento de risco, como a seguir indicado:
            </p>

            <div class="col-md-12">
                <blockquote class="blockquoteEad">
                    <p class="mb-0">“Art.2º Considera-se Auditoria Preventiva o conjunto de abordagens de auditoria exercidas sob a forma de orientação aos gestores públicos, buscando contribuir para assegurar condições que viabilizem o cumprimento dos objetivos institucionais de um Órgão ou Entidade, no âmbito de sua função de controle interno, integrante do correspondente processo de gestão.”
                    </p>
                </blockquote>
            </div>
            <br>

            <p class="Texto">
                Diante do exposto, entende-se que as razões pelas quais os riscos devem ser gerenciados passam pelo fato de que a adoção de práticas e instrumentos de gestão de riscos contribuem para a melhoria do processo de tomada de decisões e, consequentemente, elevam as chances de alcance de melhores resultados, considerando-se que as situações caracterizadoras de riscos são inerentes e estão presentes em qualquer tipo de organização (pública, privada e do terceiro setor).
            </p>

            <div>
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto">Assista ao vídeo <a href="https://www.youtube.com/watch?v=bupdTphdB48">“Até os Ratos precisam gerenciar os riscos”</a></p>
                </div>


            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico01.2.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico02.2.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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