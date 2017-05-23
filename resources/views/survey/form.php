<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <form method="post">
      <div class="col-6">
        <div class="custom-controls-stacked">
          <p> Did you sleep well last night? </p>
          <div class="form-group col-3">
            <label for="sleep">Example select</label>
            <select class="form-control col-2 pull-left" id="sleep">
              <option value="1">Yes</option>
              <option value="0">No</option>
            </select>
          </div>
        </div>

        <div class="custom-controls-stacked">
          <p> Did you have a good breakfast? </p>
          <div class="form-group  col-3">
            <label for="breakfast">Example select</label>
            <select class="form-control col-2 pull-left" id="breakfast">
              <option value="1">Yes</option>
              <option value="0">No</option>
            </select>
          </div>
        </div>

        <div class="custom-controls-stacked">
          <p> Did you laugh already today? </p>
          <div class="form-group col-3">
            <label for="laugh">Example select</label>
            <select class="form-control" id="laugh">
              <option value="1">Yes</option>
              <option value="0">No</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col">
      </div>
  </div>
  <input class="btn btn-primary" type="submit" value="Submit">
  </form>
</div>
</body>
</html>
