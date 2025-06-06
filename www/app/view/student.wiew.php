
<body>
    <div class="student-profile">
    <figure class="photo">

      <?php
        if (empty($student['photo'])) {
          $photo = 'defaut.png';
        } else {
          $photo = 'small/'.$student['photo'];
        }
        ?>
          <img src='public/images/<?=$photo?>' alt="photo de <?= $student['firstname']?> <?= $student['lastname']?>" />
        </figure>
        <div class="profile-infos">
          <h1><?= $student['firstname'] ?> <?= $student['lastname'] ?></h1>
          <p><strong>Date de naissance :</strong> <?= isset($student['birthdate']) ? date("d/m/Y", strtotime($student['birthdate'])) : 'Non renseigné' ?></p>
          <p><strong>Groupe :</strong> <?= htmlspecialchars($student['group'] ?? 'Non renseigné') ?></p>
          <p><strong>Description :</strong> <?= htmlspecialchars($student['description'] ?? 'Aucune description') ?></p>
        </div>
    </div>
</body>
</html>

