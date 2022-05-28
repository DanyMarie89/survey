<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Survey Form</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="survey.css?v=<?php echo time();?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <header>Breastfeeding<br>
                <p id="header-sub">A superpower women were born with..</p>
        </header>
        <section>
            <article>
                <h4>Thank you for your interest in this survey, 
                <?php
                    echo $_POST["name"] .".";
                ?>
                </h4>
                <p>Please complete this survey to the best of your knowledge.</p>
            </article>
            <article class="survey">
                <form>
                    <label for="pregnant">Are you currently pregnant or have a child under the age of 1 year old?</label>
                    <input type="radio" id="yes" name="yes-no">Yes
                    <input type="radio" id="no" name="yes-no">No<br><br>
                    <label for="no" id="no">Questions or Concerns:</label><br>
                    <input type="text area" style="width:400px; height:100px">
                </form>
            </article>
        </section>
        

    </body>
</html>


