<?php 
   session_start();
   $_SESSION['questao'] = $_SESSION['questao'] + 1;
   $_SESSION['back'] = $_SESSION['back'] + 1;
   if($_SESSION['questao'] == 1){
      header('Location: quiz-questao2.php');
     }else if($_SESSION['questao'] == 2){
      header('Location: quiz-questao3.php');
     }else if($_SESSION['questao'] == 3){
      header('Location: quiz-questao4.php');
     }else if($_SESSION['questao'] == 4){
      header('Location: quiz-questao5.php');
     }else if($_SESSION['questao'] == 5){
      header('Location: quiz-questao6.php');
     }else if($_SESSION['questao'] == 6){
      header('Location: quiz-questao7.php');
     }else if($_SESSION['questao'] == 7){
      header('Location: quiz-questao8.php');
     }else if($_SESSION['questao'] == 8){
      header('Location: quiz-resultado.php');
  }
?>