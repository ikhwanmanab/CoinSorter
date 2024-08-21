// Get the DOM elements we need to update
const totalCoinsElement = document.getElementById("total-coins");
const coinsPerDayElement = document.getElementById("coins-per-day");

// Set up some variables to track the coin count and value
let totalCoins = 0;
let totalValue = 0;

// Update the total coin count and value when a coin is inserted
function insertCoin(coinValue) {
  totalCoins++;
  totalValue += coinValue;
  updateDashboard();
}

// Update the dashboard with the current coin count and value
function updateDashboard() {
  totalCoinsElement.innerText = `${totalCoins} coins (${totalValue} cents)`;
  coinsPerDayElement.innerText = `${Math.floor(Math.random() * 10)} coins per day`; // Replace this with your actual coins-per-day calculation
}

// Call the updateDashboard function initially to show the "Loading..." message
updateDashboard();
