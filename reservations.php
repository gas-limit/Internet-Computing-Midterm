<head>
  <link href="style.css" rel="stylesheet" type="text/css" media="all" />
  <!-- Bootstrap CSS -->
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous"
  />

  <!-- jQuery and Bootstrap JavaScript -->
  <script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"
  ></script>
</head>
<h1
  class="text-center"
  style="color: black; text-shadow: -4px 4px 4px grey; padding: 15px;"
>
  Jared and Josh's Resort
</h1>

<nav class="navbar navbar-expand-lg navbar-light bg-lightgreen">
  <a class="navbar-brand" href="/">
    <img
      src="https://i.ibb.co/Hn9Dk3s/newlogo2-png.png"
      style="max-width: 75px; max-height: 75px;"
    />
  </a>
  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarNav"
    aria-controls="navbarNav"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto text-center">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Yurts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Activities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./reservations.php">Reservation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Comments</a>
      </li>
    </ul>
  </div>
</nav>

<body>
<div class="container">
		<h1>Hotel Reservation</h1>
		<form method="POST" action="reservation_details.php">
			<div class="form-group row">
				<label for="first-name" class="col-sm-2 col-form-label">First Name:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="first-name" name="first_name" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="last-name" class="col-sm-2 col-form-label">Last Name:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="last-name" name="last_name" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="number-street" class="col-sm-2 col-form-label">Number & Street:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="number-street" name="number-street" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="city" class="col-sm-2 col-form-label">City :</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="city" name="city" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="state" class="col-sm-2 col-form-label">State :</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="state" name="state" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="zip-code" class="col-sm-2 col-form-label">Zip Code :</label>
				<div class="col-sm-10">
					<input type="text" class="zip-code" id="zip-code" name="zip-code" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="checkin-date" class="col-sm-2 col-form-label">Check-in Date:</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" id="checkin-date" name="checkin-date" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="checkout-date" class="col-sm-2 col-form-label">Check-out Date:</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" id="checkout-datee" name="checkout-date" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="num-people" class="col-sm-2 col-form-label">Number of People:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="num-people" name="num-people" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="room-type" class="col-sm-2 col-form-label">Room Type:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="room-type" name="room-type" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="phone" class="col-sm-2 col-form-label">Phone:</label>
				<div class="col-sm-10">
					<input type="tel" class="form-control" id="phone" name="phone" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">Email Address:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" name="email" required>
				</div>
			</div>

			<div class="form-group row">
				<label for="payment-method" class="col-sm-2 col-form-label">Payment Method:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="payment-method" name="payment-method" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="card-number" class="col-sm-2 col-form-label">Card Number:</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="card-number" name="card-number" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="special-requests" class="col-sm-2 col-form-label">Special Requests:</label>
				<div class="col-sm-10">
					<textarea type="text" class="form-control" id="special-requests" name="special-requests">
</textarea>
				
<br/>
<br/>
  
			<div class="form-group row">
				<div class="col-sm-2"></div>
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Reserve a Room</button>
					<button type="reset" class="btn btn-danger">Clear</button>
				</div>
			</div>
		</form>
	</div>
</body>

<style>
  /* Media Query for larger screens */
  @media (min-width: 992px) {
    .navbar-nav {
      display: flex;
      flex-direction: row;
      margin-left: auto;
    }
    .navbar-collapse {
      display: block !important;
    }
  }
</style>
