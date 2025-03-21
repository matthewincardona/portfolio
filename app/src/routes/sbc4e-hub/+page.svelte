<script>
	import persona from '$lib/assets/sbc4e/persona.png';
	import userJourney from '$lib/assets/sbc4e/user-journey.png';
	import sketch1 from '$lib/assets/sbc4e/sketch1.jpg';
	import sketch2 from '$lib/assets/sbc4e/sketch2.jpg';
	import mood1 from '$lib/assets/sbc4e/mood1.png';
	import mood2 from '$lib/assets/sbc4e/mood2.png';
	import mood3 from '$lib/assets/sbc4e/mood3.png';
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

<div class="case-study">
	<!-- overview -->
	<section>
		<div class="case-study__title">
			<h1>SBC4E Hub</h1>
			<ul class="tag-container">
				<li class="project-tag"><span>UI Designer</span></li>
				<li class="project-tag"><span>UX Researcher</span></li>
			</ul>
			<div class="case-study__container">
				<div class="case-study__left-panel">
					<h4>Overview</h4>
					<p>
						The SBC4E Hub is a project aimed at provide social behavior change materials for
						education development. It gives users a central website to view resources, contribute
						their own, and use them in their own projects.
					</p>
				</div>
				<div class="case-study__right-panel">
					<h4>Keywords</h4>
					<p>UX/UI Design, UX Research</p>
				</div>
			</div>
		</div>
	</section>

	<!-- background -->
	<div class="bg-wrapper">
		<section>
			<div class="case-study__row">
				<h4>Text Overview</h4>
				<p>
					<strong> Users groups: </strong>
				</p>
				<ul>
					<li>
						beneficiaries: most orgs that are doing projects that support education systems in
						countries; practically, some combination of donors and orgs
					</li>
					<li>ministries of education</li>
					<li>
						lots of groups that are members of the mEducation Alliance (funders and project
						creators, implementing orgs)
					</li>
				</ul>

				<p style="margin-top: 40px">
					<strong> Reasons to use the platform: </strong>
				</p>
				<ul>
					<li>building a community and ability to get points of contact</li>
					<li>professional development</li>
					<li>knowledge exchange</li>
				</ul>

				<p>
					This is for organizations that are doing projects that support education systems in
					countries. These can be orgs who have been working on SBC4E for a long time or those who
					are just getting introduced to it and need somewhere to start. Our goal is to be a
					knowledge repository that centralizes a lot of this important information and makes it
					easy to search through and discover new content. It will be an open area for the
					dissemination of information; a robust and valuable platform that encourages users to keep
					contributing and others to continue discovering.
				</p>
			</div>
		</section>
	</div>

	<!-- competitive positioning analysis -->
	<section>
		<h3 class="case-study__section-title">Personas & Journey Maps</h3>
		<div class="case-study__row">
			<h4>Personas</h4>

			<div class="case-study__flex">
				<img class="case-study__img" src={persona} alt="" loading="lazy" />
			</div>
		</div>
	</section>

	<!-- product offering -->
	<div class="bg-wrapper">
		<section>
			<div class="case-study__row">
				<h4>User Journeys</h4>
				<div class="case-study__flex">
					<img class="case-study__img" src={userJourney} alt="" loading="lazy" />
				</div>
			</div>
		</section>
	</div>

	<!-- start of ui/ux design section -->
	<!-- empathy interviews -->
	<section>
		<h3 class="case-study__section-title">LoFi Prototypes</h3>
		<div class="case-study__row">
			<h4>Sketches</h4>
			<p>
				I created very LoFi sketches to test different ideas out quickly and get some iterate over
				my work. Below, you can see sketches for different variants of the search and filter and a
				potential content "forking" system.
			</p>
			<div class="case-study__flex">
				<img class="case-study__img" src={sketch1} alt="" loading="lazy" />
			</div>
			<div class="case-study__flex">
				<img class="case-study__img" src={sketch2} alt="" loading="lazy" />
			</div>
		</div>
	</section>

	<!-- user personas -->
	<div class="bg-wrapper">
		<section>
			<div class="case-study__row">
				<h4>Moodboard</h4>
				<p>
					I began researching existing websites to give an idea of what a well-established and
					working solution could look like.
				</p>
				<div class="case-study__flex">
					<img class="case-study__img" src={mood1} alt="" loading="lazy" />
				</div>
				<div class="case-study__flex">
					<img class="case-study__img" src={mood2} alt="" loading="lazy" />
				</div>
				<div class="case-study__flex">
					<img class="case-study__img" src={mood3} alt="" loading="lazy" />
				</div>
			</div>
		</section>
	</div>

	<!-- empathy maps -->
	<section>
		<div class="case-study__row">
			<h4>LoFi Research</h4>
			<p>As I tested my LoFi sketches with users, I found several key things:</p>
			<ul>
				<li>
					Forking or having an events calendar could be a great feature to have, but wasn't a must
					have for an MVP
				</li>
				<li>
					This site would benefit greatly from being more of a "community of practice" rather than
					just a document database.
				</li>
			</ul>
		</div>
	</section>

	<!-- <div class="bg-wrapper">
      <section>
        <div class="case-study__row">
          <h4>User Flow</h4>
          <img class="case-study__img" src="./assets/second-desk/user-flow.png" alt="" loading="lazy">
        </div>
      </section>
    </div> -->

	<!-- mockups -->
	<div class="bg-wrapper">
		<section>
			<h3 class="case-study__section-title">HiFi Prototypes</h3>
			<div class="case-study__row">
				<h4>Research Setup</h4>
				<p />
				<p>
					From my research in the LoFi stage, I was able to create a higher fidelity prototype that
					I could use to test a more concrete design.
					<iframe
						title="Figma prototype"
						style="border: 1px solid rgba(0, 0, 0, 0.1);"
						width="1200"
						height="450"
						src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2F8xADyGAXFSU4Cyy4HEvkaK%2FPrototype%3Ftype%3Ddesign%26node-id%3D497-4513%26t%3DLdSms4aIq70suIym-1%26scaling%3Dmin-zoom%26page-id%3D404%253A1279%26starting-point-node-id%3D418%253A9179%26mode%3Ddesign"
						allowfullscreen
					/>
					<strong> Metrics: </strong>
				</p>
				<ul>
					<li>
						Gauge Clarity of Menu Options and Labels: Assess the clarity and intuitiveness of menu
						options and labels. Determine if users can easily understand and locate different
						sections of the app.
					</li>
					<li>
						Test Navigation Ease: Measure the ease of navigation within the app. Identify any
						potential difficulties users may encounter while navigating through the platform.
					</li>
					<li>
						Assess Visual Appeal: Understand participants' perceptions of the visual appeal of the
						app's design. Evaluate if the design aligns with the intended aesthetic for a platform
						focused on international development in education.
					</li>
					<li>
						Explore User Recommendations: Assess the likelihood of participants recommending the
						platform to others interested in international education development. Understand the
						potential for positive word-of-mouth and user advocacy.
					</li>
					<li>
						Uncover Areas for Improvement: Identify any pain points or areas of dissatisfaction in
						the user experience. Pinpoint aspects that might need improvement to enhance overall
						usability and satisfaction.
					</li>
					<p style="margin-top:40px">
						<strong> Tasks: </strong>
					</p>
					<ul>
						<ul>
							<li>
								Contribute a resource: Add a new resource to the hub by filling out the contribution
								form and submitting it.
							</li>
							<li>View a blog post: Open a blog post and view it.</li>
							<li>
								View a resource: Open a resource and view it, including looking at file attachments.
							</li>
							<li>
								Search/filter resources: Use search and filter to look for specific resources.
							</li>
						</ul>
						<p style="margin-top:40px">
							<strong> Metrics: </strong>
						</p>
						<ul>
							<li>
								Feedback and Comments Analysis: Qualitative analysis of user feedback and comments,
								providing insights into specific issues, preferences, and suggestions for
								improvement.
							</li>
							<li>
								Time on Task: The average time users spend on completing specific tasks, providing
								insights into task complexity and efficiency.
							</li>
							<li>
								User Satisfaction Scores: Ratings provided by users on overall satisfaction with the
								platform's design, functionality, and content relevance.
							</li>
							<p>Number of participants: 5 Method of Analysis: Online survey</p>
							<p />
						</ul>
					</ul>
				</ul>
			</div>
		</section>
	</div>

	<!-- start of development section -->
	<!-- mvp -->
	<section>
		<div class="case-study__row">
			<h4>Research Analysis</h4>
			<p>
				Before analyzing the survey results, it’s important to look at the verbal feedback I was
				given.
			</p>

			<p>
				<strong> Visuals: </strong>
				In my initial tests, despite how lively the very playful and colorful design looked to me, people
				preferred the more blue one. They often said that it was easier to follow and more obvious where
				they were supposed to be looking, eg. the hierarchy was stronger. The very gray and simple design
				was given points for simplicity, but people with more of a designer’s eye were not too interested
				in scrolling through gray boxes all day, nor could they see themselves using this version for
				long periods of time.
			</p>

			<p>
				<strong> Content: </strong>
				It was no surprise to me that people tended to favor the more information dense version of the
				resource cards. They felt like they were missing out on important information with the less detailed
				ones and that the design was taking precedence over the content. They also thought it would make
				searching through a long list of cards much harder, as you would have to open them more frequently
				in order to find the right ones.
			</p>

			<p>
				<strong> Survey results: </strong>
				Some of it was focused on missing elements in the prototype. Things such as missing the navbar
				on the top of every page or missing the ability to view an organization’s profile (which is a
				great idea and something that should be included in a future iteration, but is not part of the
				original task flow). Besides the navbar issue, the participants had no problems getting around
				the site. They reported that everything was clear and easy to get to. When creating the prototype
				I made sure to include multiple ways to complete the same task, such as being able to filter
				by topic by either using the filter dropdown or by clicking on the tag in a card. Someone had
				mentioned that the colors might be difficult for certain people to see, so I made slight adjustments
				to the contrast and checked it using an accessibility checker. Someone else was thinking ahead
				to when there’s going to be a lot more resources, suggesting that each card could use even more
				info and potentially a preview window. Although this might be a great future idea, for now this
				is essentially all of the information available for each card and it shows exactly what the user
				needs to see for how few items there currently are.
			</p>
		</div>
	</section>
</div>
