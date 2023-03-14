<!DOCTYPE html>
<html>
<head>
	<title>Reservation Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
	<link href="style.css" rel="stylesheet" type="text/css" media="all" />
	<style> 
	tr:nth-child(even) {background: #CCC}
tr:nth-child(odd) {background: #FFF}
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
        <a class="nav-link" href="#">Home</a>
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
	<div class="greyRows">
	<div class="container">
		<h1>Reservation Details</h1>
		<table class="table">
			<tbody>
				<tr>
					<th>First Name:</th>
					<td><?php echo $_POST['first_name']; ?></td>
				</tr>
				<tr>
					<th>Last Name:</th>
					<td><?php echo $_POST['last_name']; ?></td>
				</tr>
				<tr>
					<th>Number & Street:</th>
					<td><?php echo $_POST['number-street']; ?></td>
				</tr>
				<tr>
					<th>City:</th>
					<td><?php echo $_POST['city']; ?></td>
				</tr>
				<tr>
					<th>State:</th>
					<td><?php echo $_POST['state']; ?></td>
				</tr>
				<tr>
					<th>Zip Code:</th>
					<td><?php echo $_POST['zip-code']; ?></td>
				</tr>
				<tr>
					<th>Check-in Date:</th>
					<td><?php echo $_POST['checkin-date']; ?></td>
				</tr>
				<tr>
					<th>Check-out Date:</th>
					<td><?php echo $_POST['checkout-date']; ?></td>
				</tr>
				<tr>
					<th>Number of People:</th>
					<td><?php echo $_POST['num-people']; ?></td>
				</tr>
				<tr>
					<th>Room Type:</th>
					<td><?php echo $_POST['room-type']; ?></td>
				</tr>
				<tr>
					<th>Phone Number:</th>
					<td><?php echo $_POST['phone']; ?></td>
				</tr>
			
				<tr>
					<th>Email Address:</th>
					<td><?php echo $_POST['email']; ?></td>
				</tr>

				<tr>
					<th>Email:</th>
					<td><?php echo $_POST['payment-method']; ?></td>
				</tr>

				<tr>
					<th>Card Number:</th>
					<td><?php echo $_POST['card-number']; ?></td>
				</tr>

				<tr>
					<th>Special Requests:</th>
					<td><?php echo $_POST['special-requests']; ?></td>
				</tr>

				<tr>
					<th>Total Charge:</th>
					<td><?php 

					$total;
					$roomType = $_POST['room-type'];
					$numPeople = $_POST['num-people'];

  					if( $roomType == "King")
					{
						$total = 200 * $numPeople * 1.07;
					}
					if($roomType == "Queen")
					{
						$total = 150 *$numPeople * 1.07;
					}
					if($roomType == "Suit")
					{
						$total = 300 * $numPeople * 1.07;
					}


					echo "$";
					echo $total;
					
					?></td>
				</tr>
				






			</tbody>
		</table>
	</div>
</div>


