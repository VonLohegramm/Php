<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset = "utf-8">
        <title>Contato</title>
    </head>
    <body><?php
        $arquivo = 'contato.xls';

        $html = '';
        $html .= '<table border = "1">';
        $html .= '<tr>';
        $html .= '<td colspan="3">Planilha</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td><b>ID</b></b></td>';

        $html .= '<td><b>Nome</b></b></td>';

        $html .= '<td><b>Email</b></b></td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td><b>1</b></b></td>';

        $html .= '<td><b>Eduardo</b></b></td>';

        $html .= '<td><b>eduardo@gmail.com</b></b></td>';
        $html .= '</tr>';

        $html .= '</table>';


        header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
        header ("Cache-Control: no-cache, must-revalidate");
        header ("Pragma: no-cache");
        header ("Content-type: application/x-msexcel");
        header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
        header ("Content-Description: PHP Generated Data" );


        //Colocar conteudo no arquivo
        echo $html;
        exit;
        ?>
    </body>
</html>