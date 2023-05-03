<script async defer>
    	// threejs
	import * as THREE from 'three';
	import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
	import { OrbitControls } from 'three/addons/controls/OrbitControls.js';

	import { onMount } from 'svelte';

	onMount(() => {
		// get height of document and set #canvas to it
		const body = document.body;
		const html = document.documentElement;
		const height = Math.max(
			body.scrollHeight,
			body.offsetHeight,
			html.clientHeight,
			html.scrollHeight,
			html.offsetHeight
		);

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
		renderer.setClearColor(0xffffff, 0);
		renderer.setSize(window.innerWidth, window.innerHeight);

		document.getElementById('canvas').appendChild(renderer.domElement);
		renderer.autoClear = false;

		const controls = new OrbitControls(camera, renderer.domElement);

		const geometry = new THREE.SphereGeometry(100, 100, 100);

		const wireframe = new THREE.WireframeGeometry(geometry);

		const line = new THREE.LineSegments(wireframe);
		line.material.depthTest = false;
		line.material.opacity = 0.1;
		line.material.transparent = true;
		line.renderOrder = 0;
		line.onBeforeRender = function (renderer) {
			renderer.clearDepth();
		};

		scene.add(line);

		const hemiLight = new THREE.HemisphereLight(0xffffff, 0x444444, 0.4);
		hemiLight.position.set(0, 20, 0);
		scene2.add(hemiLight);

		const dirLight = new THREE.DirectionalLight(0xffffff, 0.6);
		dirLight.position.set(-3, 10, -10);
		scene2.add(dirLight);

		camera.position.z = 5;

		// const donutUrl = window.URL.createObjectURL(new Blob([{donut}]));

		// loader.load(
		//     "../../src/lib/assets/donut.glb",
		//     function (gltf) {
		//         var customModel = gltf.scene;
		//         scene2.add(gltf.scene);
		//         customModel.scale.set(30, 30, 30);
		//         customModel.position.y = 4;
		//     },
		//     undefined,
		//     function (error) {
		//         console.error(error);
		//     }
		// );

		// const cupcakeUrl = window.URL.createObjectURL(new Blob([{cupcake}]));

		// loader.load(
		//     cupcakeUrl,
		//     function (gltf) {
		//         var customModel = gltf.scene;
		//         // scene2.add(gltf.scene);
		//         customModel.scale.set(30, 30, 30);
		//         customModel.position.x = Math.random() * 10;
		//         customModel.position.y = Math.random() * 10;
		//         customModel.position.z = Math.random() * 10;
		//     },
		//     undefined,
		//     function (error) {
		//         console.error(error);
		//     }
		// );

		// for (let i = 0; i < 5; i++) {
		//     loader.load(
		//         cupcakeUrl,
		//         function (gltf) {
		//             var customModel = gltf.scene;
		//             // scene2.add(gltf.scene);
		//             customModel.scale.set(20, 20, 20);
		//             // customModel.position.x = 35;
		//             // customModel.position.y = 2;
		//             // customModel.rotation.z = 20;
		//             customModel.scale.set(Math.random() * 20, Math.random() * 20, Math.random() * 20);
		//             customModel.position.x = Math.random() * 20;
		//             customModel.position.y = Math.random() * 20;
		//             customModel.position.z = Math.random() * 20;

		//         },
		//         undefined,
		//         function (error) {
		//             console.error(error);
		//         }
		//     )
		// };

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
	});

</script>

<!-- threejs canvas -->
<div id="canvas" />
	<!-- Main welcome area -->
	<div class="hero">
		<div class="hero__welcome-msg">
			<h1>
				<a href="/about"
					><span class="hero__name-top">Hi, my name is </span><br />
					<div class="hero__name-bottom">Matthew<br />Incardona</div>
				</a>
			</h1>
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