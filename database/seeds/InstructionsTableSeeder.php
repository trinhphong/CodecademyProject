<?php

use Illuminate\Database\Seeder;

class InstructionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed lesson 1
        DB::table('instructions')->insert([
            'content_ins' => 'In the code editor to the right, type Hello in between &lt;h1&gt; and  &lt;/h1&gt;, then press Run.',
            'solution_HTML' => '<!DOCTYPE html>
<html>
  <head>
    <title>An Unexpected Journey</title>
    <link href=\'https://fonts.googleapis.com/css?family=Playfair+Display:900|Raleway:300\' rel=\'stylesheet\' type=\'text/css\'>
  </head>
  <body>
  	<div class="container">
  		<h1>Hello</h1>
  	  <a class="btn" href="#">Get Started</a>
  	</div>
  </body>
</html>',
            'solution_CSS' => '* {
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
            'task_id' => '1',
        ]);

        DB::table('instructions')->insert([
            'content_ins' => 'On line 1, add the <!DOCTYPE html> declaration.',
            'solution_HTML' => '<!DOCTYPE html>',
            'solution_CSS' => '',
            'task_id' => '2'
        ]);

        DB::table('instructions')->insert([
            'content_ins' => 'After your <!DOCTYPE html> declaration, add opening (<html>) and closing (</html>) tags.',
            'solution_HTML' => '<!DOCTYPE html>
<html>

</html>',
            'solution_CSS' => '',
            'task_id' => '3'
        ]);

        DB::table('instructions')->insert([
            'content_ins' => 'Add a <head> element to index.html.',
            'solution_HTML' => '<!DOCTYPE html>
<html>
  <head>

  </head>
</html>',
            'solution_CSS' => '',
            'task_id' => '4'
        ]);
        DB::table('instructions')->insert([
            'content_ins' => 'Add "My Title" to your web page using the <title> element.',
            'solution_HTML' => '<!DOCTYPE html>
<html>
  <head>
    <title>My Title</title>
  </head>
</html>',
            'solution_CSS' => '',
            'task_id' => '5'
        ]);
        DB::table('instructions')->insert([
            'content_ins' => 'Add a body to your web page using the <body> element.',
            'solution_HTML' => '<!DOCTYPE html>
<html>
  <head>
    <title>My Tittle</title>
  </head>
  <body>

  </body>
</html>',
            'solution_CSS' => '',
            'task_id' => '6'
        ]);
        DB::table('instructions')->insert([
            'content_ins' => 'Add the required declaration on line 1 of index.html.',
            'solution_HTML' => '<!DOCTYPE html>',
            'solution_CSS' => '',
            'task_id' => '7'
        ]);

        DB::table('instructions')->insert([
            'content_ins' => 'Start an HTML document.',
            'solution_HTML' => '<!DOCTYPE html>
<html>
  
</html>',
            'solution_CSS' => '',
            'task_id' => '7'
        ]);

        DB::table('instructions')->insert([
            'content_ins' => 'Add a head to the web page.',
            'solution_HTML' => '<!DOCTYPE html>
<html>
  <head>
    
  </head>
</html>',
            'solution_CSS' => '',
            'task_id' => '7'
        ]);
        DB::table('instructions')->insert([
            'content_ins' => 'Add a title to the web page. The title is "My Title".',
            'solution_HTML' => '<!DOCTYPE html>
<html>
  <head>
    <title>My Tittle</title>
  </head>
</html>',
            'solution_CSS' => '',
            'task_id' => '7'
        ]);

        DB::table('instructions')->insert([
            'content_ins' => 'Add a body to the web page.',
            'solution_HTML' => '<!DOCTYPE html>
<html>
  <head>
    <title>My Tittle</title>
  </head>
  <body>

  </body>
</html>',
            'solution_CSS' => '',
            'task_id' => '7'
        ]);

        DB::table('instructions')->insert([
            'content_ins' => 'In index.html, copy the following line of code and paste it inside of the body:
<h1>Hello World!</h1>',
            'solution_HTML' => '<!DOCTYPE html>
<html>
  <head>
    <title>My Tittle</title>
  </head>
  <body>
		<h1>Hello World!</h1>
  </body>
</html>',
            'solution_CSS' => '',
            'task_id' => '7'
        ]);
