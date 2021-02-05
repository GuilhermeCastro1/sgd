<?php 

session_start(); 

require '../autoload.php';

if (!$_SESSION['logon']){
    header("Location: login.php");
}

$id = $_SESSION['id'];
$userC = new UsuarioController();
$user = $userC->listaUsuario($id);

//var_dump($user['dt_nasc']); die();

if (isset($_GET['id']) && !empty($_GET['id'])) {
      $id = $_GET['id'];
      //$rsmC = new ResumoController();
      //$rsm = $rsmC->retornaResumo($id);
}


?>

      <!-- MENU SIDEBAR-->
<?php include_once 'menu.php'; ?>
<!-- MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <!-- HEADER DESKTOP-->
        <?php include_once 'topo.php'; ?>
            <!-- HEADER DESKTOP-->
            
          <?php

          if(isset($_GET['msg']) && !empty($_GET['msg'])){
              $msg = $_GET['msg'];

          ?>
            <!-- Java Script -->
            
            <script type="text/javascript">
                Snackbar.show({
                  text: '<b><?= $msg ?></b>',
                  pos: 'top-center',
                  actionText: '',
                  backgroundColor: '#1476C6',

                });
            </script>

            <!-- Java Script -->

          <?php

            }

          ?>
          
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12" style="line-height:35px; margin-top:30px">
                                <div style="float: left;">
                                    Perfil do Usuário
                                </div>
                                <!-- <div style="float: right;">
                                    <button class="btn btn-success" onclick="window.open('cad_acesso.php', '_self')"> <i class="fa fa-plus"></i> Acesso</button>
                                </div>
                            -->
                            </div>
                        </div>
                  <div class="row m-t-30" style="margin-top: 10px;">
                      <div class="col-md-12">
                          <!-- DATA TABLE-->
                            <div class="table-responsive m-b-40">

                                
                                <!-- Jumbotron --><div class="jumbotron" style="padding:5px">
                                        
                                    <!-- Content -->
                                    <!-- MAIN CONTENT-->
                                    <div class="main-content" style="padding-top: 10px;">
                                        <div class="section__content section__content--p30">
                                            <div class="container-fluid">
                                                <div class="row">
                                    
                                                    <div class="col-lg-12" style=" margin: auto;">
                                        
                                                    <div class="div-cad-acesso">
                                                    <div class="form-part form-part-button-form" style="padding-top: 10px">
                                                        
                                                        <button type="button" class="btn btn-primary" onclick="window.open('resumos.php', '_self')"><<<</button>
                                                        </button>
                                                        
                                                        <div class="div-cad-acesso-int">
                                                        
                                                        <!-- /# column -->
                                                        <div class="col-lg-11">

                                                                <div style="margin: auto; padding-left: 35px; padding-right: 35px">

                                                                        <!-- PROFILE -->
                                                                            <div class="tab-pane fade show active">
                                                                        <p>
                                                                        <!-- Form -->
                                                                            <form action="../controller/UsuarioController.class.php" method="get">

                                                                            <div class="row" style="margin-bottom: 7px">
                                                                                
                                                                                <div class="col-md-12" style="background-color: #E9ECEF">
                                                                                    
                                                                                    <!-- DATA
                                                                                    <div class="col-md-3" style="float: right">
                                                                                    <?php
                                                                                        date_default_timezone_set('America/Sao_Paulo');
                                                                                        $data = date("d/m/Y", time());
                                                                                    ?>
                                                                                    <input type="datetime" id="data" name="data" class="form-control form-control-sm input-format-center" 
                                                                                    value="<?php
                                                                                                if (isset($rsm['data'])) {
                                                                                                    $dt = array_reverse(explode('-', $rsm['data']));
                                                                                                    $dt = implode('/', $dt);
                                                                                                    echo $dt;
                                                                                                } else {
                                                                                                    echo $data;
                                                                                                }
                                                                                            ?>" style="font-weight: bold; font-size: 14px; border: 0px" readonly>
                                                                                    </div>
                                                                                
                                                                                    END DATA -->

                                                                                </div>
                                                                            </div>

                                                                            <br>

                                                                            <div class="container bootstrap snippet">
                                                                                <div class="row">
                                                                                    
                                                                                </div>
                                                                                <div class="row">
                                                                                    <!-- FOTO 
                                                                                        <div class="row rowForm">
                                                                                        <div class="text-center" style="float:right; position: absolute; right: 4%; top: 4%">
                                                                                            <img style="width: 150px; height: 150px; line-height: 50px" src="<?= isset($_GET['c_foto']) ? $_GET['c_foto'] : '../assets/images/users/avatar_2x.png' ?>" class="preview-img avatar img-circle img-thumbnail" alt="Sem imagem cadastrada!">
                                                                                            <br>
                                                                                            <div style="margin-top:10px; font-size: 12px">
                                                                                                <input type="file" name="fileUpload" class="custom-file-label custom-file-input text-right center-block file-upload file-chooser file-button" accept="image/*" value="inserir foto">
                                                                                               
                                                                                            </div>                                                                                        
                                                                                        </div>
                                                                                        </div>

                                                                                     END FOTO-->
                                                                                </div>
                                                                                <!-- FOTO -->
                                                                                    
                                                                                    <div class="col-sm-3 ft01">
                                                                                        

                                                                                            <div class="text-center">
                                                                                                <div class="row">
                                                                                                    <div class="col">                                                                                                                                                                                    
                                                                                                       <img id="avatar" src="<?= $user['c_foto'] ? '../assets/images/users/'.$user['c_foto'] : 'avatar_2x.png'; ?>" class="avatar img-circle img-thumbnail preview-img" alt="Sem imagem cadastrada!"  style="width:300px">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col">
                                                                                                        <br>
                                                                                                        <input type="file" class="custom-file-input text-right center-block file-upload file-chooser file-button" id="customFile" name="fileUpload" accept="image/*">
                                                                                                        <label class="custom-file-label" for="customFile">Alterar a foto</label>        
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            
                                                                                            
                                                                                            <br>

                                                                                            
                                                                                            <div class="panel panel-default">
                                                                                                    
                                                                                            </div>
                                                                                                
                                                                                    </div><!--/col-3-->


                                                                                    <div class="col-sm-9"><!--right col-->
                                                                                        
                                                                                    <div class="tab-content">
                                                                                        <div class="tab-pane active" id="home">
                                                                                                
                                                                                                <div class="row row_form_user">
                                                                                                    
                                                                                                    <div class="col-md-5" style="float: left">
                                                                                                        <label for="nome"><h6>Nome</h6></label>
                                                                                                        <input type="text" class="form-control form-control-sm" name="nome" id="nome" value="<?= isset($user['nome']) ? $user['nome'] : '' ?>" required>
                                                                                                    </div>

                                                                                                    <div class="col-md-7" style="float: right">
                                                                                                        <label for="sobrenome"><h6>Sobrenome</h6></label>
                                                                                                        <input type="text" class="form-control form-control-sm" name="sobrenome" id="sobrenome" value="<?= isset($user['sobrenome']) ? $user['sobrenome'] : '' ?>">
                                                                                                    </div>

                                                                                                </div>
                                                                                                
                                                                                                <div class="row row_form_user">
                                                                                                    <div class="col-md-4" style="float: left">
                                                                                                        <label for="dt_nasc"><h6>Data de nascimento</h6></label>
                                                                                                        <input type="date" class="form-control form-control-sm" name="dt_nasc" id="dt_nasc" value="<?= isset($user['dt_nasc']) ? $user['dt_nasc'] : '' ?>" disabled required>
                                                                                                    </div>
                                                                                                    <div class="col-md-8" style="float: right">
                                                                                                        <label for="func"><h6>Função</h6></label>
                                                                                                        <input type="text" class="form-control form-control-sm" name="func" id="func" value="<?= isset($user['func']) ? $user['func'] : '' ?>" disabled required>
                                                                                                    </div>
                                                                                                </div>
                                                                                                
                                                                                                <div class="row row_form_user">
                                                                                                    <div class="col-md-4" style="float: left">
                                                                                                        <label for="telefone"><h6>Telefone</h6></label>
                                                                                                        <input type="tel" class="form-control form-control-sm" name="telefone" id="telefone" placeholder="(XX) XXXXX-XXXX" title="seu numero aqui!" value="<?= isset($user['telefone']) ? $user['telefone'] : '' ?>" required>
                                                                                                        
                                                                                                    </div>
                                                                                                    <div class="col-md-8" style="float: right">
                                                                                                        <label for="email"><h6>Email</h6></label>
                                                                                                        <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="you@email.com" title="seu email aqui!" value="<?= isset($user['email']) ? $user['email'] : '' ?>" required>
                                                                                                    </div>

                                                                                                </div>
                                                                                                <br>
                                                                                                <hr>

                                                                                                <div class="row row_form_user">
                                                                                                    <div class="col-md-3" style="float: left">
                                                                                                        <label for="id"><h6>ID</h6></label>
                                                                                                        <input type="number" class="form-control form-control-sm" name="id" id="id" value="<?= isset($user['id']) ? $user['id'] : '' ?>" disabled>
                                                                                                        
                                                                                                    </div>
                                                                                                    <div class="col-md-9" style="float: right">
                                                                                                        <label for="usuario"><h6>Usuário</h6></label>
                                                                                                        <input type="text" class="form-control form-control-sm" name="usuario" id="usuario" placeholder="usuario" title="" value="<?= isset($user['usuario']) ? $user['usuario'] : '' ?>" disabled required>
                                                                                                    </div>

                                                                                                </div>

                                                                                                <br>
                                                                                                <label for="senha"><h6>Senha</h6></label>
                                                                                                <br>
                                                                                                <div class="row row_form_user">
                                                                                                    <div class="col-md-6" style="float: left">
                                                                                                        
                                                                                                        <input type="password" class="form-control form-control-sm pass" name="senha" id="senha" placeholder="*senha" title="*senha*">
                                                                                                        
                                                                                                    </div>
                                                                                                    <div class="col-md-6" style="float: right">
                                                                                                        
                                                                                                        <input type="password" class="form-control form-control-sm pass" name="conf_senha" id="conf_senha" placeholder="*repita a senha" title="*confirme a senha*">
                                                                                                    </div>

                                                                                                </div>
                                                                                                
                                                                                                <br>
                                                                                                <hr>
                                                                                                <br>
                                                                                        
                                                                                        </div><!--/tab-pane-->
                                                                                        
                                                                                    </div><!--/tab-content-->

                                                                                    </div><!--/col-9-->
                                                                                </div><!--/row-->
                                                                            </div>
                                                                            
                                                                            <!-- END PROFILE -->
                                                                            
                                                                            
                                                                            <?= !isset($id) ? "<input type='hidden' name='acao' value='cadastrar'>" : "<input type='hidden' name='acao' value='editar'> <input type='hidden' name='id' value='$id'>" ?>
                                                                            
                                                                            <!-- BUTTON SUBMIT -->
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="form-part form-part-button-form" style="padding-bottom: 40px; clear:both; width: 100%;">
                                                                                    <button type="submit" class="btn btn-success" id="sbmt" onclick="myFunction()">
                                                                                        <?= !isset($id) ? "Salvar" : "Editar" ?>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <!-- END BUTTON SUBMIT -->

                                                                            </form>
                                                                            <!-- End Form -->
                                                                        </<span>
                                                                    </div>
                                                                    <!--END CHECKLIST -->
                                                                </div>
                                                                
                                                            </div>
                                                        
                                                    <!-- /# column -->

                                                    </div>

                                                </div>
                                            </div>

                                            </div>
                                                
                                        </div>

                                        </div>
                                            
                                    </div>
                                </div>

                                <!-- Jumbotron --></div>

                            </div>
        </div>
            <script type="text/javascript">
                $('#sbmt').click(function() { 
                    
                }); 
            </script>

            <!--<script type="text/javascript">
        
                $(document).ready(function() {
                
                var readURL = function(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.avatar').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
                }

                $(".file-upload").on('change', function(){
                    readURL(this);
                });
                });
                
            </script>
            <script>
                // Add the following code if you want the name of the file appear on select
                $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                });
            </script>-->
            <script type="text/javascript">

                    const $ = document.querySelector.bind(document);

                    const previewImg = $('.preview-img');
                    const fileChooser = $('.file-chooser');
                    const fileButton = $('.file-button');

                    fileButton.onclick = () => fileChooser.click();

                    fileChooser.onchange = e => {
                        const fileToUpload = e.target.files.item(0);
                        const reader = new FileReader();
                        reader.onload = e => previewImg.src = e.target.result;
                        reader.readAsDataURL(fileToUpload);
                    };

        
            </script>
     
    </div>
<!-- End Content -->


                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>

        <!-- RODAPÉ -->
<?php include_once 'rodape.php'; ?>
<!-- RODAPÉ -->