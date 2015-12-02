
<!DOCTYPE html>
<html>
<head>
	<title>Révision-formulaire</title>
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body>


<form class="form-horizontal">
<div>
	  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Civilité *</label>
    <div class="col-sm-1">
      <input type="radio" class="form-control" id="inputName3">Mme
    </div>
        <div class="col-sm-1">
      <input type="radio" class="form-control" id="inputName3" >Mlle
    </div>
        <div class="col-sm-1">
      <input type="radio" class="form-control" id="inputName3" >Mr
    </div>
  </div>



</div>

  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="name" value="<?= (isset($name))? $name :'' ?> " placeholder="Name" name="name">
    </div>
  </div>
   <div class="form-group">
    <label for="inputFirstN" class="col-sm-2 control-label">First name</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="firstname" value="<?= (isset($firstname))? $firstname :'' ?>" placeholder="First name" name="firstname">
    </div>
  </div>
    
   <div class="form-group">
    <label for="inputAdd" class="col-sm-2 control-label">Adress</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="adresse" value="<?= (isset($adresse))? $adresse :'' ?>" placeholder="Adress" name="adresse">
    </div>
  </div>
   
   <div class="form-group">
    <label for="inputCP" class="col-sm-2 control-label">Post Code</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="postcode" value="<?= (isset($postcode))? $postcode :'' ?>" placeholder="Post Code" name="postcode">
    </div>
  </div>
   
   <div class="form-group">
    <label for="inputCity" class="col-sm-2 control-label">City</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="city" value="<?= (isset($city))? $city :'' ?>" placeholder="City" name="city">
    </div>
  </div>
  	<div class="form-group">
    <label for="inputPhonF" class="col-sm-2 control-label">Phone number</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="phf" value="<?= (isset($phf))? $phf :'' ?>" placeholder="Phone number" name="phF">
    </div>
  </div>

  	<div class="form-group">
    <label for="inputPhonM" class="col-sm-2 control-label">Mobile</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="phm" value="<?= (isset($phm))? $phm :'' ?>" placeholder="Mobile" name="phM">
    </div>
  </div>





   
   <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">E-mail</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="email" value="<?= (isset($email))? $email :'' ?>" placeholder="E-mail" name="email">
    </div>
  </div>
   
   <div class="form-group">
    <label for="inputBirthD" class="col-sm-2 control-label">Birth-Date</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="date" value="<?= (isset($date))? $date :'' ?>" placeholder="Birth-Date" name="date">
    </div>
  </div>
    
   <div class="form-group">
    <label for="inputMess" class="col-sm-2 control-label">Message</label>
    <div class="col-sm-3">
      <textarea type="text" class="form-control" rows="3" id="message" placeholder="Message"></textarea>
    </div>
  </div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="check"> General therms for agreements
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="inscription">Sign in</button>
    </div>
  </div>
</form>

	<script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>


