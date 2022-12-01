
<?php
                        require_once "config.php";
                        if(isset($_POST['envoie'])){
                          if(!empty($_POST['title_one'])){
                            $first_title_project = htmlspecialchars($_POST['first_title_project']);
                            $title_one = htmlspecialchars($_POST['title_one']);
                            $title_two = htmlspecialchars($_POST['title_two']);
                            $paragraphe_one = htmlspecialchars($_POST['paragraphe_one']);
                            $paragraphe_two = htmlspecialchars($_POST['paragraphe_two']);
                            $images_one = "img/".$_FILES['images_one']['name'];
                            move_uploaded_file($_FILES['images_one']['tmp_name'],"../".$images_one);
                            $images_two = "img/".$_FILES['images_two']['name'];
                            move_uploaded_file($_FILES['images_two']['tmp_name'],"../".$images_two);
                            $title_one_timeline = htmlspecialchars($_POST['title_one_timeline']);
                            $title_two_timeline = htmlspecialchars($_POST['title_two_timeline']);
                            $title_three_timeline = htmlspecialchars($_POST['title_three_timeline']);
                            $title_for_timeline = htmlspecialchars($_POST['title_for_timeline']);
                            $title_five_timeline = htmlspecialchars($_POST['title_five_timeline']);
                            $title_resume = htmlspecialchars($_POST['title_resume']);
                            $paragraphe_resume = htmlspecialchars($_POST['paragraphe_resume']);
                            $images_resume = "img/".$_FILES['images_resume']['name'];
                            move_uploaded_file($_FILES['images_resume']['tmp_name'],"../".$images_resume);
                            $insertProject = $pdo->prepare('INSERT INTO projects(first_title_project, title_one, title_two, paragraphe_one, paragraphe_two, images_one, images_two, title_one_timeline, title_two_timeline, title_three_timeline, title_for_timeline, title_five_timeline, title_resume, paragraphe_resume, images_resume) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )');
                            $insertProject ->execute(array($first_title_project, $title_one, $title_two, $paragraphe_one, $paragraphe_two, $images_one, $images_two, $title_one_timeline, $title_two_timeline ,$title_three_timeline, $title_for_timeline, $title_five_timeline, $title_resume, $paragraphe_resume, $images_resume ));
                            header('Location: ../panelAdmin.php');
                            
                          }
                        }

?>