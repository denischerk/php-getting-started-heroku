<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form test</title>
</head>
<body>
Hello
  
  
  <?php if (isset($_GET['submitted'])) { ?>
    <h1>The server had accepted:</h1>
    <p>radio: <?php echo htmlspecialchars($_GET['radio']); ?></p>
  <p >text: <span style="font-weight: bold;"> <?php echo htmlspecialchars($_GET['text']); ?></span></p>
    <p>area: <?php echo htmlspecialchars($_GET['area']); ?></p>
    <p>chek: <?php echo htmlspecialchars($_GET['chek']); ?></p>
     <p>sel: <?php echo htmlspecialchars($_GET['sel']); ?></p>
      <p>color: <?php echo htmlspecialchars($_GET['color']); ?> <span style="background-color: <?php echo htmlspecialchars($_GET['radio']); ?>; ">&nbsp &nbsp &nbsp &nbsp</span></p>
    <p>Try again? <a href="/index.php">Yes!</a></p>
  <?php } ?>
<?php if (!isset($_GET['submitted'])) { ?>
  
  
  
  <h1>Play with the HTML form</h1>
  <form action="/index.php">
    <input type="hidden" name="submitted" value="yes">
    <p>
      <label for="my-radio-yes">radio Yes: </label>
      <input id="my-radio-yes" name="radio" type="radio" required value="Yes">
      <label for="my-radio-no">radio No: </label>
      <input id="my-radio-no" name="radio" type="radio" required value="No"></p>
    <br>
    <label for="my-text">text: </label>         <input id="my-text" type="text" name="text" required maxlength="5"
                                                      placeholder="Введите однострочный текст"><br>

<br>

<label for="my-textarea">text: </label><br>
<textarea id="my-textarea" style="resize:none" name="area" placeholder="Введите многострочный текст"></textarea><br><br>

<p><label for="my-checkbox">checkbox: </label> <input id="my-checkbox" type="checkbox" name="chek" checked></p>


<p><label for="my-select">select: </label>     <select id="my-select" size="1" name="sel" required>
                                                        <option value="nichego">---------</option>
                                                        <option value="hello">hello</option>
                                                        <option value="good bye" selected>good bye</option>
                                                     </select></p>

<p><label for="my-color">color: </label>       <input id="my-color" type="color" name="color"></p>
    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
  </form>

  <?php } ?>

</body>
</html>
