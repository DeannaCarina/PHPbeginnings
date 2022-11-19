<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Beginnings</title>
</head>
<body>
    <h1 style="font-size:3rem; color:blue;">
        <?php 
            echo "Hello world!";
        ?>
    </h1>

    <h2 style="font-size:2.5rem">PHP Lesson 1 - the PHP tags</h2>
    <div>
        <p>
            <?php 
                echo "This is a paragraph inside of a div!";
            ?>
        </p>
        <p>
            <?php 
                echo "This is me learning PHP, hoping not to royally mess it up. I have experience with HTML and CSS, but this is new territory!";
            ?>
        </p>
        <p>
            <?php 
                echo "To run this code in a browser type: 'php -S localhost:8000' in the terminal.";
            ?>
        </p>
        <p>
            <ol>
                <li>
                    We need to open a PHP tag like this:<br>
                    <strong style="font-size:2rem; color:red;"><<span style="display:none">.</span>?php</strong><br><br><br>
                </li>
                <li>
                    And end it like this:<br>
                    <strong style="font-size:2rem; color:red;">?<span style="display:none">.</span>></strong><br><br><br>
                </li>
                <li>
                    So a whole php line of code could look like this:<br>
                    <strong style="font-size:2rem; color:red;"><<span style="display:none">.</span>?php echo "Hello world!"; ?></strong>
                </li>
            </ol>
        </p>
        <p>So far I've learned, 'echo' works like a Python print statement, and all php commands end with a semi-colon, not dissimilar to JavaScript.</p>
    </div>

    <h2 style="font-size:2.5rem">PHP Lesson 2 -Variables</h2>
    <div>
        <p>
            <?php 
                echo "Hello " . "world!";
            ?>
        </p>
        <p>
            Concatenating strings: In PHP, we don't use a '+' sign, like we would in python or JavaScript, instead we use a ".", full-stop/period. So the "Hello world!" above code looks like this:<br>
            <strong style="font-size:2rem; color:red;"><<span style="display:none">.</span>?php echo "Hello " . " world!"; ?></strong>
        </p>
        <p>
            <?php 
                $greeting = "Hello";
                echo $greeting . " " . "world!";
            ?>
        </p>
        <p>
            We can create variables in PHP using the "$" symbol, and then concatenate that variable into a string. The above code looks like this:<br>
            <strong style="font-size:2rem; color:red;"><<span style="display:none">.</span>?php $greeting = 'Hello';<br>echo $greeting . " " . "world!"; ?></strong>
        </p>
        <p>
            We could also have written it like this:<br>
            <strong style="font-size:2rem; color:red;"><<span style="display:none">.</span>?php "$greeting world!"; ?></strong>
        </p>
        <p>
            This is called refactoring, in other words: changing the code to something different or 'cleaner' for the programmer, but keeping the end result for the user the same.
        </p>
        <p>
            <strong>NOTE:</strong> If you want to nest a variable within a string, you MUST use double quotations. Single quotations will show the variable code as a text output.
        </p>
    </div>
    
    
</body>
</html>