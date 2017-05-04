<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Task of Lesson 1
        DB::table('tasks')->insert([
            'name' => 'What\'s HTML?',
            'content_task' => 'HTML
             is the language\n used to create the web pages you visit everyday. It provides a logical way to structure content for web pages.

Let\'s analyze the acronym "HTML", as it contains a lot of useful information. HTML stands for HyperText Markup Language.

A markup language is a computer language that defines the structure and presentation of raw text. Markup languages work by surrounding raw text with information the computer can interpret, "marking it up" for processing.

HyperText is text displayed on a computer or device that provides access to other text through links, also known as “hyperlinks”. In fact, you probably clicked on many, many hyperlinks on your path to this Codecademy course!

In this course, you\'ll learn how to use the fundamentals of HTML to structure, present, and link content. You\'ll also learn how to use CSS, or Cascading Style Sheets, to style the HTML content you add to web pages.

Let\'s get started!',
            'source_code_html' => '<!DOCTYPE html>
<html>
  <head>
    <title>An Unexpected Journey</title>
    <link href=\'https://fonts.googleapis.com/css?family=Playfair+Display:900|Raleway:300\' rel=\'stylesheet\' type=\'text/css\'>
  </head>
  <body>
  	<div class="container">
  		<h1>TEST</h1>
  	  <a class="btn" href="#">Get Started</a>
  	</div>
  </body>
</html>',
            'source_code_css' => '* {
	margin: 0;
	padding: 0;
}

html, body {
	height: 100%;
	width: 100%;
}

body {
	align-items: center;
  background-color: #FFF;
	display: flex;
	font-family: \'Raleway\', sans-serif;
	flex-direction: column;
	justify-content: center;
	overflow: hidden;
}

div.container {
	align-items: center;
	align-self: center;
	background: url(\'https://s3.amazonaws.com/codecademy-content/courses/web-101/unit-1/01/background.jpg\') center center;
	border-radius: 100%;
	display: flex;
	flex-direction: column;
	min-height: 800px;
	justify-content: center;
	width: 800px;
}

h1 {
  color: #fff;
  font-family: \'Playfair Display\', serif;
  font-size: 52px;
  font-weight: 900;
  line-height: 46px;
  margin: 0 0 60px 0;
  text-align: center;
  text-shadow: 0px 2px 4px rgba(34,62,66,.75);
  width: 50%;
}

a.btn {
	background: linear-gradient(45deg, rgba(255,184,115,0.65) 0%,rgba(255,124,189,0.65) 50%,rgba(108,0,153,0.65) 100%);
	border-radius: 2px;
	box-shadow: 0px 2px 4px rgba(34,62,66,.25);
  color: #fff;
  font-size: 18px;
  letter-spacing: 1px;
  padding: 16px 32px;
  text-decoration: none;
  text-transform: uppercase;
  -webkit-transition: box-shadow 1s ease;
	transition: box-shadow 1s ease;
}

a.btn:hover {
	box-shadow: 0px 4px 4px rgba(34,62,66,.5);
	-webkit-transition: box-shadow 1s ease;
	transition: box-shadow 1s ease;
}',
            'lesson_id' => '1',
            'stt' => '1'
        ]);

        DB::table('tasks')->insert([
            'name' => '!Doctype',
            'content_task' => 'A web browser must know what language a document is written in before they can process the contents of the document.

You can let web browsers know that you are using the HTML language by starting your HTML document with a document type declaration.

The declaration is the following:

<!DOCTYPE html>
This declaration is an instruction. It tells the browser what type of document to expect, along with what version of HTML is being used in the document. <!DOCTYPE html>must be the first line of code in all of your HTML documents.

Note: If you don\'t use the doctype declaration, your HTML code will likely still work, however, it\'s risky. Right now, the browser will correctly assume that you are using HTML5, as HTML5 is the current standard. In the future, however, a new standard will override HTML5. Future browsers may assume you\'re using a different, newer standard, in which case your document will be interpreted incorrectly. To make sure your document is forever interpreted correctly, always include <!DOCTYPE html> at the very beginning of your HTML documents.',
            'source_code_html' => '',
            'source_code_css' => '',
            'lesson_id' => '1',
            'stt' => '2'
        ]);

        DB::table('tasks')->insert([
            'name' => 'Heading',
            'content_task' => 'Great! Browsers that read your code will know to expect HTML when they attempt to read your file.

The <!DOCTYPE html> declaration is only the beginning, however. It only tells the browser that you plan on using HTML in the document, it doesn\'t actually add any HTML structure or content.

To begin adding HTML structure and content, we must first add opening and closing <html> tags, like so:

<!DOCTYPE html>
<html>

</html>
Anything between <html> and </html> will be considered HTML code. Without these tags, it\'s possible that browsers could incorrectly interpret your HTML code and present HTML content in unexpected ways.',
            'source_code_html' => '<!DOCTYPE html>',
            'source_code_css' => '',
            'lesson_id' => '1',
            'stt' => '3'
        ]);

        DB::table('tasks')->insert([
            'name' => 'The Head',
            'content_task' => 'So far, you\'ve declared to the browser the type of document it can expect (an HTML document) and added the HTML element (<html>) that will contain the rest of your code. Let\'s also give the browser some information about the page. We can do this by adding a <head> element.

The <head> element will contain information about the page that isn\'t displayed directly on the actual web page (you\'ll see an example in the next exercise).

<!DOCTYPE html>
<html>
  <head>

  </head>
</html>',
            'source_code_html' => '<!DOCTYPE html>
<html>

</html>',
            'source_code_css' => '',
            'lesson_id' => '1',
            'stt' => '4'
        ]);
        DB::table('tasks')->insert([
            'name' => 'Page Titles',
            'content_task' => 'What kind of information about the web page can the <head> element contain?

Well, if you look at the top of your browser (or at one of the tabs you may have open in this browser window), you\'ll notice the words Learn HTML & CSS: Part I | Codecademy, which is the title of this web page.

The browser displays the title of the page because the title can be specified directly inside of the <head> element, by using a <title> element.

<!DOCTYPE html>
<html>
  <head>
    <title>My Coding Journal</title>
  </head>
</html>
If we were to open a file containing the HTML code in the example above, the browser would display the words My Coding Journal in the title bar (or in the tab\'s title).',
            'source_code_html' => '<!DOCTYPE html>
<html>
  <head>

  </head>
</html>',
            'source_code_css' => '',
            'lesson_id' => '1',
            'stt' => '5'
        ]);
        DB::table('tasks')->insert([
            'name' => 'The Body',
            'content_task' => 'We\'ve added some HTML, but still haven\'t seen any results in the web browser to the right. Why is that?

Before we can add content that a browser will display, we have to add a body to the HTML file. Once the file has a body, many different types of content can be added within the body, like text, images, buttons, and much more.

<!DOCTYPE html>
<html>
  <head>
    <title>I\'m Learning To Code!</title>
  </head>
  <body>

  </body>
</html>
All of the code above demonstrates what is sometimes referred to as "boilerplate code."

The term "boilerplate code" is used to describe the basic HTML code required to begin creating a web page. Without all of the elements in the boilerplate code, you\'ll risk starting without the minimum requirements considered to be best practice.

Note: The rest of the course will use code examples like the one above. To save space, however, code examples will avoid including common elements like the declaration, head, and so on. Unless otherwise specified, you can assume that the code in the example code blocks belongs directly within the HTML file\'s body.',
            'source_code_html' => '<!DOCTYPE html>
<html>
  <head>
    <title>My Coding Journal</title>
  </head>
</html>',
            'source_code_css' => '',
            'lesson_id' => '1',
            'stt' => '6'
        ]);
        DB::table('tasks')->insert([
            'name' => 'Review:Structure',
            'content_task' => 'Congratulations on completing the first unit of HTML & CSS! You are well on your way to becoming a skilled web developer.

Let\'s review what you\'ve learned so far:

The <!DOCTYPE html> declaration should always be the first line of code in your HTML files.
The <html> element will contain all of your HTML code.
Information about the web page, like the title, belongs within the <head> of the page.
You can add a title to your web page by using the <title> element, inside of the head.
Code for visible HTML content will be placed inside of the <body> element.
What you learned in this lesson constitutes the required setup for all HTML files. The rest of the course will teach you more about how to add content using HTML and how to style that content using CSS!',
            'source_code_html' => '',
            'source_code_css' => '',
            'lesson_id' => '1',
            'stt' => '7'
        ]);


        //Task of Lesson 2
        DB::table('tasks')->insert([
            'name' => 'Visible Content',
            'content_task' => 'In the last unit, you learned about the minimum amount of HTML code required to successfully structure a web page, sometimes referred to as "boilerplate code."

We added a declaration, a head, a title, and a body, but we still need content that the web browser can display. In this unit, we\'ll learn how to use some of the most common HTML elements that add content to web pages.

Keep in mind that HTML was originally created to markup, or present, text. The first few units of this course will focus solely on how HTML can be used to mark up text. Later in the course, we\'ll dive deeper into more advanced styling techniques using CSS.

Let\'s get started!',
            'source_code_html' => '<!DOCTYPE html>
<html>
<head>
  <title>Animals Around the World</title>
</head>
<body>
  <h1>The Brown Bear</h1>
  <!-- A section that describes the brown bear -->
  <p>The brown bear (Ursus arctos) is native to parts of northern Eurasia and North America. Its conservation status is currently "Least Concern." There are many subspecies within the brown bear species, including the Atlas bear and the Himalayan brown bear.</p>
  <a href="https://en.wikipedia.org/wiki/Brown_bear">Learn More</a>
  <p>Here are some bear species:</p>
  <ul>
    <li>Arctos</li>
    <li>Collarus</li>
    <li>Horribilis</li>
    <li>Nelsoni (extinct)</li>
  </ul>
  <p>The following countries have the largest populations of brown bears:</p>
  <ol>
    <li>Russia</li>
    <li>United States</li>
    <li>Canada</li>
  </ol>
  <a href="#" target="_blank">
    <img src="https://s3.amazonaws.com/codecademy-content/courses/web-101/web101-image_brownbear.jpg" /></a>
</body> 
</html>',
            'source_code_css' => '',
            'lesson_id' => '2',
            'stt' => '1'
        ]);

        DB::table('tasks')->insert([
            'name' => 'Headings',
            'content_task' => 'Headings in HTML can be likened to headings in other types of media. For example, in newspapers, large headings are typically used to capture a reader\'s attention. Other times, headings are used to describe content, like the title of a movie or an educational article.

HTML follows a similar pattern. In HTML, there are six different headings, or heading elements. Headings can be used for a variety of purposes, like titling sections, articles, or other forms of content.

The following is the list of heading elements available in HTML. They are ordered from largest to smallest in size.

<h1> - used for main headings, all other smaller headings are used for subheadings.
<h2>
<h3>
<h4>
<h5>
<h6>
The following example code uses a headline intended to capture a reader\'s attention. It uses the largest heading available, the main heading element:
<h1>BREAKING NEWS</h1>',
            'source_code_html' => '<!DOCTYPE html>
<html>
<head>
  <title>Animals Around the World</title>
</head>
<body>

</body> 
</html>',
            'source_code_css' => '',
            'lesson_id' => '2',
            'stt' => '2'
        ]);

        DB::table('tasks')->insert([
            'name' => 'Paragraphs',
            'content_task' => 'Often times, headings are meant to emphasize or enlarge only a few words.

If you want to add content in paragraph format, you can add a paragraph using the paragraph element <p>.

<p>The Nile River is the longest river in the world, measuring over 6,850 kilometers long (approximately 4,260 miles). It flows through eleven countries, including Tanzania, Uganda, Rwanda, Burundi, Congo-Kinshasa, Kenya, Ethiopia, Eritrea, South Sudan, Sudan, and Egypt.</p>
Paragraphs are great for expanding the amount of content (text) on your web page. As you begin to add more text to your web page, however, keep in mind that large amounts of text in paragraph format can overwhelm web page visitors. For example, if multiple paragraphs on your web page each contain large amounts of text, your web page could become difficult to consume.',
            'source_code_html' => '<!DOCTYPE html>
<html>
<head>
  <title>Animals Around the World</title>
</head>
<body>
  <h1>The Brown Bear</h1>
</body> 
</html>',
            'source_code_css' => '',
            'lesson_id' => '2',
            'stt' => '3'
        ]);

        DB::table('tasks')->insert([
            'name' => 'Unordered Lists',
            'content_task' => 'Often times, it\'s better to display certain types of content in an easy-to-read list.

In HTML, you can use the unordered list for text you decide to format in bullet points. An unordered list outlines individual list items with a bullet point. You\'ve probably used an unordered list when writing down a grocery list or school supplies list.

To create a unordered list using HTML, you can use the <ul> element. The <ul> element, however, cannot hold raw text and cannot automatically format raw text with bullet points. Individual list items must be added to the unordered list using the <li> element.

<ul>
  <li>Limes</li>
  <li>Tortillas</li>
  <li>Chicken</li>
</ul>
In the example above, the list was created using the <ul> element and all individual list items were added using <li> elements.',
            'source_code_html' => '<!DOCTYPE html>
<html>
<head>
  <title>Animals Around the World</title>
</head>
<body>
  <h1>The Brown Bear</h1>
  <p>The brown bear (Ursus arctos) is native to parts of northern Eurasia and North America. Its conservation status is currently "Least Concern." There are many subspecies within the brown bear species, including the Atlas bear and the Himalayan brown bear.</p>
</body> 
</html>',
            'source_code_css' => '',
            'lesson_id' => '2',
            'stt' => '4'
        ]);

        DB::table('tasks')->insert([
            'name' => 'Ordered Lists',
            'content_task' => 'Great job! Some lists, however, will require a bit more structure. HTML provides the ordered list when you need the extra ordering that unordered lists don\'t provide.

Ordered lists are like unordered lists, except that each list item is numbered. You can create the ordered list with the <ol> element and then add individual list items to the list using <li> elements.

<ol>
  <li>Preheat the oven to 350 degrees.</li>
  <li>Mix whole wheat flour, baking soda, and salt.</li>
  <li>Cream the butter, sugar in separate bowl.</li>
  <li>Add eggs and vanilla extract to bowl.</li>
</ol>',
            'source_code_html' => '<!DOCTYPE html>
<html>
<head>
  <title>Animals Around the World</title>
</head>
<body>
  <h1>The Brown Bear</h1>
  <p>The brown bear (Ursus arctos) is native to parts of northern Eurasia and North America. Its conservation status is currently "Least Concern." There are many subspecies within the brown bear species, including the Atlas bear and the Himalayan brown bear.</p>
  <p>The following are subspecies of bears:</p>
  <ul>
    <li>Arctos</li>
    <li>Collarus</li>
    <li>Horribilis</li>
    <li>Nelsoni (extinct)</li>
  </ul>
</body> 
</html>',
            'source_code_css' => '',
            'lesson_id' => '2',
            'stt' => '5'
        ]);

        DB::table('tasks')->insert([
            'name' => 'Links',
            'content_task' => '',
            'source_code_html' => '',
            'source_code_css' => '',
            'lesson_id' => '2',
            'stt' => '6'
        ]);

        DB::table('tasks')->insert([
            'name' => 'More Link Attributes',
            'content_task' => '',
            'source_code_html' => '',
            'source_code_css' => '',
            'lesson_id' => '2',
            'stt' => '7'
        ]);

        DB::table('tasks')->insert([
            'name' => 'Images',
            'content_task' => '',
            'source_code_html' => '',
            'source_code_css' => '',
            'lesson_id' => '2',
            'stt' => '8'
        ]);

        DB::table('tasks')->insert([
            'name' => 'Alt',
            'content_task' => '',
            'source_code_html' => '',
            'source_code_css' => '',
            'lesson_id' => '2',
            'stt' => '9'
        ]);

        DB::table('tasks')->insert([
            'name' => 'Linking At Will',
            'content_task' => '',
            'source_code_html' => '',
            'source_code_css' => '',
            'lesson_id' => '2',
            'stt' => '10'
        ]);

        DB::table('tasks')->insert([
            'name' => 'White Space',
            'content_task' => '',
            'source_code_html' => '',
            'source_code_css' => '',
            'lesson_id' => '2',
            'stt' => '11'
        ]);

        DB::table('tasks')->insert([
            'name' => 'Line Breaks',
            'content_task' => '',
            'source_code_html' => '',
            'source_code_css' => '',
            'lesson_id' => '2',
            'stt' => '12'
        ]);

        DB::table('tasks')->insert([
            'name' => 'Indentation',
            'content_task' => '',
            'source_code_html' => '',
            'source_code_css' => '',
            'lesson_id' => '2',
            'stt' => '13'
        ]);

        DB::table('tasks')->insert([
            'name' => 'Comments',
            'content_task' => '',
            'source_code_html' => '',
            'source_code_css' => '',
            'lesson_id' => '2',
            'stt' => '14'
        ]);

        DB::table('tasks')->insert([
            'name' => 'Review:Common Elements',
            'content_task' => '',
            'source_code_html' => '',
            'source_code_css' => '',
            'lesson_id' => '2',
            'stt' => '15'
        ]);
    }
}
