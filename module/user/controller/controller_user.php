<?php
    include ("module/user/model/DAOUser.php");
    //session_start();

    switch($_GET['op']){
        case 'list';
            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_all_user();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }

            if(!$rdo){
    			$callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/user/view/list_user.php");
    		}
            break;

        case 'create';
        include("module/user/model/validate.php");
            $check = true;
            $error = array(
                    'ISBN' => '',
                           'titulo' => '',
                           'genero' => '',
                           'autor' => '',
                           'descripcion' => '',
                  );

            if (isset($_POST['boton'])){
                $check=validate();
                if ($check['resultado']){
                    $_SESSION['ISBN']=$_POST;
                    
                    try{
                        $daouser = new DAOUser();
    		            $rdo = $daouser->insert_user($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }

		            if($rdo){
            			echo '<script language="javascript">alert("Registrado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_user&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
              } else {
                $error = $check['error'];
              }
            }
            include("module/user/view/create_user.php");
            break;

        case 'update';
            include("module/user/model/validate.php");
            $check = true;
            $error = array(
                           'ISBN' => '',
                           'titulo' => '',
                           'genero' => '',
                           'autor' => '',
                           'descripcion' => '',
                   );

            if (isset($_POST['boton'])){
                $check=validate();
                if ($check['resultado']){
                    $_SESSION['ISBN']=$_POST;
                    try{
                        $daouser = new DAOUser();
    		            $rdo = $daouser->update_user($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }

		            if($rdo){
            			echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_user&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }else {
                  $error = $check['error'];
                    $_SESSION['ISBN']=$_POST;
                  $_GET['id'] = $_POST['ISBN'];
                }
            }

            try{
              echo $_GET['id'];
                $daouser = new DAOUser();
            	$rdo = $daouser->select_user($_GET['id']);
            	$user=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }

        if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
        	    include("module/user/view/update_user.php");
    		}
            break;
        case 'read';
            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_user($_GET['id']);
            	$user=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/user/view/read_user.php");
    		}
            break;

        case 'delete';
            if (isset($_POST['delete'])){
                try{
                    $daouser = new DAOUser();
                	$rdo = $daouser->delete_user($_GET['id']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }

            	if($rdo){
        			echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
        			$callback = 'index.php?page=controller_user&op=list';
    			    die('<script>window.location.href="'.$callback .'";</script>');
        		}else{
        			$callback = 'index.php?page=503';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }

            include("module/user/view/delete_user.php");
            break;

            case 'delete_all';
                if (isset($_POST['delete_all'])){
                    try{
                        $daouser = new DAOUser();
                    	$rdo = $daouser->delete_all();
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }

                	if($rdo){
            			echo '<script language="javascript">alert("Borrado la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_user&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }

                include("module/user/view/delete_all.php");
                break;
        default;
            include("view/inc/error404.php");
            break;
    }
