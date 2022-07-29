<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Me | Matthew Incardona</title>
    <?php include './includes/head.php';?>
  </head>

  <body>
    <div class="bg-overlay">
      <header>
          <?php include './includes/nav.php';?>
      </header>
      <main>
        <!-- About me section -->
        <div class="about-me">
          <!-- About me picture -->
          <div class="about-me__picture">
            <img src="assets/matthew-1.webp" alt="Picture of me :)" />
          </div>
          <!-- About me bio -->
          <div class="about-me__bio">
            <h1>About Me</h1>
            <p>
              I'm a passionate UX engineer and entrepeneur who loves exploring
              both the design and development sides of projects. It's a goal of
              mine to understand every aspect of the product creation, from the
              intial concept & ideation to development & getting a working
              prototype out the door.
              <br /><br />I'm also a big fan of Linux and cloud computing. I'm a PopOS user right now, but I never know what I'll be using next month.
            </p>
          </div>
        </div>
      </main>
          <?php include './includes/footer.php';?>
    </div>
  </body>
</html>