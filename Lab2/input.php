<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Summary Form</title>

</head>
<body>
<div class="main">
        
        <form action="summary.php">
          <p>Name<br>
          <input type="input" id="name" name="name" placeholder="Name">
          </p>

          <p>Major<br>
          <input type="input" id="major" name="major" placeholder="Major">
          </p>

          <p>
          Favorite Web Language<br>
          <input type="radio" id="html" name="fav_language" value="HTML">
          <label for="html">HTML</label><br>
          <input type="radio" id="css" name="fav_language" value="CSS">
          <label for="css">CSS</label><br>
          <input type="radio" id="javascript" name="fav_language" value="JavaScript">
          <label for="javascript">JavaScript</label><br>
          <input type="radio" id="PHP" name="fav_language" value="PHP">
          <label for="PHP">PHP</label>
          </p>
          <p>
          Development Environment<br>
          <input type="checkbox" id="ide1" name="env[]" value="vscode">
          <label for="vehicle1"> Visual Studio Code</label><br>
          <input type="checkbox" id="ide2" name="env[]" value="brackets">
          <label for="vehicle2"> Brackets</label><br>
          <input type="checkbox" id="ide3" name="env[]" value="other">
          <label for="vehicle3"> Other</label> 
          <input type="text" id="othername" name="othername">
          </p>
          <p>
               
                <input type="submit" value="Submit" name="save" />
          </p>
        </form> 
</div>
</body>
</html>