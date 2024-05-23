<?php get_header(); ?>

<section id="jobs">
    <div class="container">
        <div class="job-content">
            <h1 class="text-center">
                <span>Join our</span>
                <span class="blue-text">team</span>
                <span class="yellow-text">.</span>
            </h1>
            <p class="text-center tagline">
                Check out our current job openings.
            </p>
        </div>

        <div class="row mt-4">
            <div class="col-12 col-md-6">
                <div class="job-card">
                    <div class="job-img">
                        <div class="box padding-small blue-bg flex flex-vcenter flex-hcenter">
                            <img alt="Settings Icons depicting back-end software engineer" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/settings.svg" loading="lazy" />
                        </div>
                    </div>
                    <div class="solution-content">
                        <h3 class="solution-title">Back-end software engineer</h3>
                        <p>
                        You get the role of back-end developer and work closely with our data scientist and web developer to design, build, test, and maintain data management systems and the connected web services. Make sure our data scientist doesn’t go too wild and collaborate to bring his models to production.
                        </p>
                        <span class="job-link">
                        <a href="https://www.colibry.ai/jobs/software-back-end-engineer">Read more →</a>
                        </span>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-6">
                <div class="job-card">
                    <div class="job-img">
                        <div class="box padding-small lightyellow-bg flex flex-vcenter flex-hcenter">
                            <img alt="AI and data abstractions" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/data-science.svg" loading="lazy" />
                        </div>
                    </div>
                    <div class="solution-content">
                        <h3 class="solution-title">Data scientist/analyst/engineer intern</h3>
                        <p>Colibry is searching for a data enthusiastic problem-solver with knowledge of the capabilities of AI without forgetting the end goal. We search for a team-player who can also work autonomously and takes responsibility for his link in the chain.</p>
                    </div>
                    <span class="job-link">
                        <a href="https://www.colibry.ai/jobs/data-scientist-analyst-engineer-intern">Read more →</a>
                        </span>
                </div>
            </div>
    </div>
</section>

<?php get_footer(); ?>