//end SEED Lesson 1

        //Seed Ins Lesson 2
        DB::table('instructions')->insert([
            'content_ins' => 'Take a look at the code in index.html. What new code do you see?

Explore the code in this file and try modifying something at random. What happened?',
            'solution_HTML' => '',
            'solution_CSS' => '',
            'task_id' => '8'
        ]);


        DB::table('instructions')->insert([
            'content_ins' => 'In index.html, add an <h1> heading inside of the body. The heading should say: The Brown Bear.',
            'solution_HTML' => '<!DOCTYPE html>
<html>
<head>
  <title>Animals Around the World</title>
</head>
<body>
  <h1>The Brown Bear</h1>
</body> 
</html>',
            'solution_CSS' => '',
            'task_id' => '9'
        ]);

        DB::table('instructions')->insert([
            'content_ins' => 'In index.html, after the <h1> heading, add a paragraph that contains the following text:

The brown bear (Ursus arctos) is native to parts of northern Eurasia and North America. Its conservation status is currently "Least Concern." There are many subspecies within the brown bear species, including the Atlas bear and the Himalayan brown bear.',
            'solution_HTML' => '<!DOCTYPE html>
<html>
<head>
  <title>Animals Around the World</title>
</head>
<body>
  <h1>The Brown Bear</h1>
  <p>The brown bear (Ursus arctos) is native to parts of northern Eurasia and North America. Its conservation status is currently "Least Concern." There are many subspecies within the brown bear species, including the Atlas bear and the Himalayan brown bear.</p>
</body> 
</html>',
            'solution_CSS' => '',
            'task_id' => '10'
        ]);

        DB::table('instructions')->insert([
            'content_ins' => 'In index.html, add another paragraph after the first paragraph. The new paragraph should say:
The following are subspecies of bears:',
            'solution_HTML' => '<!DOCTYPE html>
<html>
<head>
  <title>Animals Around the World</title>
</head>
<body>
  <h1>The Brown Bear</h1>
  <p>The brown bear (Ursus arctos) is native to parts of northern Eurasia and North America. Its conservation status is currently "Least Concern." There are many subspecies within the brown bear species, including the Atlas bear and the Himalayan brown bear.</p>
  <p>The following are subspecies of bears:</p>
</body> 
</html>',
            'solution_CSS' => '',
            'task_id' => '11'
        ]);

        DB::table('instructions')->insert([
            'content_ins' => 'In index.html, under the new paragraph, create an unordered list. Do not add any list items to the list just yet.',
            'solution_HTML' => '<!DOCTYPE html>
<html>
<head>
  <title>Animals Around the World</title>
</head>
<body>
  <h1>The Brown Bear</h1>
  <p>The brown bear (Ursus arctos) is native to parts of northern Eurasia and North America. Its conservation status is currently "Least Concern." There are many subspecies within the brown bear species, including the Atlas bear and the Himalayan brown bear.</p>
  <p>The following are subspecies of bears:</p>
  <ul>
  </ul>
</body> 
</html>',
            'solution_CSS' => '',
            'task_id' => '11'
        ]);

        DB::table('instructions')->insert([
            'content_ins' => 'Add the following list items to the unordered list:

Arctos
Collarus
Horribilis
Nelsoni (extinct)',
            'solution_HTML' => '<!DOCTYPE html>
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
            'solution_CSS' => '',
            'task_id' => '11'
        ]);

        DB::table('instructions')->insert([
            'content_ins' => 'In index.html, add another paragraph after the unordered list. The paragraph should say:
The following countries have the largest populations of brown bears:',
            'solution_HTML' => '<!DOCTYPE html>
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
            'solution_CSS' => '',
            'task_id' => '12'
        ]);

        DB::table('instructions')->insert([
            'content_ins' => 'In index.html, under the paragraph, create an ordered list. Do not add any list items to the list just yet.',
            'solution_HTML' => '<!DOCTYPE html>
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
            'solution_CSS' => '',
            'task_id' => '12'
        ]);

        DB::table('instructions')->insert([
            'content_ins' => 'Add the following list items to the ordered list:
Russia
United States
Canada',
            'solution_HTML' => '<!DOCTYPE html>
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
            'solution_CSS' => '',
            'task_id' => '12'
        ]);

        //End Seed Lesson 2
    }
}

