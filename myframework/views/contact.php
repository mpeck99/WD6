<div class="container">
<h1>Contact</h1>
<div id="success" class="success"></div>
<form action="contactRecv" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Favorite Color</label>
    <select name="colors" class="form-control" id="exampleSelect1">
      <option>Blue</option>
      <option>Green</option>
      <option>Red</option>
      <option>Orange</option>
      <option>Purlple</option>
      <option>Black</option>
    </select>
    <div id="colorOptionError" class="error"></div>
  </div>
  <div class="form-group">
    <label for="exampleSelect2">Favorite Music</label>
    <select name="music" multiple class="form-control" id="exampleSelect2">
      <option>Rock</option>
      <option>Country</option>
      <option>Pop</option>
      <option>Rap</option>
      <option>Indie</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Leave a message:</label>
    <textarea name="textBox" class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
  <fieldset class="form-group">
    <legend>Are you a student?</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input input="radio1" type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Yes
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input name="radio2" type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
        No
      </label>
    </div>
  </fieldset>
  <div class="form-check">
    <label class="form-check-label">
      <input name="checkbox" type="checkbox" class="form-check-input">
      Did you double check everything?
    </label>
  </div>
  <button id="formButton" type="submit" class="btn btn-primary">Submit</button>
  <input type="button" value="Ajax Submit" class="btn" id="ajaxsubmit">
</form>
<div id="error" class="error"></div>
</div>
