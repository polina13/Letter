<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>A fantastical adventure</title>
</head>
<body>
    <div class="container">
        <h1>Fill in the blanks to write your story!</h1>
        <form action="madlib_story.php">
            <div class="form-group">
                <label for="person1">A name</label>
                <input id="person1" name="person1" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="person2">Another name</label>
                <input id="person2" name="person2" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="animal">An animal</label>
                <input id="animal" name="animal" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="exclamation">An exclamation</label>
                <input id="exclamation" name="exclamation" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="verb">A past tense verb</label>
                <input id="verb" name="verb" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="noun">A noun</label>
                <input id="noun" name="noun" class="form-control" type="text">
            </div>

            <button type="submit" class="btn">Show me the story!</button>
        </form>
    </div>
</body>
</html>
