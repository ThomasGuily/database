
<?php
  // Ceci n'est qu'un template.
  // Reemplacer tout ce qui soit dans {} avec le truc necessaire
  // Avec des posibilites de requete:
  // $sql         = "SELECT * FROM {table}"
  // $sql         = "SELECT * FROM {table}"
  $result      = msqli_query($connexion, $sql);
  $resultCheck = mysqli_num_rows($result); 

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['{column_name}'] . "<br>";
    }
  }

?>



