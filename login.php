<?php
    
    require_once 'usuario.class.php';
    
    $u = new Usuario;
?>  
    <!-- inicio da config para cadastro -->
    <?php
        //verificar se clicou no botao
        if(isset($_POST['nome']))
        {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            // verificar se esta preenchido
            if(!empty($nome)&& !empty($email) && !empty($senha))
            {
                $u->conectar("projeto_login","localhost","root","");
                if($u->msgErro == "")//se esta tudo ok
                {
                    if($u->cadastrar($nome,$email,$senha))
                    {
                        ?>
                        <div id="msg-sucesso">
                        cadastrado com sucesso!
                        </div>
                        <?php
                    }
                    else
                    {
                        ?>
                        <div class="msg-erro">
                        Email ja cadastrado!
                        </div>
                        <?php
                    }
                }
                else
                {   
                    ?>
                    <div class="msg-erro">
                        <?php echo "Erro:".$u->msgErro; ?>
                    </div>
                    <?php
                

                }

            }else
            {
                ?>
                    <div class="msg-erro">
                        Preencha todos os campos!
                    </div>
                <?php
                
            }
        
        }  //fim da config para cadastro 
?>    

<?php
        //inicio da config para login
        if(isset($_POST['email']))
        {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            // verificar se esta preenchido
            if(!empty($email) && !empty($senha))
            {
                $u->conectar("projeto_login","localhost","root","");
                    if($u->msgErro =="")
                {

                    }
                    if($u->logar($email, $senha))
                    {
                        header("location: logado.php");
                    }
                    else
                    {
                        ?>
                        <div class="msg-erro">
                        Email e/ou senha estão incorretos!
                        </div>
                        <?php
                        
                    }
        }
                else
                {
                    ?>
                    <div class="msg-erro">                  
                    </div>
                    <?php
                    
                }

            }
            else
            {
                ?>
                <div class="msg-erro">
                    Preencha todos os campos!
                </div>
                <?php
                
            }
         

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/835fa90426.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">welcome back!</h2>
                <p class="description description-primary">To keep connected with us</p>
                <p class="description description-primary">please login with your personal info</p>
                <button id="signin" class="btn btn-primary">sign in</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">create account</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>        
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">or use your email for registration:</p>
                <form method="post" class="form">     <!-- method post 1 -->
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="nome" placeholder="Name" maxlength="30">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" placeholder="Email" maxlength="40">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Password" maxlength="15">
                    </label>
                    
                    
                    <button class="btn btn-second">sign up</button>        
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">hello, friend!</h2>
                <p class="description description-primary">Enter your personal details</p>
                <p class="description description-primary">and start journey with us</p>
                <button id="signup" class="btn btn-primary">sign up</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">sign in to developer</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">or use your email account:</p>
                <form method="post" class="form">      <!-- method post 2 -->
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email" name="email">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Password" name="senha">
                    </label>                                   
                    <button class="btn btn-second">entrar</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="login.js"></script>





   
</body>
</html>