<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Matthew Incardona's Portfolio</title>
  <?php include './includes/head.php';?>
</head>

<body>
  <!-- threejs canvas -->
      <div id="canvas"></div>
  <div class="bg-overlay">
    <header>
      <?php include './includes/nav.php';?>
      <main>
      <!-- Main welcome area -->
      <div class="hero">
        <div class="hero__welcome-msg">
          <h1><a href="./about-me.html"><span class="hero__name-top">Hi, my name is </span><br />
              <div class="hero__name-bottom">Matthew<br />Incardona</div>
            </a></h1>
        </div>
        <div class="hero__desc">
          <div class="hero__desc-top">
            <p>
              I’m an <span class="highlight">entrepreneur</span> <br />
              at the intersection of
            </p>
          </div>
          <div class="hero__desc-bottom">
            <p>
              <span class="highlight highlight--alt">design</span> and<br />
              <span class="highlight highlight--alt">development.</span>
            </p>
          </div>
        </div>
      </div>
    </header>
    <section>
        <!-- Projects area -->
        <div class="projects">
          <!-- Project One -->
          <div class="project-container">
            <div class="project-container__left-panel">
              <h2>Second Desk</h2>
              <ul class="tag-container">
                <li class="project-tag"><span>Founder</span></li>
                <li class="project-tag"><span>UX Engineer</span></li>
                <!-- <li class="project-tag"><span>Frontend Dev</span></li> -->
              </ul>
              <p class="project__descr">
                Second Desk is a Desktop-As-A-Service product that enables
                non-Windows users to stream Windows programs directly
                through their browser.
              </p>
              <a class="project__btn" href="./second-desk.php">
                Open Project
                <img class="project__btn-icon" src="./assets/arrow.svg" alt="" />
                <a />
            </div>
            <div class="project-container__right-panel">
              <img class="project__img" src="./assets/Second_Desk.webp" alt="Second Desk project preview" />
            </div>

            <!-- Project Two -->
            <div class="project-container__left-panel">
              <h2>DouxDolci Web Design</h2>
              <ul class="tag-container">
                <li class="project-tag"><span>Founder</span></li>
                <li class="project-tag"><span>Web Designer</span></li>
              </ul>
              <p class="project__descr">
                Explore projects from my freelance web design business, DouxDolci Web Design, where I work one-on-one
                with a variety of clients to improve their online presence.
              </p>
              <a class="project__btn" href="./web-design.php">
                Open Project
                <img class="project__btn-icon" src="./assets/arrow.svg" alt="" />
                <a />
            </div>
            <div class="project-container__right-panel">
              <img class="project__img" src="./assets/DouxDolci2.webp" alt="Web design project preview" />
            </div>

            <!-- Project Three -->
            <div class="project-container__left-panel">
              <h2>Rochester Greenovation</h2>
              <ul class="tag-container">
                <li class="project-tag"><span>UX/UI Designer</span></li>
              </ul>
              <p class="project__descr">
                Rochester Greenovation is a local thrift store with a goal to let nothing go to waste. This project was
                part of a two-week team-based UX competition hosted by the Rochester Institute of Technology.
              </p>
              <a class="project__btn" href="./rochester-greenovation.php">
                Open Project
                <img class="project__btn-icon" src="./assets/arrow.svg" alt="" />
                <a />
            </div>
            <div class="project-container__right-panel">
              <img class="project__img" src="./assets/Greenovation.webp" alt="Rochester Greenovation project preview" />
            </div>
          </div>
        </div>
    </section>
    </main>
      <?php include './includes/footer.php';?>
  </div>
  <script async defer type="module">
      import * as THREE from "https://cdn.jsdelivr.net/npm/three@0.121.1/build/three.module.js";
      import { GLTFLoader } from "https://cdn.jsdelivr.net/npm/three@0.121.1/examples/jsm/loaders/GLTFLoader.js";
      import { OrbitControls } from "https://cdn.jsdelivr.net/npm/three@0.121.1/examples/jsm/controls/OrbitControls.js";

      // get height of document and set #canvas to it
      const body = document.body;
      const html = document.documentElement;
      const height = Math.max(body.scrollHeight, body.offsetHeight,
        html.clientHeight, html.scrollHeight, html.offsetHeight);


      const scene = new THREE.Scene();
      const scene2 = new THREE.Scene();
      const loader = new GLTFLoader();
      const camera = new THREE.PerspectiveCamera(
        75,
        window.innerWidth / window.innerHeight,
        0.1,
        1000
      );
      
      const renderer = new THREE.WebGLRenderer({ alpha: true });
      renderer.setClearColor( 0xffffff, 0);
      renderer.setSize(window.innerWidth, window.innerHeight);

      document.getElementById( 'canvas' ).appendChild( renderer.domElement );
      renderer.autoClear = false;

      const controls = new OrbitControls(camera, renderer.domElement);

      const geometry = new THREE.SphereGeometry( 100, 100, 100 );

      const wireframe = new THREE.WireframeGeometry( geometry );

      const line = new THREE.LineSegments( wireframe );
      line.material.depthTest = false;
      line.material.opacity = 0.1;
      line.material.transparent = true;
      line.renderOrder = 0;
      line.onBeforeRender = function( renderer ) { renderer.clearDepth(); };

      scene.add( line );

      const hemiLight = new THREE.HemisphereLight(0xffffff, 0x444444, 0.4);
      hemiLight.position.set(0, 20, 0);
      scene2.add(hemiLight);

      const dirLight = new THREE.DirectionalLight(0xffffff, 0.6);
      dirLight.position.set(-3, 10, -10);
      scene2.add(dirLight);

      camera.position.z = 5;

      loader.load(
        "./assets/donut.glb",
        function (gltf) {
          var customModel = gltf.scene;
          scene2.add(gltf.scene);
          customModel.scale.set(35, 35, 35);
          customModel.position.x = -5;
          customModel.position.y = 10;
        },
        undefined,
        function (error) {
          console.error(error);
        }
      );

      loader.load(
        "./assets/cupcake.glb",
        function (gltf) {
          var customModel = gltf.scene;
          // scene2.add(gltf.scene);
          customModel.scale.set(30, 30, 30);
          //  customModel.position.x = Math.random() * 10;
          customModel.position.x = 10;
          customModel.position.y = 0;
          customModel.rotation.x = .5;
        },
        undefined,
        function (error) {
          console.error(error);
        }
      );

      for (let i = 0; i < 5; i++ ){
      loader.load(
        "./assets/cake.glb",
        function (gltf) {
          var customModel = gltf.scene;
          // scene2.add(gltf.scene);
          customModel.scale.set(20, 20, 20);
          customModel.position.x = Math.random() * 20;
          customModel.position.y = Math.random() * 20;
          customModel.position.z = Math.random() * 20;
          customModel.rotation.x = Math.random() * 20;


        },
        undefined,
        function (error) {
          console.error(error);
        }
      )};

      //controls.update() must be called after any manual changes to the camera's transform
      camera.position.set(10, 20, 0);
      controls.update();

      renderer.setAnimationLoop((_) => {
        scene.rotation.x += 0.003;
        scene.rotation.y += 0.001;
        scene2.rotation.x += 0.001;
        scene2.rotation.y += 0.003;
        renderer.render(scene, camera);
        renderer.render(scene2, camera);
        // document.getElementById("canvas").style.height = height + 5;
      });
    </script>
</body>

</html>