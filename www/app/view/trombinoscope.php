<main class="trombi">

      <h1>Trombinoscope</h1>

      <div class="line-decoration" aria-hidden="true">
        <div class="line" id="line1"></div>
        <div class="line" id="line2"></div>
      </div>


      <div class="trombi-decoration" aria-hidden="true">
        <img src="public/images/dots.svg" id="dots1" alt="" />
        <img src="public/images/dots.svg" id="dots2" alt="" />
      </div>

      <form>
      <input 
        type="text"
        name="search"
        id="search"
        class="search"
        placeholder="Nom ou Prénom"
      />
      <input type="submit" value="Rechercher" name="submit" />
    </form>

      <div class="student-cards">

        <?php foreach($students as $student): ?> 
            <div class="student-card">

            <a href="index.php?route=student&id=<?= $student['id']?>">

                <figure class="photo">

                <?php
                if (empty($student['photo'])) {
                  $photo = 'defaut.png';
                } else {
                  $photo = 'small/'.$student['photo'];
                }
                ?>
                  <img src='public/images/<?= $photo?>' alt="photo de <?= $student['firstname']?> <?= $student['lastname']?>" />
                </figure>
                <div class="card-infos">
                <p class="name"><?= $student['firstname'] ?> <span><?= $student['lastname'] ?></span></p>
                <p class="birthdate"><?= $student['birthdate'] ?></p>
                <p class="group">groupe <span><?= $student['group'] ?></span></p>
                <p class="desc"><?= $student['description'] ?></p>
                </div>

            </a>

            </div>
        <?php endforeach ?>

      </div>

      <nav class="pagination">
  <ul>
    <li class="prev"><a href="index.php?route=trombinoscope&page=<?= $current_page - 1 ?>">Préc.</a></li>
    <li class="#">1</li>
    <li><a href="index.php?route=trombinoscope&page=2">2</a></li>
    <li><a href="index.php?route=trombinoscope&page=3">3</a></li>
    <li class="next"><a href="#">Suiv.</a></li>
  </ul>
</nav>

<div class="pagination">
        <!-- Affichage des liens de pagination -->
        <?php if ($total_pages > 1): ?>
            <ul class="pagination-links">
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <li>
                        <a href="index.php?route=trombinoscope&page=<?= $i ?>" 
                           class="<?= $i == $current_page ? 'active' : '' ?>">
                           <?= $i ?>
                        </a>
                    </li>
                <?php endfor; ?>
            </ul>
        <?php endif; ?>
    </div>