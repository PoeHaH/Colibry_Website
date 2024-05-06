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
3. Copy the project into the `themes` folder of the website you created in step 1. You can do so in the terminal of vscode (or any other IDE you may use ). Use this command: `sudo cp -r ./ "/Users/[YOUR_USER]/Local Sites/colibry/app/public/wp-content/themes/colibry"`
   * Make sure to change `[YOUR_USER]` to your actual username so the path is correct.
4. Now login to your WordPress backend (click the `WP Admin` button in LocalWP) and navigate to `Appearance > Themes` and activate the `Colibry` theme.

You only have to perform these steps once at the installation process.

Each time you make changes and you want to preview it on your WordPress site, just fire the command from step 3.

### possible improvements

This process does not have 'live reload' as you're programming and requires a manual action from you (to fire the command from step 3). This could be finetuned at a later stage.

## How to create a new page

__IMPORTANT NOTE:__ the info below is *only valid* during development. Once development is closer to its end, we will use WordPress itself to add content to pages and then this workflow will change.

1. Login to the WordPress admin area. If you've followed the installation steps above, your admin area will be accessible at `colibry.local/wp-admin`.
2. Navigate to `Pages > Add New`. In this example, we will create an "about" page.
3. As page title, enter "About" and click publish to save the page. WordPress will automatically create a URL based on the page title (it does so by stripping out all non-URL friendly characters and converting spaces to dashes). This means your site now has a new URL available at `colibry.local/about`.
4. Now that we have a URL, we need to add content to it. This can be done by adding a new `.php` file in the main directory of the development project. The name of this file should be `page-{URL from WordPress}`, so in our case, the file name should be `page-about.php`. You can  add your body content to that file and it will appear on `colibry.local/about`. You do not need to add the header and footer content as this is separated into a `header.php` and `footer.php` file and WordPress will  include this if you use the `get_header` and `get_footer` functions in your page. Check the example `page-about.php` file to see this.