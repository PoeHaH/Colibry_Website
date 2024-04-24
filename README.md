# Colibry.ai website

Repository for the the WordPress website of https://colibry.ai/.

## Instal locally

There are many ways to get up & running with WordPress on your local machine. Below is just one way, with a step-by-step installation process (assuming Mac as the operating system).

1. Download and install [LocalWP](https://localwp.com/) on your machine.
   * Open the app and click the large "plus" icon at the bottom left to create a new WordPress website.
   * In the screen that pops up, select `Create a new site`.
   * Then, give it the name `colibry`.
   * Pick the `Prefered` option in the next screen.
   * Then set your username and password, this will allow you to log into the WordPress backend. Go through the rest of the onboarding (using the default settings) and wait for your site to finish  installing.
   * Once done, you have a WordPress website up and running. You can easily start/stop it, go to the WordPress backend, or even view the raw database files.
2. Use this repo on your local machine. If you are not familiar with how to do that, use the `Github Desktop` app to use a UI for everything.
3. Copy the project into the `themes` folder of the website you created in step 1. You can do so in the terminal of vscode (or any other IDE you may use ). Use this command: `cp -r ./ "/Users/[YOUR_USER]/Local Sites/colibry/app/public/wp-content/themes/colibry"`
   * Make sure to change `[YOUR_USER]` to your actual username so the path is correct.
4. Now login to your WordPress backend (click the `WP Admin` button in LocalWP) and navigate to `Appearance > Themes` and activate the `Colibry` theme.

You only have to perform these steps once at the installation process.

Each time you make changes and you want to preview it on your WordPress site, just fire the command from step 3.

### possible improvements

This process does not have 'live reload' as you're programming and requires a manual action from you (to fire the command from step 3). This could be finetuned at a later stage.