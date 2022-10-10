<?php 

    ini_set('max_execution_time',0);

    include('conexao.php');
    mysqli_set_charset($mysqli,"utf8");

    $arquivo    =   $_FILES["file"]["tmp_name"];
    $name    =   $_FILES["file"]["name"];

    $ext = explode(".", $name);

    $extensao = end($ext);

    if($extensao != "csv") {
        header("Location: erroarquivo.php");

    } else {
        $objeto = fopen($arquivo,'r');

        

            while(($dados = fgetcsv($objeto,1000,";")) !== FALSE)
            {
                $admin_id = utf8_encode("1");
                $name = utf8_encode($dados[0]);
                $enrollment_id = utf8_encode($dados[1]);
                $password = md5($dados[1]);
                $image = utf8_encode($dados[2]);
                $email = utf8_encode($dados[3]);
                $contact_no = utf8_encode($dados[4]);
                $dob  = utf8_encode($dados[5]);
                $batch_id = utf8_encode($dados[6]);
                $admission_date = date("Y-m-d H:i:s");
                $status = utf8_encode($dados[7]);
                $token = utf8_encode($dados[8]);
                    

                $sql_email = $mysqli->prepare("SELECT * FROM students WHERE email = '$email'");
                $quantidade_email = $sql_email->num_rows;

                if($quantidade_email >= 1 ){

                    echo "email já cadastrado." . $email;
                    die;
                
                }else{

                    $sql_enrollment_id = $mysqli->prepare("SELECT * FROM students WHERE enrollment_id = '$enrollment_id'");
                    
                    $quantidade_enrollment_id = $sql_enrollment_id->num_rows;

                if($quantidade_enrollment_id >= 1 ){

                    echo "CPF já cadastrado." . $enrollment_id;
                    die;
                }else{

                    $sql_tel = $mysqli->prepare("SELECT * FROM students WHERE contact_no = '$contact_no'");

                $quantidade_tel = $sql_teL->num_rows;

                if($quantidade_tel >= 1 ){

                    echo "telefone já cadastrado." . $contact_no;
                die;
                }else{

                    $result = $mysqli->query("INSERT INTO students (admin_id, name, enrollment_id, password, image, email, contact_no, dob, batch_id, admission_date, status, token ) VALUES ('$admin_id','$name','$enrollment_id','$password','$image','$email','$contact_no','$dob','$batch_id','$admission_date','$status','$token')");

                }
                    

                }

                }
                                   
                    
                   
                
            }

                if($result){
                    header("Location: sucesso.php");
                } else{
                    header("Location: erro.php");
                }

            }
        

    ?>