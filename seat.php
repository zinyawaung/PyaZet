<?php 
  require_once 'php/seat-component.php'; 
  ?>
<!DOCTYPE html>  
<html lang="en">
<head>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Booking seat</title>
  <link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="library/fontawesome/fontawesome-all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shotcut icon" href="images/logo.png">
  <style>
  	@import url('https://fonts.googleapis.com/css?family=Lato&display=swap');


		body {
		  background-color: #242333;
		  color: #fff;
		  display: flex;
		  flex-direction: column;
		  align-items: center;
		  justify-content: center;
		  height: 100vh;
		  font-family: 'Lato', sans-serif;
		  margin: 0;
		}

		.choice-container {
		  margin: 20px 0;
		}

		.choice-container div {
		  background-color: #fff;
		  border: 0;
		  border-radius: 5px;
		  font-size: 14px;
		  margin-left: 10px;
		  padding: 5px 15px 5px 15px;
		  -moz-appearance: none;
		  -webkit-appearance: none;
		  appearance: none;
		}
		.row{
		  align-items: center;
		  justify-content: center;
		}
		.container {
		  perspective: 1000px;
		  margin-bottom: 30px;
		}

		.seat{
		  background-color:white;
		  height: 30px;
		  margin: 3px;
		  border:  none;
		}
		.seat.selected {
		  background-color: red;
		}

		.seat.occupied {
		  background-color: #03a9f4;
		}

		.seat:nth-of-type(2) {
		  margin-right: 18px;
		}

		.seat:nth-last-of-type(2) {
		  margin-left: 18px;
		}

		.seat:not(.occupied):hover {
		  cursor: pointer;
		  transform: scale(1.2);
		}

		.showcase .seat:not(.occupied):hover {
		  cursor: default;
		  transform: scale(1);
		}

		.showcase {
		  background: rgba(0, 0, 0, 0.1);
		  padding: 5px 10px;
		  border-radius: 5px;
		  color: #777;
		  list-style-type: none;
		  display: flex;
		  justify-content: space-between;
		}

		.showcase li {
		  display: flex;
		  align-items: center;
		  justify-content: center;
		  margin: 0 10px;
		}

		.showcase li small {
		  margin-left: 2px;
		}

		.row {
		  display: flex;
		}

		.screen {
		  background-color: #fff;
		  height: 70px;
		  width: 100%;
		  margin: 15px 0;
		  transform: rotateX(-45deg);
		  box-shadow: 0 3px 10px rgba(255, 255, 255, 0.7);
		}

		p.text {
		  margin: 5px 0;
		}

		p.text span {
		  color: #6feaf6;
		}
  </style>
</head>
<body>
    <div class="choice-container pt-5">

      <label class="font-playfair mr-1">Select a Class</label>
      <select id="choice" onchange="location = this.value;">
        <option class="font-playfair">Choose</option>
        <option value="silver.php" class="font-playfair">Silver</option>
        <option value="gold.php" class="font-playfair">Gold</option>
        <option value="platinum.php" class="font-playfair">Platinum</option>
        <option value="diamond.php" class="font-playfair">Diamond</option>
      </select>
    </div>
    <ul class="showcase font-playfair">
      <li>
        <div class="seat" style="width: 30px;"></div>
        <small>Available</small>
      </li>
      <li>
        <div class="seat selected" style="width: 30px;"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat occupied" style="width: 30px;"></div>
        <small>Sold</small>
      </li>
    </ul>

    <div class="container">
      <div class="screen"></div>
      <div class="container font-quicksand">
        <?php seat("S1","S2","S3","S4","S5","S6","S7","S8","S9","S10"); ?>
        <?php seat("S12","S12","S13","S14","S15","S16","S17","S18","S19","S20"); ?>
        <?php seat("S21","S22","S23","S24","S25","S26","S27","S28","S29","S30"); ?>
        <?php seat("G1","G2","G3","G4","G5","G6","G7","G8","G9","G10"); ?>
        <?php seat("G12","G12","G13","G14","G15","G16","G17","G18","G19","G20"); ?>
        <?php seat("G21","G22","G23","G24","G25","G26","G27","G28","G29","G30"); ?>
        <?php seat("P1","P2","P3","P4","P5","P6","P7","P8","P9","P10"); ?>
        <?php seat("P12","P12","P13","P14","P15","P16","P17","P18","P19","P20"); ?>
        <?php seat("P21","P22","P23","P24","P25","P26","P27","P28","P29","P30"); ?>
        <?php CoupleSeat("D1 D2","D3 D4","D5 D6","D7 D8","D9 D10"); ?>
  
   <p class="text-center font-playfair">
      You have selected <span id="count">0</span> seats for a price of $<span
        id="price"
        >0</span
      >
    </p>
    <a href="userchoice.php"><button class="text-center font-size-27 btn btn-outline-primary font-playfair">Cancle</button></a>
  <script src="library/bootstrap/jquery-3.4.1.slim.min.js"></script>
  <script src="library/bootstrap/popper.min.js"></script>
  <script src="library/bootstrap/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <script>
  	const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('count');
const price = document.getElementById('price');

const choiceSelect = document.getElementById('choice');
let ticketPrice = +choiceSelect.value;

const a = () => {
  const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));

  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        seat.classList.add('selected');
      }
    });
  }

  const selectedChoiceIndex = localStorage.getItem('selectedChoiceIndex');
  const selectedChoicePrice = localStorage.getItem('selectedChoicePrice');

  if (selectedChoiceIndex !== null) {
    choiceSelect.selectedIndex = selectedChoiceIndex;
  }

  if (selectedChoicePrice !== null) {
    count.innerText = selectedSeats.length;
    price.innerText = selectedSeats.length * +selectedChoicePrice;
  }
};

a();

selectedMovie = (choiceIndex, choicePrice) => {
  localStorage.setItem('selectedChoiceIndex', choiceIndex);
  localStorage.setItem('selectedChoicePrice', choicePrice);
};

const updateSelectedSeatsCount = () => {
  const selectedSeats = document.querySelectorAll('.row .selected');

  const seatsIndex = [...selectedSeats].map(seat => [...seats].indexOf(seat));

  localStorage.setItem('selectedSeats', JSON.stringify(seatsIndex));

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
  price.innerText = selectedSeatsCount * ticketPrice;
};

// Seat select event
container.addEventListener('click', e => {
  if (
    e.target.classList.contains('seat') &&
    !e.target.classList.contains('occupied')
  ) {
    e.target.classList.toggle('selected');

    updateSelectedSeatsCount();
  }
});

// Movie select event
choiceSelect.addEventListener('change', e => {
  ticketPrice = +e.target.value;
  selectedChoice(e.target.selectedIndex, e.target.value);

  updateSelectedSeatsCount();
});
  </script>
</body>
</html>