<?php
require(__DIR__ . "/../../partials/nav.php");
if(!is_logged_in(false)){
  flash("You are currently not logged in, score will not able to be recorded", "warning");
}
?>
<div class="container-fluid">
  <audio name= "four-lines" src="four-lines.mp3" hidden="true" loop="true" autoplay="true" controls></audio>
  <canvas id="canvas" width="800" height="600" tabindex="1"></canvas>
</div>

<style>
    #canvas {
      width: 800px;
      height: 600px;
      border: 1px solid gray;

      margin-top: 10px;
      padding-left: 0;
      padding-right: 0;
      margin-left: auto;
      margin-right: auto;
      display: block;
    }
    
</style>

<script>

  // Star Shooter

  // Get a reference to the canvas DOM element
  var canvas = document.getElementById('canvas');
  // Get the canvas drawing context
  var context = canvas.getContext('2d');

  this.background = new Image();
  this.background.src = "space.png";

  //var music;
  //this.music = "four-lines.mp3";
  //this.music = new sound("four-lines.mp3");
  //this.music.play("four-lines.mp3");

  // Create an object representing a square on the canvas
  function makeSquare(x, y, length, speed) {
    return {
      x: x,
      y: y,
      l: length,
      s: speed,
      draw: function() {
        context.fillRect(this.x, this.y, this.l, this.l);
      }
    };
  }

  // The ship the user controls
  var ship = makeSquare(canvas.width / 2, canvas.height / 2, 50, 5);

  // Flags to tracked which keys are pressed
  var up = false;
  var down = false;
  var space = false;
  var right = false;
  var left = false;

  // Is a bullet already on the canvas?
  var shootingN = false;
  var shootingS = false;
  var shootingE = false;
  var shootingW = false;

  // The bulled shot from the ship
  //PART OF SIGNICANT CHANGE 2 - bullets in all directions
  var bulletN = makeSquare(0, 0, 10, 15);
  var bulletS = makeSquare(0, 0, 10, 15);
  var bulletE = makeSquare(0, 0, 10, 15);
  var bulletW = makeSquare(0, 0, 10, 15);

  // An array for enemies (in case there are more than one)
  var enemies = [];

  // Add an enemy object to the array
  var enemyBaseSpeed = 2;
  function makeEnemy() {
    var side = Math.floor(Math.random() * 2);
    if (side == 1) {
      var enemyX = -20;
      var enemySize = Math.round((Math.random() * 20)) + 18;
      var enemyY = Math.round(Math.random() * (canvas.height - enemySize * 2)) + enemySize;
      var enemySpeed = -1 * (Math.round(Math.random() * enemyBaseSpeed) + enemyBaseSpeed);
      enemies.push(makeSquare(enemyX, enemyY, enemySize, enemySpeed));
    } else {
      var enemyX = canvas.width + 20;
      var enemySize = Math.round((Math.random() * 20)) + 18;
      var enemyY = Math.round(Math.random() * (canvas.height - enemySize * 2)) + enemySize;
      var enemySpeed = Math.round(Math.random() * enemyBaseSpeed) + enemyBaseSpeed;
      enemies.push(makeSquare(enemyX, enemyY, enemySize, enemySpeed));
    }
  }

  // Check if number a is in the range b to c (exclusive)
  function isWithin(a, b, c) {
    return (a > b && a < c);
  }

  // Return true if two squares a and b are colliding, false otherwise
  function isColliding(a, b) {
    var result = false;
    if (isWithin(a.x, b.x, b.x + b.l) || isWithin(a.x + a.l, b.x, b.x + b.l)) {
      if (isWithin(a.y, b.y, b.y + b.l) || isWithin(a.y + a.l, b.y, b.y + b.l)) {
        result = true;
      }
    }
    return result;
  }

  let gameData = {
      // Track the user's score
      //score: 0,
      sessionData: []
    }

  // Track the user's score   
  var score = 0;

  //Points awarded to the user
  var points;
  //Why points were awarded to user
  var reason;

  // The delay between enemies (in milliseconds)
  var timeBetweenEnemies = 4 * 1000;
  // ID to track the spawn timeout
  var timeoutId = null;

  // Show the game menu and instructions
  function menu() {
    erase();
    // Make sure the image is loaded first otherwise nothing will draw.
    background.onload = function(){
      context.drawImage(background,0,0);  
      context.fillStyle = '#FFFF99';
      context.font = '36px Arial';
      context.textAlign = 'center';
      context.fillText('Star Shooter!', canvas.width / 2, canvas.height / 4);
      context.font = '24px Arial';
      context.fillText('Click to Start', canvas.width / 2, canvas.height / 2);
      context.font = '18px Arial';
      //Changed instructions to match significant change 1
      context.fillText('Use the arrow keys to move, Space to shoot.', canvas.width / 2, (canvas.height / 4) * 3);
    }
    // Start the game on a click
    canvas.addEventListener('click', startGame);
  }

  // Start the game
  function startGame() {
    
    // Kick off the enemy spawn interval
    timeoutId = setInterval(makeEnemy, timeBetweenEnemies);
    // Make the first enemy
    setTimeout(makeEnemy, 1000);
    // Kick off the draw loop
    draw();
    
    // Stop listening for click events
    canvas.removeEventListener('click', startGame);
  }

  // Show the end game screen
  const endGame = () => {
    
    // Stop the spawn interval
    clearInterval(timeoutId);
    // Show the final score
    erase();
    background.onload = function(){
      context.drawImage(background,0,0);  
      context.fillStyle = '#FFFF99';
      context.font = '24px Arial';
      context.textAlign = 'center';
      context.fillText('Game Over. Final Score: ' + score, canvas.width / 2, canvas.height / 2);
    }

    if (score > 0) {
      let http = new XMLHttpRequest();
      http.onreadystatechange = () => {
          if (http.readyState == 4) {
              if (http.status === 200) {
                  let data = JSON.parse(http.responseText);
                  console.log("received data", data);
                  flash(data.message, "success");
              }
              console.log(http);
          }
      }
      http.open("POST", "api/save_score.php", true);
      http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      http.send(`score=${score}`);
    }
  }

  // Listen for keydown events
  canvas.addEventListener('keydown', function(event) {
    event.preventDefault();
    if (event.keyCode === 38) { // UP
      up = true;
    }
    if (event.keyCode === 40) { // DOWN
      down = true;
    }
    if (event.keyCode === 32) { // SPACE
      shoot();
    }
    //PART OF SIGNIFCANT CHANGE 1 - keycodes to move left and right
    if (event.keyCode === 37) { // LEFT
    left = true;
    }
    if (event.keyCode === 39) { // RIGHT
    right = true;
    }
  });

  // Listen for keyup events
  canvas.addEventListener('keyup', function(event) {
    event.preventDefault();
    if (event.keyCode === 38) { // UP 
      up = false;
    }
    if (event.keyCode === 40) { // DOWN
      down = false;
    }
    //PART OF SIGNIFCANT CHANGE 1 - keycodes to move left and right
    if (event.keyCode === 37) { // LEFT
      left = false;
    }
    if (event.keyCode === 39) { // RIGHT
      right = false;
    }
  });

  // Clear the canvas
  function erase() {
    context.fillStyle = '#FFFF99';
    context.fillRect(0, 0, canvas.width, canvas.height);
  }

  // Shoot the bullet (if not already on screen)
  //PART OF SIGNIFICANT CHANGE 2 - shoot function for all directional bullets
  function shoot() {
    if (!shootingN && !shootingS && !shootingE && !shootingW) {
      shootingN = true;
      shootingS = true;
      shootingE = true;
      shootingW = true;
      bulletN.x = ship.x + ship.l / 2;
      bulletN.y = ship.y + ship.l / 2;
      bulletS.x = ship.x + ship.l / 2;
      bulletS.y = ship.y + ship.l / 2;
      bulletW.x = ship.x + ship.l / 2;
      bulletW.y = ship.y + ship.l / 2;
      bulletE.x = ship.x + ship.l / 2;
      bulletE.y = ship.y + ship.l / 2;
    }
  }

  // The main draw loop
  function draw() {
    
    erase();
    var gameOver = false;
    this.background = new Image();
    this.background.src = "space.png"; 
    
    // Make sure the image is loaded first otherwise nothing will draw.
    context.drawImage(background,0,0);

    // Move and draw the enemies
    enemies.forEach(function(enemy) {
      enemy.x -= enemy.s;
      if (enemy.x < -20 || enemy.x > (canvas.width + 20)) {
        gameOver = true;
      }
      context.fillStyle = '#8A7F80';
      enemy.draw();
    });
    // Collide the ship with enemies
    enemies.forEach(function(enemy, i) {
      if (isColliding(enemy, ship)) {
        gameOver = true;
      }
    });
    // Move the ship
    if (down) {
      ship.y += ship.s;
    }
    if (up) {
      ship.y -= ship.s;
    }
    //player can now move left and right
    if (right) {
      ship.x += ship.s;
    }
    if (left) {
      ship.x -= ship.s;
    }
    // Don't go out of bounds
    if (ship.y < 0) {
      ship.y = 0;
    }
    if (ship.y > canvas.height - ship.l) {
      ship.y = canvas.height - ship.l;
    }
    //adds boundaries on left and right
    if (ship.x < 0) {
      ship.x = 0;
    } 
    if (ship.x > canvas.width - 50) {
      ship.x = canvas.width - 50;
    }  

    // Draw the ship
    context.fillStyle = '#0088CC';  //electric blue
    ship.draw();
    // Move and draw the bullet
    //Shooting bullets on one side wont stop the other bullets
    if (shootingN || shootingS || shootingE || shootingW) {
      // Move the bullet
      bulletN.y -= bulletN.s;
      bulletS.y += bulletS.s;
      bulletE.x += bulletE.s;
      bulletW.x -= bulletW.s;

      // Collide the bullet with enemies
      enemies.forEach(function(enemy, i) {
        if (isColliding(bulletE, enemy) && shootingE == true || isColliding(bulletW, enemy) && shootingW == true ||
        isColliding(bulletN, enemy)  && shootingN == true || isColliding(bulletS, enemy)  && shootingS == true) {
          enemies.splice(i, 1);
          score++;
          // Make the game harder
          if (score % 5 === 0 && timeBetweenEnemies > 1000) {
            clearInterval(timeoutId);
            timeBetweenEnemies -= 500;
            timeoutId = setInterval(makeEnemy, timeBetweenEnemies);
          } else if (score % 15 === 0) {
            enemyBaseSpeed += 1;
          }
        }
      });
      // Collide with the wall
      //SIGNIFICANT CHANGE 2 - bullet collisions with all walls
      if (bulletN.y < 0) {
        shootingN = false;
      }
      if (bulletS.y > canvas.height) {
        shootingS = false;
      }
      if (bulletE.x > canvas.width) {
        shootingE = false;
      }
      if (bulletW.x < 0) {
        shootingW = false;
      }
      // Draw the bullet
      context.fillStyle = '#FFFF99'; //light yellow
      bulletN.draw();
      bulletS.draw();
      bulletE.draw();
      bulletW.draw();
    }
    
    // Draw the score
    context.fillStyle = '#FFFF99';  //light yellow
    context.font = '24px Arial';
    context.textAlign = 'left';
    context.fillText('Score: ' + score, 1, 25);
    var points = Math.floor(score / 10);
    context.fillText('Points: ' + points, canvas.width - 110, 25);

    // End or continue the game
    if (gameOver) {
      endGame();
    } else {
      window.requestAnimationFrame(draw);
    }
  }
  
  // Start the game
  menu();
  canvas.focus();

</script>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>