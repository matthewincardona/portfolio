<script>
	import Zoom from 'svelte-medium-image-zoom';
  	import 'svelte-medium-image-zoom/dist/styles.css';
	import competitivePositioningAnalysis1 from '$lib/assets/second desk/competitive positioning analysis 1.png';
	import competitivePositioningAnalysis2 from '$lib/assets/second desk/competitive positioning analysis 2.png';
	import productOffering from '$lib/assets/second desk/product offering.png';
	import userPersona1 from '$lib/assets/second desk/user persona 1.webp';
	import userPersona2 from '$lib/assets/second desk/user persona 2.webp';
	import empathyMap1 from '$lib/assets/second desk/empathy map 1.webp';
	import empathyMap2 from '$lib/assets/second desk/empathy map 2.webp';
	import userFlow from '$lib/assets/second desk/user flow.png';
	import homeScreen from '$lib/assets/second desk/home screen.png';
	import desktopScreen from '$lib/assets/second desk/desktop screen.png';
	import planSelectionScreen from '$lib/assets/second desk/plan selection screen.png';
</script>

<svelte:head>
	<title>Projects | Second Desk</title>
</svelte:head>

<div class="case-study">
	<!-- overview -->
	<section>
		<div>
			<!-- <div class="case-study__header">
				<img
					class="case-study__cover"
					src={cover}
					alt="Macbook with Second Desk website on it."
					id="projectImage"
				/>
				<h1 id="projectTitle">Second Desk</h1>
			</div> -->
			<div class="case-study__title">
				<p>Case Study</p>
				<h1>Second Desk</h1>
			</div>
			<div class="case-study__container">
				<div>
					<h2>Overview</h2>
					<p>
						Second Desk is a <b>Desktop-As-A-Service product</b> that enables non-Windows users to stream
						Windows programs directly through their browser. This project will provide a solution for
						Chromebook and Linux users that can’t run work/school required Windows programs on their
						personal computers.
					</p>
					<p><strong>**Content shown is from earlier versions of the product/business</strong>.</p>
				</div>
				<div>
					<h2>Tools & Roles</h2>
					<p>Project Management, UX/UI Design, Frontend Development</p>
					<ul class="tag-container">
						<li class="project-tag"><span>AWS</span></li>
						<li class="project-tag"><span>CloudFlare</span></li>
						<li class="project-tag"><span>Electron</span></li>
						<li class="project-tag"><span>Figma</span></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- background -->
	<div class="bg-wrapper">
		<section>
			<div class="case-study__row">
				<h2>Background</h2>
				<p>
					With the massive growth of Chromebooks in recent years, particularly in the field of
					education, more and more students are using them to do their schoolwork. But after
					realizing how limiting a Chromebook’s app library can be, a lot of them end up frustrated
					and with very few options.
				</p>
				<p>
					I started Second Desk as a way to provide Chromebook users with a more robust computing
					experience, without having to purchase a new Windows or Mac machine. We’re focusing on a
					niche target audience with a specific problem to fix.
				</p>
			</div>
		</section>
	</div>

	<!-- competitive positioning analysis -->
	<section>
		<h2 class="case-study__section-title">Product Strategy</h2>
		<div class="case-study__row">
			<h3>Competitive Positioning Analysis</h3>
			<p>
				To understand our place in this growing market, we compared ourselves to a variety of
				Desktop-As-A-Service (DAAS) products ranging from enterprise-focused offerings to more
				consumer-grade ones. We found that there were very few companies who had products that both
				catered to individual consumers and offered a relatively low price point.
			</p>
			<p>
				We found that there were very few companies who had products that both catered to individual
				consumers and offered a relatively low price point.
			</p>
			<div class="case-study__flex">
				<Zoom>
					<img class="case-study__img case-study__img--small" src={competitivePositioningAnalysis1} alt="" loading="lazy" />
				</Zoom>
				<Zoom>
					<img class="case-study__img case-study__img--small" src={competitivePositioningAnalysis2} alt="" loading="lazy" />
				</Zoom>
			</div>
		</div>
	</section>

	<!-- product offering -->
	<div class="bg-wrapper">
		<section>
			<div class="case-study__row">
				<h3>Product Offering</h3>
				<p>
					At the moment, we’re still in the customer discovery phase. Our current concept of an MVP
					is subject to change as we continue learning more about the problems about users face.
					That said, we believe a potential solution is to stream a remote Windows server and its
					applications directly through the user’s browser. This approach has both pros and cons
					when compared to a common existing solution:
				</p>
				<div class="case-study__flex">
					<Zoom>
						<img class="case-study__img case-study__img--small" src={productOffering} alt="" loading="lazy" />
					</Zoom>
				</div>
				<p>
					After comparing these two approaches, we felt that ours did an excellent job of addressing
					our user’s issues, mainly a low price point and high ease-of-use. Because requiring a
					decent internet connection could be a challenge to some users, it will be an important
					area to test while we build our MVP.
				</p>
			</div>
		</section>
	</div>

	<!-- start of ui/ux design section -->
	<!-- empathy interviews -->
	<section>
		<h2 class="case-study__section-title">UI/UX Design</h2>
		<div class="case-study__row">
			<h3>Empathy Interviews</h3>
			<p>
				Being the only UX Designer on the team, it was my responsibility to establish a <b
					>user-centric approach</b
				>
				in my team. I used a few methods, which you can see below, to help put them in our audience's
				shoes.
			</p>
			<p>
				First and foremost, it was important to conduct interviews and collect data to work from, so
				we could have an idea of where to start. I wanted to understand common challenges our target
				audience faced while working on their computer(s); these were the questions I asked and the
				criteria used for participants:
			</p>
			<ul>
				<li>What is your occupation/major?</li>
				<li>How old are you?</li>
				<li>What is your current computer situation? Do you own one or do you share\lease?</li>
				<li>
					What do you regularly use it for? (school, work, personal; where do you use it; what apps
					do you typically run)
				</li>
				<li>What challenges do you face while using a computer? How does this make you feel?</li>
				<li>
					Is there any way in which you feel these challenges could be resolved? Is there anything
					stopping you from solving these challenges yourself?
				</li>
			</ul>
			<p>Target participant characteristics:</p>
			<ul>
				<li>Ages 12-24</li>
				<li>High school and college students</li>
				<li>Mainly Chromebook users</li>
				<li>Include participants of different majors</li>
				<li>Include participants of different genders</li>
			</ul>
		</div>
	</section>

	<!-- user personas -->
	<div class="bg-wrapper">
		<section>
			<div class="case-study__row">
				<h3>User Personas</h3>
				<p>
					These are the first personas that were made from the data we gathered. Of course, as we
					are constantly conducting more interviews and revising our work, updates will be made when
					new content is available.
				</p>
				<p>
					We found that our interviewees were were often more creative-focused in terms of
					current/preferred major, were on tight budgets and couldn't afford a more expensive Mac or
					PC, and were frustrated at having to switch between devices to get their work done.
				</p>
				<div class="case-study__flex">
					<Zoom>
						<img class="case-study__img case-study__img--small" src={userPersona1} alt="" loading="lazy" />
					</Zoom>
					<Zoom>
						<img class="case-study__img case-study__img--small" src={userPersona2} alt="" loading="lazy" />
					</Zoom>
				</div>
			</div>
		</section>
	</div>

	<!-- empathy maps -->
	<section>
		<div class="case-study__row">
			<h3>Empathy Maps</h3>
			<p>
				In order to gain a deeper understanding with our users and really connect with them, I
				created empathy maps. It was an effective way to, for lack of a better word, create empathy
				in my team, none of whom had ever seen this kind of thing before. Unlike the user personas,
				which focused more on the black-and-white needs of our users, these were more helpful for
				understanding people's general emotions and what they were thinking.
			</p>
			<div class="case-study__flex">
				<Zoom>
					<img
					class="case-study__img case-study__img--small bordered"
					src={empathyMap1}
					alt=""
					loading="lazy"
					/>
				</Zoom>
				<Zoom>
					<img
					class="case-study__img case-study__img--small bordered"
					src={empathyMap2}
					alt=""
					loading="lazy"
					/>
				</Zoom>
			</div>
		</div>
	</section>

	<!-- mockups -->
	<div class="bg-wrapper">
		<section>
			<div class="case-study__row">
				<h3>User Flow and Prototypes</h3>
				<p>
					Mapping out the user flow helped get an idea of how the website would actually function
					and what screens were needed for the prototype. This is a simplified example of how the
					flow looks.
				</p>
				<div class="constrained-img--horizontal" style="margin-bottom: 80px;">
					<Zoom>
						<img class="case-study__img" src={userFlow} alt="" loading="lazy" />
					</Zoom>
				</div>
				<p>Home page</p>
				<div class="case-study__flex">
					<Zoom>
						<img class="case-study__img" src={homeScreen} alt="" loading="lazy" />
					</Zoom>
				</div>
				<p>Select a plan</p>
				<div class="case-study__flex">
					<Zoom>
						<img class="case-study__img" src={planSelectionScreen} alt="" loading="lazy" />
					</Zoom>
				</div>
				<p>Desktop</p>
				<div class="case-study__flex">
					<Zoom>
						<img class="case-study__img" src={desktopScreen} alt="" loading="lazy" />
					</Zoom>
				</div>
				<p>Interactive Figma Prototype</p>
				<iframe
					class="case-study__img"
					title="figma frame"
					style="border: 1px solid rgba(0, 0, 0, 0.1); background-color: gray;"
					width="1000"
					height="600"
					src="https://embed.figma.com/proto/0Hn3hbJaOXv90jWwYgbCeB/Second-Desk?page-id=0%3A1&node-id=521-274&viewport=-947%2C-1479%2C0.09&scaling=scale-down-width&content-scaling=fixed&starting-point-node-id=521%3A44&embed-host=share" allowfullscreen></iframe>
			</div>
		</section>
	</div>

	<!-- start of development section -->
	<!-- mvp -->
	<section>
		<h2 class="case-study__section-title">Development</h2>
		<div class="case-study__row">
			<h3>MVP</h3>
			<p>
				There are two main components to our product: the website and the remote servers. To get a
				working MVP going, we need to allow access to a remote desktop session directly through our
				website.
			</p>
			<p>
				Our initial builds used a Windows 2019 EC2 instance from AWS and an in-browser remote
				desktop client called Myrtille. With it, we could access both remote applications like
				Inkscape and the full desktop of our server without ever needing a user download. We
				eventually constructed a React-based website that could connect users to specific programs
				and even offered a small library of downloaded apps to run.
			</p>
		</div>
	</section>

	<!-- future improvements -->
	<div class="bg-wrapper">
		<section>
			<div class="case-study__row">
				<h3>Future Improvements</h3>
				<p>While testing our MVP, there were several roadblocks that we kept facing:</p>
				<ul>
					<li>
						Our remote desktop software was designed for simple office programs, not
						graphics-intensive ones. Low stream quality and low FPS was sometimes an issue.
					</li>
					<li>
						The AWS instance lacked a dedicated GPU, which would bottleneck the performance of some
						programs.
					</li>
				</ul>
				<p>
					Finding new remote desktop software was our main priority, so after researching the stacks
					behind cloud gaming services like Google Stadia (who excelled at remote app streaming), we
					found that a WebRTC-based approach looked the most promising. Although, we are still in
					the process of looking for ways to improve performance on the server itself.
				</p>
			</div>
		</section>
	</div>

	<!-- what I learned -->
	<section>
		<div class="case-study__row case-study__bottom-section">
			<h2 class="__layer--base">Project Reflection</h2>
			<p>
				Going into this project, I had little familiarity with UX principles, server management, or
				coding for the web. I was the only product developer and designer working on it for a number
				of months, which forced me to learn how to do everything from the ground up. I’ve made a lot
				of progress since starting and I’m continuing to learn more as the project keeps evolving.
			</p>
		</div>
	</section>
</div>

<style>
	.case-study__title p {
		margin-bottom: 0px;
		font-weight: bold;
		color: rgb(94, 94, 94);
	}
</style>
