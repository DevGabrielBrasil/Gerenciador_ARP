<?php
    if(isset($POST['Cadastrar'])){
        $nome = $_POST['nome_produto'];
        $datafim =$_POST['criacao_da_ata'];
        $vencimento =$_POST['vencimento_ata'];
        $responsavel =$_POST['responsavel'];
        $foto =$_POST['foto_produto'];
        $arquivo =$_POST['arquivo'];
    }
    $host = "localhost";
    $banco = "cadastro_arp";
    $user = "root";
    $senha_user = "";

    $con = mysqli_connect($host,$user,$senha_user,$banco);

    $sql = "INSERT INTO arp(produto,criacao_ata,vencimento_ata,responsavel,foto_produto,arquivo) VALUES('$nome','$datafim','$vencimento','$responsavel','$foto',' $arquivo' )";

    $rs = mysqli_query($con, $sql);

    if($rs){
        echo "Você cadastrou uma nova ARP";
    }

?>