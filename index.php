<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP training template</title>
    <link rel="stylesheet" href="styles/game.css">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>

<body>

<div class="container-fluid">
  <section class="row">

    <div class="col-4 col1">
      <audio id="moan">
        <source src="sounds/moan.wav" type="audio/wav">
      </audio>
    </div>
    <div class="col-4 col2">
      <audio id="war-horn">
        <source src="sounds/war-horn.wav" type="audio/wav">
      </audio>
    </div>
    <div class="col-4 col3">
      <audio id="exhaust">
        <source src="sounds/exhaust.wav" type="audio/wav">
      </audio>
    </div>

  </section>

  <section class="row align-items-center form-section">
    <div class="col-10 offset-1">
      <form class="text-center">
        <h1 class="mb-3">Pick a date</h1>
        <p>Date: <input class="form-control" type="text" id="datepicker"></p>
      </form>
    </div>
  </section>
</div>


<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="javascript/scripts.js"></script>
<script>
$( function() {
  $( "#datepicker" ).datepicker();
} );
</script>
</body>

</html>
