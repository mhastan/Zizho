<?php




if(empty($third_answer)){
  $third_answer = "(leeg)";
}


echo <<<EOF


      <body>

      <div class="container-fluid">
      <div class="row">

      <div class="col-md-12 pt-5">

      <form action="" method="POST">

      <div class="col-md-12">
      <p style="margin-left: auto; margin-right: auto; width: 80%;">
        Hier kun je zowel vragen toevoegen, inzien, wijzigen, en verwijderen. <br>
        Ook is het mogelijk om vragen te: aanzetten, uitzetten.
      </p>

      <table class="table" style="margin-left: auto; margin-right: auto; width: 80%;">

      <thead style="background-color: #2196f3; color: #fff;">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Vraag </th>
            <th scope="col">Eerste antwoord</th>
            <th scope="col">Tweede antwoord</th>
            <th scope="col">Derde antwoord <i> (Optioneel) </i> </th>
            <th scope="col"><b> AAN/UIT </b> </th>
            <th scope="col"> <i> DELETE/EDIT </i> </th>

          </tr>
        </thead>
  EOF;


  if($questions !== null) { 
    foreach ($questions as $question) {
    echo "<tbody>";
    echo "<tr>
        <td>" . $question->id .  "</td>
        <td>" . $question->first_question . "</td>
        <td>" . $question->first_answer  . "</td>
        <td>" . $question->second_answer . "</td>
        <td>" . $question->third_answer  . "</td>
        <td>" . $question->is_enabled  . "</td>
        <td> <a href=\"editPatient?id="."$question->id\" </a><i class=\"fas fa-user-edit\"> </i> </td>
        <td> <a href=\"patienten?del="."$question->id\" </a> <i class=\"far fa-trash-alt\"></i> </td> 
        </form></td>
      </tr>"; 
echo "</tbody>";

  }
}

else{
  echo "Geen vragen gevonden";
}

echo <<<EOF

</div>

</form>

</div>
</div>
</div>

<style>

input:placeholder-shown {
  font-style: italic;
}

</style>

</body>
</html>

EOF;
?>