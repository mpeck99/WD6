<div class="container"><h1>Contact</h1>
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
    <select name="options1" class="form-control" id="exampleSelect1">
      <option>Blue</option>
      <option>Green</option>
      <option>Red</option>
      <option>Orange</option>
      <option>Purlple</option>
      <option>Black</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleSelect2">Example multiple select</label>
    <select name="options2" multiple class="form-control" id="exampleSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Example textarea</label>
    <textarea name="textBox" class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input name="file" type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
  </div>
  <fieldset class="form-group">
    <legend>Radio buttons</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input input="radio1" type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Option one is this and that&mdash;be sure to include why it's great
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input name="radio2" type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
        Option two can be something else and selecting it will deselect option one
      </label>
    </div>
    <div class="form-check disabled">
    <label class="form-check-label">
        <input name="radio3" type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" >
        Option three is disabled
      </label>
    </div>
  </fieldset>
  <div class="form-check">
    <label class="form-check-label">
      <input name="checkbox" type="checkbox" class="form-check-input">
      Check me out
    </label>
  </div>
  <button id="formButton" type="submit" class="btn btn-primary">Submit</button>
  <input type="button" value="Ajax Submit" class="btn" id="ajaxsubmit">
</form>
</div>
