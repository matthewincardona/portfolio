<svelte:head>
	<title>Matthew Incardona</title>
</svelte:head>

<script>
	// assets
	import arrow from '$lib/assets/arrow.svg';
	import secondDesk from '$lib/assets/secondDesk.webp';
	import douxDolci2 from '$lib/assets/douxdolci2.webp';
	import greenovation from '$lib/assets/greenovation.webp';
	import midterm from '$lib/assets/extra projects/midterm.jpg';

	import Hero from '$lib/Hero.svelte';
</script>

<Hero />
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
						Dive into my work on Second Desk, a Desktop-As-A-Service product that enables
						non-Windows users to stream Windows programs directly through their browser.
					</p>
					<a class="project__btn" href="/second-desk">
						Open Project
						<img class="project__btn-icon" src={arrow} alt="" />
					</a>
				</div>
				<div class="project-container__right-panel">
					<img class="project__img" src={secondDesk} alt="Second Desk project preview" />
				</div>

				<!-- Project Two -->
				<div class="project-container__left-panel">
					<h2>DouxDolci Web Design</h2>
					<ul class="tag-container">
						<li class="project-tag"><span>Founder</span></li>
						<li class="project-tag"><span>Web Designer</span></li>
					</ul>
					<p class="project__descr">
						Explore projects from my freelance web design business, DouxDolci Web Design, where I
						work one-on-one with a variety of clients to improve their online presence.
					</p>
					<a class="project__btn" href="/web-design">
						Open Project
						<img class="project__btn-icon" src={arrow} alt="" />
					</a>
				</div>
				<div class="project-container__right-panel">
					<img class="project__img" src={douxDolci2} alt="Web design project preview" />
				</div>

				<!-- Project Three -->
				<div class="project-container__left-panel">
					<h2>Rochester Greenovation</h2>
					<ul class="tag-container">
						<li class="project-tag"><span>UX/UI Designer</span></li>
					</ul>
					<p class="project__descr">
						Take a look at my time with Rochester Greenovation, a local thrift store with a goal to
						let nothing go to waste. This project was part of a two-week team-based UX competition
						hosted by the Rochester Institute of Technology.
					</p>
					<a class="project__btn" href="/rochester-greenovation">
						Open Project
						<img class="project__btn-icon" src={arrow} alt="" />
					</a>
				</div>
				<div class="project-container__right-panel">
					<img
						class="project__img"
						src={greenovation}
						alt="Rochester Greenovation project preview"
					/>
				</div>
			</div>

			<!-- Extra Projects -->
			<div class="case-study">
				<div class="bg-wrapper">
					<section>
						<!-- <h3 class="case-study__section-title">Extra Projects</h3>
                            <p>See some of the websites that didn't receive their own page, but still deserve a place.
                            <br /><br /><br /><br />
                            </p> -->
						<div class="case-study__row">
							<h4>Class Projects</h4>
							<p>
								ISTE240 Individual Final Project: This was a semester-long website build that
								included both design and development work. The site is based off of a popular
								boatshow in Newport, Rhode Island and is made modular using PHP and a MySQL database
								to store user comments. <a href="https://people.rit.edu/mpi7253/ISTE240/Midterm/"
									><b><u>Try it out here!</u></b></a
								>
							</p>
							<div class="case-study__flex">
								<a href="https://people.rit.edu/mpi7253/ISTE240/Midterm/">
									<img class="case-study__img" src={midterm} alt="" loading="lazy" />
								</a>
							</div>
						</div>

						<!-- <div class="case-study__row">
                                <h4>ISTE240 Group Final Project</h4>
                                <p>This was a semester-long website build that included both design and development work. 
                                The site is made modular using PHP and uses a MySQL database to store user comments. Try it out yourself!</p>
                                <div class="case-study__flex">
                                <a href="https://people.rit.edu/mpi7253/ISTE240/Midterm/">
                                <img class="case-study__img" src="./assets/extra-projects/Midterm.jpg" alt="" loading="lazy">
                                </a>
                                </div>
                            </div> -->
					</section>
				</div>
			</div>
		</div>
	</section>