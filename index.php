<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PHP Beginnings</title>
</head>
<body>
    <h1 style="font-size:3rem; color:blue;">
        <?php 
            echo "Hello world!";
        ?>
    </h1>
    <p>
        <strong>SETUP:</strong>
        <ol>
            <li>brew install php</li>
            <li>brew install mysql</li>
            <li>php -S localhost:8000</li>
        </ol>
    </p>

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

    <h2 style="font-size:2.5rem">PHP Lesson 3 - Conditionals and Booleans</h2>
    <div>
        <?php 
        $name = "Harry Potter";
        $read = false;

        if ($read == true) {
            $message = "You have read $name";
        } else {
            $message = "You have not read $name";
        }

        ?>

        <p>
            <?php 
                echo $message;
            ?>
            <?= $message ?>
            <p>
                Writing "<<span>?php echo" can also be written as "<<span>?="
            </p>
        </p>
    </div>

    <h2 style="font-size:2.5rem">PHP Lesson 4 - Arrays</h2>
    <div>
        <?php 

            $books = [
                "Eragon",
                "Eldest",
                "Brisingr",
                "Inheritance"
            ];

        ?>

        <ul>
            <?php 
                foreach ($books as $book) {
                    echo "<li>$book</li>";
                }
            ?>
<br><br>
            <?php foreach ($books as $book) : ?>
                <li><?= $book ?></li>
            <?php endforeach; ?>


        </ul>

    </div>

    <h2 style="font-size:2.5rem">PHP Lesson 5 - Associative Arrays</h2>
        <p>Interacting with a specific value from an array, for example 'Eldest' from the 'books' array:</p>
        <p><strong style="font-size:2rem; color:red;"><<span style="display:none">.</span>?= $books[1] ?></strong><br>
        REMEMBER: Lists in PHP are zero based, i.e start at 0!<p>

        <?= $books[1] ?><br><br>

        <p>If we want to add more information to our arrays, we can add a sub-array with book specific information in each:</p>
        <p><strong style="font-size:2rem; color:red;"><<span style="display:none">.</span>?php $books = [<br>
        .... [<br>
        .... 'Eragon',<br>
        .... 'Saphira',<br>
        .... ],<br>
        .... [<br>
        .... 'Eldest',<br>
        .... 'Thorn',<br>
        .... ],<br>
        .... [<br>
        .... 'Brisingr',<br>
        .... 'Glaedr',<br>
        .... ],<br>
        .... [<br>
        .... 'Inheritance',<br>
        .... 'Firnen',<br>
        .... ],<br>
        ];    
    </strong><br>
    <p>However, there's no way of knowing for the user or for long-term maintenance what certain parts of the array are referring to. E.g. what are Saphira/Thorn/Glaedr/Firnen?<br>
We can add more information <strong>MUCH LIKE A DICTIONARY IN PYTHON</strong> with associated key-value pairs. <strong>NOTE: PHP uses camelcase (much the same as JavaScript!).</strong></p>
<p><strong style="font-size:2rem; color:red;"><<span style="display:none">.</span>?php $books = [<br>
        .... [<br>
        .... 'bookNumber' => 'First',<br>
        .... 'bookName' => 'Eragon',<br>
        .... 'dragonName' => 'Saphira'<br>
        ....],  <br>
        .... [<br>
        .... 'bookNumber' => 'Second',<br>
        .... 'bookName' => 'Eldest',<br>
        .... 'dragonName' => 'Thorn'<br>
        ....],<br>
        ];
    </strong><br>
<?php $books = [
    [
        "bookNumber" => "First",
        "bookName" => "Eragon",
        "dragonName" => "Saphira"
    ],
    [
        "bookNumber" => "Second",
        "bookName" => "Eldest",
        "dragonName" => "Thorn"
    ],
    [
        "bookNumber" => "Third",
        "bookName" => "Brisingr",
        "dragonName" => "Glaedr"
    ],
    [
        "bookNumber" => "Fourth",
        "bookName" => "Inheritance",
        "dragonName" => "Firnen"
    ],
];
?>
<ul>
    <?php foreach ($books as $book) : ?>
        <li>The <strong><?= $book['bookNumber']; ?></strong> in Christopher Paolini's Inheritance Cycle series is <strong><?= $book['bookName']; ?></strong> 
        and the dragon in this book is called <strong><?= $book['dragonName']; ?></strong> </li>
    <?php endforeach; ?>
</ul>
    </div>
    
    
</body>
</html>

