<?php
require_once "/src/autoload.php"
use mas_acceso\usuario\UsuarioClass;
use mas_acceso\usuario\UsuarioInfoClass;
use mas_acceso\usuario\usuarioColector;


 ?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="/css/perfil.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
  <main>
    <div class="container">
      <div class="left box-primary">
        <img class="image" src="https://yt3.ggpht.com/-Y4ybONkbdYA/AAAAAAAAAAI/AAAAAAAAAAA/SCMi3HFru2w/s100-c-k-no-rj-c0xffffff/photo.jpg" alt="" />
        <h3 class="username text-center">Mariane Felix Fernandes</h3>
        <a href="#" class="btn btn-primary btn-block"><b>Editar foto</b></a>
      </div>
      <div class="right tab-content">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Nome</label>

            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputName" placeholder="Nome">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <div class= "col-sm-12 has-feedback">
              <label for="" class="control-label">Modalidades que deseja participar</label>
              <select title="Para escolher várias modalidades, segure a tecla Ctrl" alt="Para escolher várias modalidades, segure a tecla Ctrl" name="modalidades[]" class="form-control" multiple="">
                <option value="1">Desportivo - Basquete</option>
                <option value="2">Desportivo - Futebol Society</option>
                <option value="10">Desportivo - Futevolei</option>
                <option value="3">Desportivo - Futsal</option>
                <option value="5">Desportivo - Handebol</option>
                <option value="18">Desportivo - Natação - Borboleta - 25 metros</option>
                <option value="13">Desportivo - Natação - Borboleta - 50 metros</option>
                <option value="17">Desportivo - Natação - Costa - 25 metros</option>
                <option value="12">Desportivo - Natação - Costa - 50 metros</option>
                <option value="19">Desportivo - Natação - Livre - 25 metros</option>
                <option value="14">Desportivo - Natação - Livre - 50 metros</option>
                <option value="16">Desportivo - Natação - Peito - 25 metros</option>
                <option value="11">Desportivo - Natação - Peito - 50 metros</option>
                <option value="20">Desportivo - Natação - Revezamento - 4x25 metros</option>
                <option value="15">Desportivo - Natação - Revezamento - 4x50 metros</option>
                <option value="7">Desportivo - Queimada</option>
                <option value="8">Desportivo - Tênis de Mesa</option>
                <option value="6">Desportivo - Volei de Praia</option>
                <option value="4">Desportivo - Vôlei de Quadra</option>
                <option value="9">Desportivo - Xadrez</option>
                <option value="22">Cultural - Festival de Dança - Grupo</option>
                <option value="21">Cultural - Festival de Dança - Solo/Dupla</option>
                <option value="26">Cultural - Festival de Fotografia</option>
                <option value="24">Cultural - Festival de Intérpretes - Grupo</option>
                <option value="23">Cultural - Festival de Intérpretes - Solo/Dupla</option>
                <option value="27">Cultural - Festival de Redação</option>
                <option value="25">Cultural - Festival de Teatro</option>
                <option value="28">Jogos Digitais - League of Legends</option
              </select>
            </div>
          </div>
            </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-danger">Salvar alterações</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>
</html>
