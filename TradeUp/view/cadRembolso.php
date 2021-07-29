<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>SOLICITAÇÃO DE REEMBOLSO</title>

    <!-- CSS-->
    <style type="text/css">
        .style1 {
            color: #FF0000;
            font-size: x-small;
        }

        .style3 {
            color: #0000FF;
            font-size: x-small;
        }
    </style>
    <!--Fim do CSS-->

    <!--Inicio do JavaScript que valida os campos de preenchimento obrigatorio -->

        <script type="text/javascript">
        function validaCampo() {
            event.preventDefault();
            if (document.cadastro.nome.value == "") {
                alert("O preenchimento deste campo e obrigatorio");
                // event.preventDefault();
                return false;
            }
            else
                if (document.cadastro.identificacao.value == "") {
                    alert("O preenchimento deste campo e obrigatorio");
                    // event.preventDefault();
                    return false;
                }
                else
                    if (document.cadastro.funcao.value == "") {
                        alert("O preenchimento deste campo e obrigatorio");
                        // event.preventDefault();
                        return false;
                    }
                    else
                        if (document.cadastro.solicitacao.value == "") {
                            alert("O preenchimento deste campo e obrigatorio");
                            // event.preventDefault();
                            return false;
                        }
                        else
                            if (document.cadastro.descricao.value == "") {
                                alert("O preenchimento deste campo e obrigatorio");
                                // event.preventDefault();
                                return false;
                            }
                            else
                                if (document.cadastro.valor.value == "") {
                                    alert("O preenchimento deste campo e obrigatorio");
                                    // event.preventDefault();
                                    return false;
                                }
                                else
                                    if (document.cadastro.dataSolicitacao.value == "") {
                                        alert("O preenchimento deste campo e obrigatorio");
                                        // event.preventDefault();
                                        return false;
                                    }
                                //     $.ajax({

                                //         type: "POST",

                                //         url: "cadastro.php",

                                //         //alert (url);

                                //         data: new FormData($("#cadastro")[0]),

                                //         cache:false,

                                //         contentType:false,

                                //         processData:false,

                                //         async:true,
                                        
                                //         success: function(){

                                //         console.log ("Sucesso no envio");

                                //         //alert(dados);

                                //         }
                                // });
        }
    </script>
    <!--Fim do JavaScript que valida os campos de preenchimento obrigatorio -->
</head>

<body>
    <!--Campos de preenchimento-->
    <form id="cadastro" name="cadastro" method="POST" action="./controller/cadastro.php">
        <table>
            <div>
                <div width="69">Nome:</div>
                <div width="546">
                    <input name="nome" type="text" id="nome" size="70" maxlength="60"/>
                    <span class="style1">*</span>
                </div>
            </div>
            <div>
                <div>Identificação:
                </div>
                <div>
                    <input name="identificacao" type="text" id="identificacao" maxlength="11">
                </div>
            </div>
            <div>
                <div>Função:
                </div>
                <div>
                    <input name="funcao" type="text" id="funcao" maxlength="80">
                </div>
            </div>
            <div>
                <div>Tipo de Solicitação:
                </div>
                <div>
                    <input name="solicitacao" type="text" id="solicitacao" maxlength="20">
                </div>
            </div>
            <div>
                <div>Descrição:
                </div>
                <div>
                    <input name="descricao" type="text" id="descricao" maxlength="200">
                </div>
            </div>
            <div>
                <div>Valor:
                </div>
                <div>
                    <input name="valor" type="text" id="valor" maxlength="10">
                </div>
            </div>
            <div>
                <div>Data:
                </div>
                <div>
                    <input name="dataSolicitacao" type="date" id="dataSolicitacao" value="teste">
                </div>
            </div>
            
            <tr>
                <td colspan="2"><input name="news" type="checkbox" id="news" value="ATIVO" checked="checked" />
                    Desejo receber novidades e informa&ccedil;&otilde;es sobre o conte&uacute;do deste site. </td>
            </tr>
            <!--Fim dos campos de preenchimento-->

            <!--Botões-->
            <tr>
                <td colspan="2">
                    <p>

                        <button onclick="validaCampo()">
                            Cadastre!    
                        </button>

                        <input name="cadastrar" type="submit" id="cadastrar" value="Concluir meu Cadastro!" />
                        <br><br>
                        <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
                        <br />
                        <span class="style1">* Campos com * s&atilde;o obrigat&oacute;rios! </span>
                    </p>
                    <p>&nbsp; </p>
                </td>
            </tr>
        </table>
    </form>

    <!--ETAPA DE EDIÇÃO DE VALOR-->
    <table>
        <?php 
            require_once "controller/cadastro.php";
            $controller_reembolso = new reembolsoController;
            $lista_reembolso = $controller_reembolso -> listar();
        ?>
        <tr>
            <td>NOME</td>
            <td>ID</td>
            <td>FUNÇÃO</td>
            <td>SOLICITAÇÃO</td>
            <td>DESCRIÇÃO</td>
            <td>VALOR</td> 
            <td>DATA</td>
            <td>Botões</td>
        </tr>
        <?php
                    foreach ($lista_reembolso as $key => $value) {
                                                       
                ?>
        <tr>
            <td>
                <?=$value['0']?>
            </td>
            <td>
                <?=$value['1']?>
            </td>
            <td>
                <?=$value['2']?>
            </td>
            <td>
                <?=$value['3']?>
            </td>
            <td>
                <?=$value['4']?>
            </td>
            <td>
                <?=$value['5']?>
            </td>
            <td>
                <?=$value['6']?>
            </td>
            <td>
                <input name="Editar" type="submit" id="cadastrar" value="Editar" />
                <input name="Excluir" type="submit" id="cadastrar" value="Excluir" />
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>

</html>
