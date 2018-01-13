<?php
    include ('PDF/mpdf.php');

    $con = mysqli_connect("localhost","root", "", "pdf");

    $id = "2";
    $query = "SELECT * FROM usuarios WHERE id = '$id' LIMIT 1";
    $resultado = mysqli_query($con, $query);
    $linha = mysqli_fetch_assoc($resultado);

    $pagina = "<html>
                    <body>
                    <div class='a'>
                        <h2>Informações do usuario</h2><br>
                        <div>Id do usuario: ".$linha['id']."<br>
                        Nome do usuario: ".$linha['nome']."<br>
                        Email do usuario: ".$linha['email']."<br></div>
                    </div>
                    </body>
                </html>";

    $mpdf = new mPDF();
    $mpdf->SetDisplayMode('fullpage');
    $css = file_get_contents("css/estilo.css");
    $mpdf->writeHTML($css, 1);
    $mpdf->writeHTML($pagina);
    $mpdf->Output();

    exit;
?>