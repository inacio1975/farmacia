<?php
session_start();
if ($_SESSION['us_tipo'] == 1) {
  include_once 'layouts/header.php';
?>

  <title>Adm | Editar Dados</title>
  <?php
  include_once 'layouts/nav.php';
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dados Pessoais</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="adm_catalogo.php">Home</a></li>
              <li class="breadcrumb-item active">Editar Dados</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
              <div class="card card-success card-outline">
                <div class="card-body box-profile">
                  <input type="hidden" id="id_usuario" value="<?php echo $_SESSION['usuario']; ?>" />
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="../assets/img/avatar.png" alt="avatar">
                    <h3 id="nombre_us" class="profile-username text-center text-success">Nome</h3>
                    <p id="apellido_us" class="text-muted text-center">Apelido</p>
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item"><b style="color: #0b7300; text-align: left;" class="float-left">Idade</b><a href="#" class="float-right" id="edad">12</a></li>
                      <li class="list-group-item"><b style="color: #0b7300;" class="float-left">DNI</b><a href="#" id="dni_us" class="float-right">12</a></li>
                      <li class="list-group-item"><b style="color: #0b7300;">Tipo de Utilizador</b>
                        <p class="badge badge-primary" id="us_tipo">Administrador</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Sobre mim</h3>
                </div>
                <div class="card-body">
                  <strong style="color: #0b7300;">
                    <i class="fas fa-phone mr-1"></i>Telefone
                  </strong>
                  <p class="text-muted" id="telefono_us">+244 934 434 456</p>
                  <strong style="color: #0b7300;">
                    <i class="fas fa-map-marker-alt mr-1"></i>Endereço
                  </strong>
                  <p class="text-muted" id="residencia_us">Santa Bárbara</p>
                  <strong style="color: #0b7300;">
                    <i class="fas fa-at mr-1"></i>E-mail
                  </strong>
                  <p class="text-muted"><a id="correo_us" href="mailto:user@example.com" class="text-link">user@example.com</a></p>
                  <strong style="color: #0b7300;">
                    <i class="fas fa-smile-wink mr-1"></i>Sexo
                  </strong>
                  <p class="text-muted" id="sexo_us">Mulher</p>
                  <strong style="color: #0b7300;">
                    <i class="fas fa-pencil-alt mr-1"></i>Informação Adicional
                  </strong>
                  <p class="text-muted" id="adicional_us">loren ipsun</p>

                  <button class="btn btn-block bg-gradient-danger edit">Editar</button>
                </div>
                <div class="card footer">
                  <p class="text-muted">Clica no botão acima se deseja editar</p>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Editar Dados Pessoais</h3>
                </div>
                <div class="card-body">
                  <div class="alert alert-success text-center" id="editado" style="display: none;"><span><i class="fas fa-check m-1"></i> Sucesso</span></div>
                  <div class="alert alert-danger text-center" id="noeditado" style="display: none;"><span><i class="fas fa-times m-1"></i> Desabilitado</span></div>
                  <form id="form-edit-usuario" class="form-horizontal">
                    <div class="form-group row">
                      <div class="form-group col">
                        <div class="row align-items-center">
                          <label for="" class="col-sm-4 form-control-label">Telefone</label>
                          <div class="col-sm">
                            <input type="tel" name="telefone" id="telefone" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group col">
                        <div class="row align-items-center">
                          <label for="email" class="col-sm-4 form-control-label">E-mail</label>
                          <div class="col-sm">
                            <input type="email" name="email" id="email" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="endereco" class="col-sm-2 form-control-label">Endereço</label>
                      <div class="col-sm">
                        <input type="text" name="endereco" id="endereco" class="form-control" />
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="form-group col-sm-6">
                        <div class="row align-items-center">
                          <label for="info" class="col-sm-4 form-control-label">Info. Adicional</label>
                          <div class="col-sm">
                            <textarea rows="10" name="info" id="info" class="form-control"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="form-group offset-1 col-sm-5">
                        <div class="row align-items-center">
                          <label for="sexo" class="col-sm-5 form-label">Sexo</label>
                          <div class="col-sm">
                            <select name="sexo" id="sexo" class="form-select">
                              <option value="">Seleccione</option>
                              <option value="F">Feminino</option>
                              <option value="M">Masculino</option>
                              <option value="O">Prefiro não dizer</option>
                            </select>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="form-group row">
  <div class="col-sm-10 offset-2 float-right">
    <button class="btn btn-block btn-outline-success">Salvar</button>
  </div>
</div>
                  </form>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


  </div>
  <!-- /.content-wrapper -->

<?php
  include_once 'layouts/footer.php';
} else {
  header('Location: ../');
}
?>

<script src="../assets/js/usuario.js"></script>