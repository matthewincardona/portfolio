<script>
    import greenScorePopup from '$lib/assets/greenovation/green score popup.webp';
    import greenScore from '$lib/assets/greenovation/green score.webp';
    import home from '$lib/assets/greenovation/home.webp';
    import informationArchitecture from '$lib/assets/greenovation/information architecture.png';
    import journey from '$lib/assets/greenovation/journey.png';
    import logIn from '$lib/assets/greenovation/log in.png';
    import signUp from '$lib/assets/greenovation/sign up.png';
    import searchCategory from '$lib/assets/greenovation/search category.png';
    import splashPage1 from '$lib/assets/greenovation/splash page 1.png';
    import splashPage2 from '$lib/assets/greenovation/splash page 2.png';
</script>

<div class="case-study">
    <!-- overview -->
    <section>
      <div class="case-study__title">
        <h1>Rochester Greenovation</h1>
        <ul class="tag-container">
          <li class="project-tag"><span>UX/UI Designer</span></li>
        </ul>
        <div class="case-study__container">
          <div class="case-study__left-panel">
            <h4>Overview</h4>
            <p>
              This project was part of a UX competition hosted by the Rochester Institute of Technology. It’s a
              two-week event that brings students in touch with real clients and challenges them to create an app or
              website that fulfills the user’s needs. All of the design choices and overall approach is left up to
              the students.
            </p>
          </div>
          <div class="case-study__right-panel">
            <h4>Keywords</h4>
            <p>
              UX Research, Information Architecture, Visual Design
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- background -->
    <div class="bg-wrapper">
      <section>
        <div class="case-study__row">
          <h4>Background</h4>
          <p>
            I chose to work with the local thrift store Rochester Greenovation because of their unique value
            proposition to keep
            waste out of landfills and reuse old items. I worked alongside 3 other teammates who all came from
            different
            backgrounds in UI/UX.
          </p>
        </div>
        </section>
    </div>

    <!-- research -->
    <section>
      <div class="case-study__row">
        <h4>Research</h4>
        <ul>
          <li>We talked back and forth with Rochester Greenovation so we could better understand what their biggest
            issues were and what would and wouldn't work for them.</li>
          <li>Researched other eCommerce platforms, including more general ones such as Walmart and more thrift
            store style apps like OfferUp. This gave us a number of useful ideas,
            such as:
            <ul>
              <li>Popular eCommerce layouts and features we can use (such as a search feature with filters and a
                featured items section)</li>
            </ul>
          <li>Looked at Greenovation’s social media presence and how much they use each platform. Asked about
            which platforms they preferred to use and which they wanted to continuing using in the future</li>
        </ul>
      </div>
    </section>

    <!-- goals -->
    <div class="bg-wrapper">
      <section>
        <div class="case-study__row">
          <h4>Goals</h4>
          <p>
            After talking with Greeonvation, we laid out the following goals:
          </p>
          <ul>
            <li>
              Give volunteers an easy way to manage and update inventory, including taking pictures of new stock and
              adding them to the database
            </li>
            <li>Create a system where customers can review items and provide feedback
            </li>
            <li>Provide a way for Greenovation to communicate store closings and other information with customers
              and
              volunteers</li>
          </ul>
        </div>
      </section>
    </div>

    <!-- information architecture -->
    <section>
      <div class="case-study__row">
        <h4>Information Architecture</h4>
        <p>
        </p>
        <div class="constrained-img--horizontal">
          <img class="case-study__img" src={informationArchitecture} alt=""
            loading="lazy">
        </div>
        <img class="case-study__img" src={journey} alt="" loading="lazy">
      </div>
    </section>

    <!-- mockups -->
    <div class="bg-wrapper">
      <section>
        <div class="case-study__row">
          <h4>Mockups and Prototypes</h4>
          <p>Splash screen:
            <br />
            We wanted to show off how much Greenovation has helped their local community. When they first log on,
            users are shown, approximately, how much waste Greenovation has saved from going into landfills.
          </p>
          <div class="case-study__flex">
            <img class="case-study__img" src={splashPage1} alt="" loading="lazy">
            <img class="case-study__img" src={splashPage2} alt="" loading="lazy">
          </div>
          <p>Login & Sign Up screens:
            <br />
            Inventory management was an important feature for the client, so we decided to have an account system
            that would track purchases. It can be used to validate purchases and make sure reviews are given by the
            person who actually bought the item.
          </p>
          <div class="case-study__flex">
            <img class="case-study__img" src={logIn} alt="" loading="lazy">
            <img class="case-study__img" src={signUp} alt="" loading="lazy">
          </div>
          <p>Storefront & Search By Category</p>
          <div class="case-study__flex">
            <div class="constrained-img">
              <img class="case-study__img" src={home} alt="" loading="lazy">
            </div>
            <img class="case-study__img" src={searchCategory} alt="" loading="lazy">
          </div>
          <p>Figma Prototype</p>
          <div class="case-study__flex">
            <iframe class="case-study__img" title="figma frame" style="border: 1px solid rgba(0, 0, 0, 0.1); background-color: gray;" width="1000" height="600"
              loading="lazy"
              src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FzMWSOCraDOteNvTjuydF02%2FRochester-Greenovation%3Fnode-id%3D125%253A68%26viewport%3D241%252C48%252C0.44%26scaling%3Dscale-down%26page-id%3D21%253A2%26starting-point-node-id%3D125%253A68"
              allowfullscreen></iframe>
          </div>
        </div>
      </section>
    </div>

    <!-- future improvements -->
    <section>
      <div class="case-study__row">
        <h4>Future Improvements</h4>
        <p>
          To really show that Greenovation is dedicated to helping the environvment, we had considered making a
          gamification
          system that encouraged users to save waste. Shoppers would see a "Green Score" next to every item, which
          shows them approximately how much waste purchasing the item would save. 
          <br /><br />
          There was also room for tiering systems and other traditional gamification elements. Although we had wanted to explore this concept
          further, it was too close to the competition deadline and just couldn't be prioritized.
        </p>
        <div class="case-study__flex">
          <img class="case-study__img" src={greenScore} alt="" loading="lazy">
          <img class="case-study__img" src={greenScorePopup} alt="" loading="lazy">
        </div>
      </div>
    </section>
  </div>