<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Candidato;
use App\Telefone;
use App\RedeSocial;
use App\Area;
use App\Curso;
use App\Dominio;
use App\Experiencia;
use App\Formacao;
use App\Idioma;
use App\Instituicao;
use App\Interesse;
use App\Lingua;
use App\Nivel;
use App\Tecnologia;
use App\TipoCurso;
use App\Titulo;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*dd(request()->all());*/

      $candidato = new Candidato();
      $candidato->nomeCompleto = request('nome');
      $candidato->email = request('email');
      $candidato->endereco = request('endereco');
      $candidato->bairro = request('bairro');
      $candidato->cidade = request('cidade');
      $candidato->uf = request('uf');
      $candidato->cep = request('cep');
      $candidato->dataNascimento = request('data');
      $candidato->estadoCivil = request('cbcivil');
      $candidato->sexo = request('cbsexo');
      $candidato->cpf = request('cpf');
      $candidato->rg = request('rg');
      $candidato->salarioPretendido = request('salario');
      $candidato->informacoesAdicionais = request('info');

      switch (request('btn')) {
        case 'salvar':
          $candidato->enviado = '0';
          break;
          case 'enviar':
          $candidato->enviado = '1';
      }

      $candidato->save();

      $telefone = new Telefone();
      $telefone->idcandidato = $candidato->id;
      $telefone->codigoArea = request('codigoAreaT');
      $telefone->numeroTelefone = request('tel');
      $telefone->tipoTelefone = "Fixo";

      $telefone->save();

      $celular = new Telefone();
      $celular->idcandidato = $candidato->id;
      $celular->codigoArea = request('codigoAreaC');
      $celular->numeroTelefone = request('cel');
      $celular->tipoTelefone = "Celular";

      $celular->save();

      $linkedin = new RedeSocial();
      $linkedin->idcandidato = $candidato->id;
      $linkedin->urlPerfil = request('linkedin');
      $linkedin->nomeRedeSocial = "Linkedin";

      $linkedin->save();

      $lattes = new RedeSocial();
      $lattes->idcandidato = $candidato->id;
      $lattes->urlPerfil = request('lattes');
      $lattes->nomeRedeSocial = "Lattes";

      $lattes->save();

      $outraRede = new RedeSocial();
      $outraRede->idcandidato = $candidato->id;
      $outraRede->urlPerfil = request('outrasredes');
      $outraRede->nomeRedeSocial = "Outra rede";

      $outraRede->save();

      $titulo = new Titulo();
      $titulo->nome = request('cbtcurso');

      $titulo->save();

      $nivel = new Nivel();
      $nivel->descricao = request('');

      $nivel->save();

      $instituicao = new Instituicao();
      $instituicao->nome = request('inst');

      $instituicao->save();

      $formacao = new Formacao();
      $formacao->idcandidato = $candidato->id;
      $formacao->idtitulo = $titulo->id;
      $formacao->idinstituicao = $instituicao->id;
      $formacao->idnivel = $nivel->id;
      $formacao->curso = request('curso');
      $formacao->situacaoAtual = request('cbsatual');
      $formacao->dataInicio= request('dataInicio');
      $formacao->dataFim= request('dataFim');
      $formacao->cr = request('cr');
      $formacao->uf = request('fauf');
      $formacao->cidade = request('facidade');
      $formacao->pais = request('pais');

      $formacao->save();

      $historico = request()->file('historico');
      $historico->move('historicos',$candidato->id);

      $experiencia = new Experiencia();
      $experiencia->idcandidato = $candidato->id;
      $experiencia->nomeEmpresa = request('organiza');
      $experiencia->dataInicio= request('inicio');
      $experiencia->dataFim= request('termino');
      $experiencia->funcao = request('cargo');
      $experiencia->descricao = request('ativ');
      $experiencia->salario = request('salario');
      $experiencia->beneficios = request('beneficio');

      $experiencia->save();

      $tcurso = new TipoCurso();
      $tcurso->nome = request('tcurso');

      $tcurso->save();

      $instituicao = new Instituicao();
      $instituicao->nome = request('apinst');

      $instituicao->save();

      $curso = new Curso();
      $curso->idcandidato = $candidato->id;
      $curso->idTipoCurso = $tcurso->id;
      $curso->idinstituicao = $instituicao->id;
      $curso->nome = request('apnome');
      $curso->duracao= request('horaria');
      $curso->realizacao= request('apdata');

      $curso->save();

      $ingles = new Lingua();
      $ingles->descricao = "Inglês";

      $ingles->save();

      $nivelIngles = new Idioma();
      $nivelIngles->idcandidato = $candidato->id;
      $nivelIngles->idLingua = $ingles->id;
      $nivelIngles->nivel = request('ingles');

      $nivelIngles->save();

      $frances = new Lingua();
      $frances->descricao = "Francês";

      $frances->save();

      $nivelFrances = new Idioma();
      $nivelFrances->idcandidato = $candidato->id;
      $nivelFrances->idLingua = $frances->id;
      $nivelFrances->nivel = request("frances");

      $nivelFrances->save();

      $espanhol = new Lingua();
      $espanhol->descricao = "Espanhol";

      $espanhol->save();

      $nivelEspanhol = new Idioma();
      $nivelEspanhol->idcandidato = $candidato->id;
      $nivelEspanhol->idLingua = $espanhol->id;
      $nivelEspanhol->nivel = request('esp');

      $nivelEspanhol->save();

      $outro = new Lingua();
      $outro->descricao = request('ioutros');

      $outro->save();

      $nivelOutro = new Idioma();
      $nivelOutro->idcandidato = $candidato->id;
      $nivelOutro->idLingua = $outro->id;
      $nivelOutro->nivel = request('outros');

      $nivelOutro->save();

      $area1 = new Area();
      $area1->nome = "Desenvolvimento Web";

      $area1->save();

      $area1Tec1 = new Tecnologia();
      $area1Tec1->idArea = $area1->id;
      $area1Tec1->nome = "HTML5";

      $area1Tec1->save();

      $domArea1Tec1 = new Dominio();
      $domArea1Tec1->idcandidato = $candidato->id;
      $domArea1Tec1->idTecnologia = $area1Tec1->id;
      $domArea1Tec1->nivelDominio = request('desenweb');

      $domArea1Tec1->save();

      $area1Tec2 = new Tecnologia();
      $area1Tec2->idArea = $area1->id;
      $area1Tec2->nome = "Java Script";

      $area1Tec2->save();

      $domArea1Tec2 = new Dominio();
      $domArea1Tec2->idcandidato = $candidato->id;
      $domArea1Tec2->idTecnologia = $area1Tec2->id;
      $domArea1Tec2->nivelDominio = request('desenweb2');

      $domArea1Tec2->save();

      $area1Tec3 = new Tecnologia();
      $area1Tec3->idArea = $area1->id;
      $area1Tec3->nome = "Css3";

      $area1Tec3->save();

      $domArea1Tec3 = new Dominio();
      $domArea1Tec3->idcandidato = $candidato->id;
      $domArea1Tec3->idTecnologia = $area1Tec3->id;
      $domArea1Tec3->nivelDominio = request('desenweb3');

      $domArea1Tec3->save();

      $area2 = new Area();
      $area2->nome = "Desenvolvimento Mobile";

      $area2->save();

      $area2Tec1 = new Tecnologia();
      $area2Tec1->idArea = $area1->id;
      $area2Tec1->nome = "Android";

      $area2Tec1->save();

      $domArea2Tec1 = new Dominio();
      $domArea2Tec1->idcandidato = $candidato->id;
      $domArea2Tec1->idTecnologia = $area2Tec1->id;
      $domArea2Tec1->nivelDominio = request('desenmob');

      $domArea2Tec1->save();

      $area2Tec2 = new Tecnologia();
      $area2Tec2->idArea = $area1->id;
      $area2Tec2->nome = "IOS";

      $area2Tec2->save();

      $domArea2Tec2 = new Dominio();
      $domArea2Tec2->idcandidato = $candidato->id;
      $domArea2Tec2->idTecnologia = $area2Tec2->id;
      $domArea2Tec2->nivelDominio = request('desenmob2');

      $domArea2Tec2->save();

      $area2Tec3 = new Tecnologia();
      $area2Tec3->idArea = $area2->id;
      $area2Tec3->nome = "Cordova";

      $area2Tec3->save();

      $domArea2Tec3 = new Dominio();
      $domArea2Tec3->idcandidato = $candidato->id;
      $domArea2Tec3->idTecnologia = $area2Tec3->id;
      $domArea2Tec3->nivelDominio = request('desenmob3');

      $domArea2Tec3->save();

      $area3 = new Area();
      $area3->nome = "Banco de Dados";

      $area3->save();

      $area3Tec1 = new Tecnologia();
      $area3Tec1->idArea = $area3->id;
      $area3Tec1->nome = "PostGres";

      $area3Tec1->save();

      $domArea3Tec1 = new Dominio();
      $domArea3Tec1->idcandidato = $candidato->id;
      $domArea3Tec1->idTecnologia = $area3Tec1->id;
      $domArea3Tec1->nivelDominio = request('BD');

      $domArea3Tec1->save();

      $area3Tec2 = new Tecnologia();
      $area3Tec2->idArea = $area3->id;
      $area3Tec2->nome = "SQL Server";

      $area3Tec2->save();

      $domArea3Tec2 = new Dominio();
      $domArea3Tec2->idcandidato = $candidato->id;
      $domArea3Tec2->idTecnologia = $area3Tec2->id;
      $domArea3Tec2->nivelDominio = request('BD2');

      $domArea3Tec2->save();

      $area3Tec3 = new Tecnologia();
      $area3Tec3->idArea = $area3->id;
      $area3Tec3->nome = "MySql";

      $area3Tec3->save();

      $domArea3Tec3 = new Dominio();
      $domArea3Tec3->idcandidato = $candidato->id;
      $domArea3Tec3->idTecnologia = $area3Tec3->id;
      $domArea3Tec3->nivelDominio = request('BD3');

      $domArea3Tec3->save();



  //return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
