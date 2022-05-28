<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Survey Form Project</title>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="survey.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <script>
            $(document).ready(function (){
               hideSection();

               
               $("#male").click(function () {
                   hideSection();
                   $(".error").show();
               });
               $("#female").click(function (){
                   hideSection();
                   $(".info-section").show();
               })
            });

            function hideSection() {
                $(".info-section").hide();
                $(".error").hide();
            };
            
        </script>
        <header>Breastfeeding<br>
            <p id="header-sub">A superpower women were born with..</p>
        </header>
        <section>
            <article id="gender">
                <form>
                    <label for="gender">Gender:</label><br>
                    <input type="radio" id="male" name="gender">Male<br>
                    <input type="radio" id="female" name="gender">Female
                </form>
            </article>
            <article class="error">
                <h2>We are sorry for any inconvenience!</h2>
                <p>The survey isn't suited for you. If you disagree, please reach out to us or simply switch gender to proceed.</p>
                <a href="home.php">
                    <button id="survey-page">Homepage</button>
                </a>
            </article>
            <article class="info-section">
                <h4>Please enter your information in this section:</h4>
                <form action="survey-page.php" method="post">
                    <label for="">Name: </label>
                    <input type="text" id="" name="name"><br>
                    <label for="email">Email: </label>
                    <input type="text" id="email" name="email"><br>
                    <label for="phone">Phone: </label>
                    <input type="tel" id="tel" name="tel"><br>
                    <p>May we contact you with the information provided?</p>
                    <input type="radio" id="" name="yes-no">
                    <label for="yes" name="yes-no">Yes</label>
                    <input type="radio" id="" name="yes-no">
                    <label for="no" name="no">No</label><br>
                    <input type="submit">
                </form>
            </article>
        </section>
        
    </body>
</html>
