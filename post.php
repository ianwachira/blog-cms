<?php
    include 'header.php';
    include 'nav.php';
    include 'footer.php';
?>
<html>
    <article>
        <header>
          <h1>Welcome to my Blog!</h1>
          <p>Posted by Ian Wachira</p>
          <p>Enjoy Reading!</p>
          <link rel="stylesheet" href="format.css">
      </article>
      <nav>
        <a href="post.php">Post</a> |
        <a href="post-submission.html">Post Submission</a> |
      </nav>
      <main>
        <?php
        function getPostTitlesFromDatabase
        $postDetails = array('title' => 'Blog Post 1',
                             'content' => 'My first blog post',
                             'date' => '4/10/22',
                             'author' => 'ianw',
        return $postDetails;
        }
      $postDetails = <getPostTitlesFromDatabase{}; 
      ?>
        <h1> <?php echo $postDetails["title"]; ?> </h1>
        <div> <?php echo $postDetails["author"]; ?> </div>
        <div> <?php echo $postDetails["date"]; ?> </div>
        <div> <?php echo $postDetails["content"]; ?> </div>

        <h1>Most Popular Browsers</h1>
        <p>Chrome, Firefox, and Edge are the most used browsers today.</p>
      
        <article>
          <h2>Google Chrome</h2>
          <p>Google Chrome is a web browser developed by Google, released in 2008. Chrome is the world's most popular web browser today!</p>
        </article>
      
        <article>
          <h2>Mozilla Firefox</h2>
          <p>Mozilla Firefox is an open-source web browser developed by Mozilla. Firefox has been the second most popular web browser since January, 2018.</p>
        </article>
      
        <article>
          <h2>Microsoft Edge</h2>
          <p>Microsoft Edge is a web browser developed by Microsoft, released in 2015. Microsoft Edge replaced Internet Explorer.</p>
        </article>
      </main> 
      <head>
        <style>
        .myDiv {
          border: 5px outset red;
          background-color: lightblue;
          text-align: center;
        }
        </style>
        </head>
        <body>
         <div class="Author">
          <h2>Author Div Heading</h2>
          <p>This is some text in a div element.</p>
        </div>
        <div class="DatePub">
            <h2>Date Published Div Heading</h2>
            <p>This is some text in a div element.</p>
          </div>
        <div class="PostContent">
            <h2>Post Content Div Heading</h2>
            <p>This is some text in a div element.</p>
        </div>
        </body>
      <footer>
        <p>Author: Ian Wachira</p>
        <p><a href="mailto:iwachira@lesley.edu">iwachira@lesley.edu</a></p>
      </footer>
</html>