<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cadastro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">


  <style>
  .switch {
    position: relative;
    display: inline-block;
    width: 30px;
    height: 17px;
  }

  .switch input {display:none;}

  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .2s;
    transition: .2s;
  }

  .slider:before {
    position: absolute;
    content: "";
    height: 13px;
    width: 13px;
    left: 2px;
    bottom: 2px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }

  input:checked + .slider {
    background-color: #2196F3;
  }

  input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
  }

  input:checked + .slider:before {
    -webkit-transform: translateX(13px);
    -ms-transform: translateX(13px);
    transform: translateX(13px);
  }

  /* Rounded sliders */
  .slider.round {
    border-radius: 17px;
  }

  .slider.round:before {
    border-radius: 50%;
  }

  /* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
  </style>


</head>

<body class="hold-transition skin-blue sidebar-mini">



  <h1><center>Cadastro de Currículo</center></h1>

  <form method="POST" action="/cadastro" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="container">

    <h3>Dados Pessoais</h3>

    <hr />

      <div class="form-group">
        <label for="nome">Nome Completo</label>
        <input type="text" size="255" maxlength="255" id="nome" name="nome" align="middle" class="form-control"  style="width: 450px;height:30px; display: inline-block;" placeholder="Nome">
      </div>

      <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" class="form-control" style="width: 250px;height:30px; display: inline-block;"placeholder="000.000.000-00">
        <label for="data">Data de Nascimento</label>
        <input type="date" name="data" id="data" value=""/>
        <button type="button" class="btn btn-primary btn-sm daterange " data-toggle="tooltip" title="Date range">
        <i class="fa fa-calendar"></i></button>
      </div>



      <div class="form-group">
        <label for="rg">RG</label>
        <input type="text" id="rg" name="rg" class="form-control" style="width: 250px;height:30px; display: inline-block;"placeholder="00.000.000-0">
      </div>

      <div class="form-group">
        <label for="email">E-Mail</label>
        <input type="email" size="255" maxlength="255" id="email" name="email" class="form-control" style="width: 450px;height:30px; display: inline-block;" placeholder="email@email.com">
      </div>

      <div class="form-group">
        <label for="tel">Telefone</label>
        <input type="tel" id="codigoAreaT" name="codigoAreaT" style="width: 50px;height:30px; display: inline-block;" class="form-control" placeholder="00">
        <input type="tel" id="tel" name="tel" style="width: 200px;height:30px; display: inline-block;" class="form-control" placeholder="0000-0000">
        <label for="cel">Celular</label>
        <input type="tel" id="codigoAreaC" name="codigoAreaC" style="width: 50px;height:30px; display: inline-block;" class="form-control" placeholder="00">
        <input type="tel" id="cel" name="cel" style="width: 200px;height:30px; display: inline-block;" class="form-control" placeholder="00000-0000">
      </div>

      <div class="form-group">
        <label for="civil">Estado Civil</label>
        <select id=cbcivil>
          <option>Selecione</option>
          <option>Solteiro(a)</option>
          <option>Casado(a)</option>
          <option>Viúvo(a)</option>
          <option>Divorciado(a)</option>
        </select>
        <label for="sexo">Sexo</label>
        <select id=cbsexo>
          <option>Selecione</option>
          <option>Feminino</option>
          <option>Masculino</option>
        </select>
      </div>

</div>

<div class="container">

  <h3>Endereço</h3>

  <hr />


    <div class="form-group">
      <label for="cep">CEP</label>
      <input type="text" id="cep" name="cep" style="width: 200px;height:30px; display: inline-block;" class="form-control" placeholder="00000-000">
    </div>

    <div class="form-group">
      <label for="cidade">Cidade</label>
      <input type="text" size="255" maxlength="255" id="cidade" name="cidade" style="width: 250px;height:30px; display: inline-block;" class="form-control" placeholder="Cidade">
      <label for="uf">UF</label>
      <input type="text" size="2" maxlength="2" id="uf" name="uf" style="width: 50px;height:30px; display: inline-block;" class="form-control" placeholder="UF">
    </div>

    <div class="form-group">
      <label for="endereco">Logradouro</label>
      <input type="text" size="255" maxlength="255" id="endereco" name="endereco" style="width: 450px;height:30px; display: inline-block;" class="form-control" placeholder="Endereço">
    </div>

    <div class="form-group">
      <label for="bairro">Bairro</label>
      <input type="text" size="255" maxlength="255" id="bairro" name="bairro" style="width: 250px;height:30px; display: inline-block;" class="form-control" placeholder="Bairro">
    </div>

</div>

<div class="container">

  <h3>Redes Sociais</h3>

  <hr />

    <div class="form-group">
      <label for="linkedin">LinkedIn</label>
      <input type="url"id="linkedin" name="linkedin" style="width: 250px;height:30px; display: inline-block;" class="form-control" placeholder="LinkedIn">
    </div>

    <div class="form-group">
      <label for="lattes">Lattes</label>
      <input type="url" id="lattes" name="lattes" style="width: 250px;height:30px; display: inline-block;" class="form-control" placeholder="Lattes">
    </div>

    <div class="form-group">
      <label for="outrasredes">Outros</label>
      <input type="url" id="outrasredes" name="outrasredes" style="width: 250px;height:30px; display: inline-block;" class="form-control" placeholder="Outros">
    </div>

</div>

<div class="container">

  <h3>Áreas de Interesse</h3>

  <hr />

  <div>

    <table>
      <tr>
        <td>
          <label class="switch">
            <input id=desmob type="checkbox" >
            <div class="slider round"></div>
          </label>
          <label for="desmob">Desenvolvimento Mobile</label>
          </td>

          <td>
          <label class="switch">
            <input id=seginfra type="checkbox" >
            <div class="slider round"></div>
          </label>
          <label for="seginfra">Segurança e Infraestrutura</label>
        </td>
      </tr>

      <tr>
        <td>
          <label class="switch">
            <input id=desweb type="checkbox" >
            <div class="slider round"></div>
          </label>
          <label for="desweb">Desenvolvimento Web</label>
        </td>

        <td>
          <label class="switch">
            <input id=visdados type="checkbox" >
            <div class="slider round"></div>
          </label>
          <label for="visdados">Visualização de Dados</label>
        </td>

      </tr>

      <tr>
        <td>
          <label class="switch">
            <input id=bd type="checkbox" >
            <div class="slider round"></div>
          </label>
          <label for="bd">Banco de Dados</label>
        </td>

        <td>
          <label class="switch">
            <input id=requisitos type="checkbox" >
            <div class="slider round"></div>
          </label>
          <label for="requisitos">Levantamento de Requisitos</label>
        </td>
      </tr>

      <tr>

        <td>
          <label class="switch">
            <input id=testes type="checkbox" >
            <div class="slider round"></div>
          </label>
          <label for="testes">Testes</label>
        </td>

        <td>
          <label class="switch">
            <input id=gestproj type="checkbox" >
            <div class="slider round"></div>
          </label>
          <label for="gestproj">Gestão de Projetos</label>
        </td>

      </tr>

    </table>
  </div>


</div>

<div class="container">

  <h3>Outras Informações</h3>

  <hr />

    <div class="form-group">
      <label for="info">Resumo</label>
      <textarea id="info" size="250" maxlength="250" name="info"  style="width: 450px;height:80px; display: inline-block;" placeholder="Faça um breve resumo de sua carreira, interesses, qualidades profissionais e acadêmicas (até 250 caracteres)."></textarea>
    </div>
    <div>
      <label for="salario">Pretenção de Recebimento R$ </label>
      <input type="text" id="salario" name="salario" style="width: 100px;height:30px; display: inline-block;"class="form-control" >
      <label for="salario2">ao mês </label>
    </div>


</div>

<div class="container">

  <h3>Formação Acadêmica</h3>

  <hr />

    <div class="form-group">
      <label for="curso">Curso</label>
      <input type="text" id="curso" name="curso" style="width: 250px;height:30px; display: inline-block;" class="form-control" placeholder="Curso">
      <label for="tcurso">Tipo de Curso</label>
      <select id=cbtcurso>
        <option>Selecione</option>
        <option>Licenciatura</option>
        <option>Bacharelado</option>
        <option>Tecnológico</option>
        <option>Pós-Graduação Latto Sensu</option>
        <option>Mestrado</option>
        <option>Doutorado</option>
        <option>Pós-Doutorado</option>
      </select>
    </div>

    <div class="form-group">
      <label for="insti">Instituição</label>
      <input type="text" id="inst" name="inst" style="width: 450px;height:30px; display: inline-block;" class="form-control" placeholder="Instituição">
    </div>

    <div class="form-group">
      <label for="pais">País</label>
      <input type="text" id="pais" placeholder="País" name="pais" style="width: 250px;height:30px; display: inline-block;" class="form-control">
    </div>

    <div class="form-group">
      <label for="facidade">Cidade</label>
      <input type="text" id="facidade" name="facidade" style="width: 250px;height:30px; display: inline-block;" class="form-control" placeholder="Cidade">
      <label for="fauf">UF</label>
      <input type="text" id="fauf" name="fauf" placeholder="UF" style="width: 50px;height:30px; display: inline-block;" class="form-control">
    </div>

    <div class="form-group">
      <label for="satual">Situação atual</label>
      <select id=cbsatual>
        <option>Selecione</option>
        <option>Concluído</option>
        <option>Cursando</option>
      </select>
     </div>

  <div class="form-group">
      <label for="dataInicio">Início</label>
      <input type="date" id="dataInicio" name="dataInicio" >
      <button type="button" class="btn btn-primary btn-sm daterange " data-toggle="tooltip" title="Date range">
      <i class="fa fa-calendar"></i></button>

      <label for="dataFim">Data de Conclusão</label>
      <input type="date" id="dataFim" name="dataFim" >
      <button type="button" class="btn btn-primary btn-sm daterange " data-toggle="tooltip" title="Date range">
      <i class="fa fa-calendar"></i></button>

    </div>

    <div class="form-group">
      <label for="cr">C.R.</label>
      <input type="text" id="cr" name="cr" style="width: 50px;height:30px; display: inline-block;" class="form-control" placeholder="C.R.">
    </div>

    <div class="form-group">

        {{ csrf_field() }}

        <input type="file" name="historico" value="">

    </div>

    <div class="form-group">
      Adicionar
    </div>



</div>

<div class="container">

  <h3>Aperfeiçoamento</h3>

  <hr />

    <div class="form-group">
      <label for="tipo">Tipo</label>
      <select id=cbtipo>
        <option>Selecione</option>
        <option>Curso de aperfeiçoamento</option>
        <option>Certificação</option>
        <option>Atividades Complementares</option>
        <option>Projetos voluntários</option>
        <option>Prêmios</option>
      </select>
    </div>

    <div class="form-group">
      <label for="apnome">Nome</label>
      <input type="text" id="apnome" name="apnome"  style="width: 450px;height:30px; display: inline-block;" class="form-control" placeholder="Nome">
    </div>

    <div class="form-group">
      <label for="apinsti">Instituição</label>
      <input type="text" id="apinst" name="apinst"  style="width: 450px;height:30px; display: inline-block;" class="form-control" placeholder="Instituição">
    </div>

    <div class="form-group">
      <label for="horaria">Carga horária</label>
      <input type="text" id="horaria" name="horaria" style="width: 100px;height:30px; display: inline-block;" class="form-control" placeholder="C.H.">
      <label for="apdata">Data de realização</label>
      <input type="date" id="apdata" name="apdata" >
      <button type="button" class="btn btn-primary btn-sm daterange " data-toggle="tooltip" title="Date range">
      <i class="fa fa-calendar"></i></button>
    </div>

    <div class="form-group">
      Adicionar
    </div>

</div>

<div class="container">

  <h3>Idiomas</h3>



  <table>

      <tr>
        <td></td>
        <td>&nbsp;</td>
        <td colspan="2">Básico</td>
        <td>&nbsp;</td>
        <td colspan="2">Intermediário</td>
        <td>&nbsp;</td>
        <td colspan="2">Avançado</td>
        <td>&nbsp;</td>
      </tr>

    <tr>
      <td></td>
      <td>&nbsp;</td>
      <td>A1</td>
      <td>A2</td>
      <td>&nbsp;</td>
      <td>B1</td>
      <td>B2</td>
      <td>&nbsp;</td>
      <td>C1</td>
      <td>C2</td>
      <td>&nbsp;</td>
    </tr>

    <fieldset>
      <tr>

        <td>Inglês</td>

        <td>&nbsp;</td>

        <div class="form-group">
          <td>
            <input type="radio" id="ia1" name="ingles" />
            <label for="ia1"></label>
          </td>

        <td>
          <input type="radio" id="ia2" name="ingles" />
          <label for="ia2"></label>
        </td>

      </div>

      <td>&nbsp;</td>

      <div class="form-group">

        <td>
          <input type="radio" id="ib1" name="ingles" />
          <label for="ib1"></label>
        </td>

        <td>
          <input type="radio" id="ib2" name="ingles" />
          <label for="ib2"></label>
        </td>

        <td>&nbsp;</td>

      </div>

      <div class="form-group">
        <td>
          <input type="radio" id="ic1" name="ingles" />
          <label for="ic1"></label>
        </td>

        <td>
          <input type="radio" id="ic2" name="ingles" />
          <label for="ic2"></label>
        </td>
      </div>

      <td>&nbsp;</td>

    </tr>
  </fieldset>

  <fieldset>
        <tr>

          <td>Francês</td>

          <td>&nbsp;</td>

            <td>
              <input type="radio" id="fa1" name="frances" />
              <label for="fa1"></label>
            </td>

            <td>
              <input type="radio" id="fa2" name="frances" />
              <label for="fa2"></label>
            </td>

            <td>&nbsp;</td>

            <td>
              <input type="radio" id="fb1" name="frances" />
              <label for="fb1"></label>
            </td>

            <td>
              <input type="radio" id="fb2" name="frances" />
              <label for="fb2"></label>
            </td>

            <td>&nbsp;</td>

            <td>
              <input type="radio" id="fc1" name="frances" />
              <label for="fc1"></label>
            </td>

            <td>
              <input type="radio" id="fc2" name="frances" />
              <label for="fc2"></label>
            </td>

            <td>&nbsp;</td>

        </tr>

    </fieldset>


    <fieldset>
        <tr>

          <td>Espanhol</td>

          <td>&nbsp;</td>

          <td>
            <input type="radio" id="ea1" name="esp" />
            <label for="ea1"></label>
          </td>

          <td>
            <input type="radio" id="ea2" name="esp" />
            <label for="ea2"></label>
          </td>

          <td>&nbsp;</td>

          <td>
            <input type="radio" id="eb1" name="esp" />
            <label for="eb1"></label>
          </td>

          <td>
            <input type="radio" id="eb2" name="esp" />
            <label for="eb2"></label>
          </td>

          <td>&nbsp;</td>

          <td>
            <input type="radio" id="ec1" name="esp" />
            <label for="ec1"></label>
          </td>

          <td>
            <input type="radio" id="ec2" name="esp" />
            <label for="ec2"></label>
          </td>

          <td>&nbsp;</td>

      </tr>
    </fieldset>

    <fieldset>
      <tr>

        <td>
          <input type="text" id="ioutros" name="ioutros" style="width: 130px;height:30px; display: inline-block;" class="form-control" placeholder="Outros">
        </td>

        <td>&nbsp;</td>

        <td>
          <input type="radio" id="oa1" name="outros" />
          <label for="oa1"></label>
        </td>

        <td>
          <input type="radio" id="oa2" name="outros" />
          <label for="oa2"></label>
        </td>

        <td>&nbsp;</td>

        <td>
          <input type="radio" id="ob1" name="outros" />
          <label for="ob1"></label>
        </td>

        <td>
          <input type="radio" id="ob2" name="outros" />
          <label for="ob2"></label>
        </td>

        <td>&nbsp;</td>

        <td>
          <input type="radio" id="oc1" name="outros" />
          <label for="oc1"></label>
        </td>

        <td>
          <input type="radio" id="oc2" name="outros" />
          <label for="oc2"></label>
        </td>

        <td>&nbsp;</td>

      </tr>
    </fieldset>
    <tr>

      <td colspan="10">&nbsp;</td>

      <td>
        <div class="popup" onclick="myFunction()"><i class="glyphicon glyphicon-question-sign" style="font-size:20px"></i>
          <span class="popuptext" id="myPopup">Entenda o CERF</span>
        </div>
        <script>
          function myFunction() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
          }
        </script>
      </td>
    </tr>

  </table>

</div>

<div class="container">

  <h3>Tecnologias</h3>

  <fieldset>

    <table>

      <tr>
        <td colspan="2">Desenvolvimento web</td>
      </tr>

    <tr>
      <td>&nbsp;</td>

      <td>HTML5</td>

      <td>&nbsp;</td>

      <td>
        <input type="radio" id="w0" name="desenweb" />
        <label for="w0">0</label>
      </td>

      <td>&nbsp;</td>

      <td>
        <input type="radio" id="w1" name="desenweb" />
        <label for="w1">1</label>
      </td>

      <td>&nbsp;</td>

      <td>
        <input type="radio" id="w2" name="desenweb" />
        <label for="w2">2</label>
      </td>

      <td>&nbsp;</td>

      <td>
        <input type="radio" id="w3" name="desenweb" />
        <label for="w3">3</label>
      </td>

      <td>&nbsp;</td>

      <td>
        <input type="radio" id="w4" name="desenweb" />
        <label for="w4">4</label>
      </td>

    </tr>

    <tr>
      <td>&nbsp;</td>

      <td>Java Script</td>

      <td>&nbsp;</td>

      <td>
        <input type="radio" id="j0" name="desenweb2" />
        <label for="j0">0</label>
      </td>

      <td>&nbsp;</td>

      <td>
        <input type="radio" id="j1" name="desenweb2" />
        <label for="j1">1</label>
      </td>

      <td>&nbsp;</td>

      <td>
        <input type="radio" id="j2" name="desenweb2" />
        <label for="j2">2</label>
      </td>

      <td>&nbsp;</td>

      <td>
        <input type="radio" id="j3" name="desenweb2" />
        <label for="j3">3</label>
      </td>

      <td>&nbsp;</td>

      <td>
        <input type="radio" id="j4" name="desenweb2" />
        <label for="j4">4</label>
      </td>

    </tr>

    <tr>
      <td>&nbsp;</td>

      <td>Css3</td>

      <td>&nbsp;</td>

      <td>
        <input type="radio" id="c0" name="desenweb3" />
        <label for="c0">0</label>
      </td>

      <td>&nbsp;</td>

      <td>
        <input type="radio" id="c1" name="desenweb3" />
        <label for="c1">1</label>
      </td>

      <td>&nbsp;</td>

      <td>
        <input type="radio" id="c2" name="desenweb3" />
        <label for="c2">2</label>
      </td>

      <td>&nbsp;</td>

      <td>
        <input type="radio" id="c3" name="desenweb3" />
        <label for="c3">3</label>
      </td>

      <td>&nbsp;</td>

      <td>
        <input type="radio" id="c4" name="desenweb3" />
        <label for="c4">4</label>
      </td>

      <td colspan="5">&nbsp;</td>




    </tr>
  </fieldset>

  <tr>
    &nbsp;
  </tr>

  <tr>
    <td colspan="2">Desenvolvimento Mobile</td>
  </tr>

<tr>
  <td>&nbsp;</td>

  <td>Android</td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="a0" name="desenmob" />
    <label for="a0">0</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="a1" name="desenmob" />
    <label for="a1">1</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="a2" name="desenmob" />
    <label for="a2">2</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="a3" name="desenmob" />
    <label for="a3">3</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="a4" name="desenmob" />
    <label for="a4">4</label>
  </td>

</tr>

<tr>
  <td>&nbsp;</td>

  <td>IOS</td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="i0" name="desenmob2" />
    <label for="i0">0</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="i1" name="desenmob2" />
    <label for="i1">1</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="i2" name="desenmob2" />
    <label for="i2">2</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="i3" name="desenmob2" />
    <label for="i3">3</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="i4" name="desenmob2" />
    <label for="i4">4</label>
  </td>

</tr>

<tr>
  <td>&nbsp;</td>

  <td>Cordova</td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="co0" name="desenmob3" />
    <label for="co0">0</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="co1" name="desenmob3" />
    <label for="co1">1</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="co2" name="desenmob3" />
    <label for="co2">2</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="co3" name="desenmob3" />
    <label for="co3">3</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="co4" name="desenmob3" />
    <label for="co4">4</label>
  </td>
  <td colspan="2">&nbsp;</td>

</tr>
</fieldset>

  <tr>
    &nbsp;
  </tr>

  <tr>
    <td colspan="2">Banco de Dados</td>
  </tr>

<tr>
  <td>&nbsp;</td>

  <td>PostGres</td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="pg0" name="BD" />
    <label for="pg0">0</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="pg1" name="BD" />
    <label for="pg1">1</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="pg2" name="BD" />
    <label for="pg2">2</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="pg3" name="BD" />
    <label for="pg3">3</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="pg4" name="BD" />
    <label for="pg4">4</label>
  </td>

</tr>

<tr>
  <td>&nbsp;</td>

  <td>SQL Server</td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="ss0" name="BD2" />
    <label for="ss0">0</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="ss1" name="BD2" />
    <label for="ss1">1</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="ss2" name="BD2" />
    <label for="ss2">2</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="ss3" name="BD2" />
    <label for="ss3">3</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="ss4" name="BD2" />
    <label for="ss4">4</label>
  </td>

</tr>

<tr>
  <td>&nbsp;</td>

  <td>MySQL</td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="ms0" name="BD3" />
    <label for="ms0">0</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="ms1" name="BD3" />
    <label for="ms1">1</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="ms2" name="BD3" />
    <label for="ms2">2</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="ms3" name="BD3" />
    <label for="ms3">3</label>
  </td>

  <td>&nbsp;</td>

  <td>
    <input type="radio" id="ms4" name="BD3" />
    <label for="ms4">4</label>
  </td>

  <td>&nbsp;</td>
  <td>&nbsp;</td>

</tr>
</fieldset>

<tr>

  <td colspan="15">&nbsp;</td>

  <td>
    <div class="popup" onclick="myFunction2()"><i class="glyphicon glyphicon-question-sign" style="font-size:20px"></i>
      <span class="popuptext" id="myPopup2">Níveis</span>
    </div>
    <script>
      function myFunction2() {
        var popup = document.getElementById("myPopup2");
        popup.classList.toggle("show");
      }
    </script>
  </td>
</tr>

</table>


</div>

<div class="container">

  <h3>Experiências</h3>

  <hr />

    <div class="form-group">
      <label for="organiza">Organização</label>
      <input type="text" id="organiza" name="organiza" style="width: 450px;height:30px; display: inline-block;" class="form-control" placeholder="Organização">
    </div>

    <div class="form-group">
      <label for="inicio">Início</label>
      <input type="date" id="inicio" name="inicio">
      <button type="button" class="btn btn-primary btn-sm daterange " data-toggle="tooltip" title="Date range">
      <i class="fa fa-calendar"></i></button>
      <label for="termino">Término</label>
      <input type="date" id="termino" name="termino" >
      <button type="button" class="btn btn-primary btn-sm daterange " data-toggle="tooltip" title="Date range">
      <i class="fa fa-calendar"></i></button>
    </div>

    <div class="form-group">
      <label for="cargo">Cargo</label>
      <input type="text" id="cargo" name="cargo" style="width: 450px;height:30px; display: inline-block;" class="form-control" placeholder="Cargo">
    </div>

  <div class="form-group">
      <label for="cargo">Salário</label>
      <input type="text" id="salario" name="salario" style="width: 100px;height:30px; display: inline-block;" class="form-control">
    </div>
    <div class="form-group">
      <label for="cargo">Benefícios</label>
      <input type="text" id="beneficio" name="beneficio" style="width: 450px;height:30px; display: inline-block;" class="form-control" placeholder="Ex: vale-transporte, plano de saúde">
    </div>

    <div class="form-group">
      <label for="ativ" >Descreva suas atividades</label>
      <textarea name="ativ" style="width: 450px;height:80px; display: inline-block;" ></textarea>
    </div>

    <div>
      Adicionar
    </div>

  </div>

  <div class="container">

    <button type="submit" class="btn btn-default" name="btn" value="salvar">Salvar</button>
    <button type="submit" class="btn btn-default" name="btn" value="enviar"> Enviar</button>

  </div>
</form>


</body>
</html>
