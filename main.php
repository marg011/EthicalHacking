<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="style.css" rel="stylesheet" />
    <title>PHP homework</title>
  </head>
  <body>
    <div class="container">
      <header class="main-header">
        <h1>PHP basics</h1>
        <?php include 'menu.inc.php' ?>
      </header>
      <article>
        <header class="post-header">
          <h2><?php echo $welcome ?></h2>

           <?php include 'photo.inc.php' ?>
          <div class="personal">
            <h3><?php echo $acquaintance ?></h3>
            <ul class="intro">
              <li>My name is <?php echo $name . ' ' . $lastname ?></li>
              <li>I'm <?php echo $age ?> years old</li>
              <li>Based in <?php echo $city ?></li>
            </ul>
          </div>
        </header>
        <h3>About PHP</h3>
        <p>
          PHP is a recursive acronym for "PHP: Hypertext Preprocessor". PHP is a
          server side scripting language that is embedded in HTML. It is used to
          manage dynamic content, databases, session tracking, even build entire
          e-commerce sites.
        </p>
        <h3><?php echo $learning ?></h3>
        <ul class = 'knowledge'>
        <?php include 'knowledge.php' ?>
          <li>
            A variable starts with the $ sign and is automatically converted to
            the correct data type. <br>
            Examples:<br>
            $e = <?php echo $e ?> <br>
            $f = <?php echo $f ?> <br>
            $g = <?php echo $g ?> <br>
          </li>
          <li>gettype() returns the type of an object. <br>
            Example: gettype(3) <br> 
            Output: <?php echo gettype(3) ?></li>
          <li>
            A string variable can be enclosed in single or double quotes. 
            With double quotes a variable can be inserted in a string. <br> 
            Example with $h = <?php echo $h ?>:
             "I have $h apples" <br> 
            Output: <?php echo $k?>  
          </li>
          <li>Mathematical operations: +, -, *, /, &&, || etc. <br>
          Example: $e + $h <br>
          Output: <?php echo $e + $h?> <br>
          Example: $e > $h <br>
          Output: <?php echo $e > $h ?>
          </li>
        </ul>
      </article>
      <?php include 'footer.inc.php' ?>
    </div>
  </body>
</html>
