
<link rel="stylesheet" type="text/css" href="../css/styles.css"></link>
<link rel="stylesheet" type="text/css" href="../diviwant.html"></link>
<meta charset="utf-8">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


<html>
<head>
<title>Обратная связь</title>
</head>
<body>
<div class="feedback__block">
        <div class="feedback__block-1">
            <div class="feedback__block-reviews" style="text-align: center">
                <h1 class="feedback__block-reviews-1"> Reviews </h1>
            <form action="txt.php" method="POST">
                <label class="feedback__block-reviews-2" for="text"> Your feedback helps us improve </label><br>
                <textarea name="reviews" id="reviews" cols="55" rows="5"></textarea><br>
                <input class="View" type="submit" name="leave your feedback" id="leave your feedback" value="leave your feedback">
            </form>
            </div>
        </div>
        <div class="feedback__block-2">
            <div class="feedback__block-suggestions" style="text-align: center">
                <h1 class="feedback__block-suggestions-1"> Suggestions </h1>
            <form action="write.php" method="POST">
                <label class="feedback__block-suggestions-2" for="text"> Proposals for cooperation and <br/> accommodation </label><br>
                <textarea name="suggestions" id="suggestions" cols="55" rows="5"></textarea><br>
                <input class="Write" type="submit" name="Write" id="Write" value="Write to us">
            </form>
            </div>
        </div>
    </div>
</body>
</html> 