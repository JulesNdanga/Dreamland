<?php
include("includ/connection.php");
include("fonction/fonctions.php");

        
        $uname=securisation($_POST['email']);
        $password=securisation($_POST['password']);
         
        
        $result=$bdd->query("select * from client where email='".$uname."' limit 1");
        $result = $result-> fetch();
        
        
            
            if(decryptageMotpasse($password,$result['password'])==1){
                session_start();
                $_SESSION['email']=$uname;
                $_SESSION['pass']=$password;
                $_SESSION['logged']=true;
    
                header('Location:accueil.php');
            }else{
            echo "
            <body>
                    <div class='principale'>
                        Mot de passe <span class='error'>*********</span> ou nom d'utilisateur   
                        <span class='error'>$uname</span> invalide
                       revenir à la page de 
                            <a  href='index.php'>connexion</a>
                    </div>
            </body>
            <style>
                body{
                    background-image: url(assets/images/error.jpg);
                    background-repeat: no-repeat;
                    background-size: cover;
                    color:black;
                    font-family: tahoma;
                    font-size:65px;
                    text-align: center;
                }
                a{
                    text-decoration: none;
                    color: darkred;
                }

                a:hover{
                    color: #2b1c1d;
                }

                span{
                    color: darkred;
                }

                span:hover{
                    color: #2b1c1d;
                }
                .principale{
                    margin-top:17%;
                    border:2px solid beige;
                    background-color:rgba(255,255,255,0.5);
                    box-shadow: 5px 0px 5px 0px beige;
                }
            
            </style>
            ";
            exit();
        }
      
   
    ?>