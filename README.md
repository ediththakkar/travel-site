# travel-site
site for tourism, and travel abroad 
my personal webpage project

### Milestone 1 Feedback
Overall this is a great direction for PWP - to promote a business venture which is a travel and tourism company that you own/run - but I'm afraid that based on what I'm reading here your ideas may be outside of scope. Keep in mind that PWP is a single page, **static** website only. There will be no back-end to this project (aside from the very simple contact form). There will be no database, data design, or application layer in this project - thus no account creation or "logging in" or trip booking. Based on your Persona, it sounds like Joan wants to log in and book a vacation on your site - this is way way way far outside of the scope of what can be achieved in this class. Please review the PWP Overview for full details on the scope of this assignment, and please contact me via Slack if you have any questions. Also refer to the PWP Gallery for some examples of the scope of this project as well. 
- https://bootcamp-coders.cnm.edu/projects/personal/
- https://bootcamp-coders.cnm.edu/projects/personal/gallery/

What you can definitely achieve here is create a simple one-page site to promote your business, and use the contact form to facilitate customer contact. **Before starting Milestone 2a, please outline your Purpose, Audience, Goal(s) and Persona to detail the direction for your project to fall within scope. Please let me know ASAP when revisions are in place.**

Your project is all set up to spec, but there are some problems with your code. Please see Edits &amp; Suggestions below for more details.

Your Milestone 1 passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/), but please submit revisions before beginning work on Milestone 2&alpha;.

#### Edits &amp; Suggestions
- Your `<head>` tag is not closed properly - and should be closed just below line 5, not on line 24.
- Watch your indentation - it's off.
- Line 13: This `<img>` tag should link to an image file, not milestone-1.php. 

### Milestone 2a Feedback
Nice job with the wireframes and content strategy - your design ideas and overall direction for this project are nicely defined. There is room for more detail in the Content Strategy given the amount of detail in the wireframes, but this is a good start. The page design is ambitious, and after reviewing the code you've done here and on the Bootstrap Challenge I am concerned that you need much more practice before you can effectively build something this complex.

The HTML structure is incorrect - in a very similar way to the errors that I saw in Milestone 1. I see evidence of poor copy/paste, missing required HTML elements, and HTML tags that are not nested, indented, or opened/closed properly. You need more practice. Please start using the [W3Validator](https://validator.w3.org/) to check your HTML code. I'm concerned because you are having such difficulty with very basic HTML that you will not be able to successfully create the intricate layout design you've created in the wireframes. I strongly suggest simplifying your design ideas until you are able to successfully complete the Bootstrap Challenge perfectly.

I see many differences between the Desktop and Mobile versions of the wireframes, and I'm not clear whether this is intentional or not (it's not specified in the Content Strategy). The entire section above About Us on desktop is missing on mobile. Again, I don't know if this is a mistake or intentional.

The way you have the Travel section designed here will require a totally different version for desktop than for mobile. I suggest simplifying your plan here and making one version that is _responsive_ instead. You can create a custom map using the [Google My Maps API](https://www.google.com/maps/about/mymaps/) and embed it into your HTML. You'll need to read the official documentation for instructions.

Here is the official documentation for the Facebook like button: https://developers.facebook.com/docs/plugins/like-button. It's easy to use. I see a YouTube subcribe button as well. These elements aren't discussed in the Content Strategy (they should be) - but the YouTube subscribe button instructions are here: https://developers.google.com/youtube/youtube_subscribe_button.

Again, I recommend you continue to practice your HTML and Bootstrap skills before beginning to build your project. Simplify your plan where needed. Please remove `style.css` and `contactform.html` from your project - these files do not belong here. **We'll be building PWP in a file named index.php inside of /public_html**. Please note that no frontend-facing site files should live outside of the /public_html directory. Remember use the directory structure that is outlined for this project, and keep an organized and standards-compliant directory structure to house all images, JavaScript, CSS, etc. We are done with the /documentation directory for now.

Your Milestone 2a passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/) due to code errors. Correct all HTML code errors (use the [W3Validator](https://validator.w3.org/)) by Wed 5/9 8:00am and I'll bump your grade to [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

#### Edits &amp; Suggestions
- Correct all HTML errors. Use the [W3Validator](https://validator.w3.org/).
