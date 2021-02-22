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
            <div class="page-title">
                <h2 class="font-bold" style="color: #008445;">
                    Apresentação
                </h2>
                    <p class="Texto">
                        Esta aula apresenta uma visão geral sobre o gerenciamento de riscos abordando, sob uma perspectiva ampla, as situações que podem ou não ser consideradas como riscos, bem como aqueles que interessam no âmbito das organizações. Além disso, a aula apresenta argumentos que justificam a razão pela qual os riscos devem ser gerenciados, o que significa esse gerenciamento e como ele pode ser conduzido. Na sequência, aborda-se uma metodologia de gerenciamento de riscos e, finalmente, apresenta-se o gerenciamento de riscos sob a ótica do órgão central de controle interno do Poder Executivo do Estado do Ceará, no bojo do Programa de Fortalecimento do Controle Interno.
                    </p>

                <br>
                <hr>
                <h2 class="font-bold" style="color: #008445;">
                    Objetivo
                </h2>
                    <p class="Texto">
                        <i class="fas fa-bullseye" style="color: #FC6B30;"></i> Proporcionar ao aluno conhecimentos gerais sobre o processo de gerenciamento de riscos, contemplando inicialmente uma visão sobre o que são e o que não são riscos e a indicação dos que interessam às organizações, seguida de definições sobre gerenciamento de riscos e das formas de exercê-lo, e, por último, a apresentação de uma metodologia de gerenciamento de riscos e da perspectiva da CGE sobre esse tema
                    </p>

            </div> <!-- CLASS PAGE TITLE FIM -->
            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                        <a href="Topico01.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
                </div>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>