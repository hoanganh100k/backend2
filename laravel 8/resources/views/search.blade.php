<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


</head>

<body>
<form action="./search" method="get">
        <div class="input-group">
          <div class="form-outline">
            <input type="search" name="search" id="form1" placeholder="Search" class="form-control" />
          </div>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Company name</th>
        <th scope="col">Company Web</th>
        <th scope="col">Company address</th>
        <th scope="col">Company code</th>
        <th scope="col">Company phone</th>

      </tr>
    </thead>
    <tbody>
      <?php foreach($search as $item){ ?>
      <tr>
        <th scope="row">
          <?php echo $item -> id ?>
        </th>
        <td>
          <?php echo $item -> company_name ?>
        </td>
        <td>
          <?php echo $item -> company_web ?>
        </td>
        <td>
          <?php echo $item -> company_address ?>
        </td>
        <td>
          <?php echo $item -> company_code ?>
        </td>
        <td>
          <?php echo $item -> company_phone ?>
        </td>

        <?php } ?>
      </tr>
    </tbody>
  </table>


</body>

</html>