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
        DB::table('tasks')->insert([
            'content' => 'HTML
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
            'content' => 'A web browser must know what language a document is written in before they can process the contents of the document.

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
            'content' => 'Headings in HTML can be likened to headings in other types of media. For example, in newspapers, large headings are typically used to capture a reader\'s attention. Other times, headings are used to describe content, like the title of a movie or an educational article.',
            'source_code_html' => '<!DOCTYPE html>
<html>
<head>
  <title>Animals Around the World</title>
</head>
<body>
  <h1>The Brown Bear</h1>
  <p>The brown bear (Ursus arctos) is native to parts of northern Eurasia and North America. Its conservation status is currently "Least Concern." There are many subspecies within the brown bear species, including the Atlas bear and the Himalayan brown bear.</p>
  <a href="https://en.wikipedia.org/wiki/Brown_bear" target="_blank">Learn More</a>
  <p>The following are subspecies of bears:</p>
  <ul>
    <li>Arctos</li>
    <li>Collarus</li>
    <li>Horribilis</li>
    <li>Nelsoni (extinct)</li>
  </ul>
  <p>The following countries have the largest populations<br> of brown bears:</p>
  <ol>
    <li>Russia</li>
    <li>United States</li>
    <li>Canada</li>    
	</ol>
  <a href="https://en.wikipedia.org/wiki/Brown_bear" target="_blank"><img src="https://s3.amazonaws.com/codecademy-content/courses/web-101/web101-image_brownbear.jpg" alt="This is a Bear"></a>
</body> 
</html>',
            'source_code_css' => '',
            'lesson_id' => '2',
            'stt' => '1'
        ]);

        DB::table('tasks')->insert([
            'content' => 'Headings in HTML can be likened to headings in other types of media. For example, in newspapers, large headings are typically used to capture a reader\'s attention. Other times, headings are used to describe content, like the title of a movie or an educational article.

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
    }
}
