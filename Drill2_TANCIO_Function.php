<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Favourite Basketball Players</title>
  <!-- Using a bold, sporty font reminiscent of basketball culture -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
  <style>
    /* Global Styles: Dark, dramatic with a Chicago Bulls red accent */
    body {
      background: radial-gradient(circle, #111 0%, #000 70%);
      margin: 0;
      padding: 0;
      font-family: 'Bebas Neue', cursive, sans-serif;
      color: #fff;
      box-sizing: border-box;
    }
    *, *:before, *:after {
      box-sizing: inherit;
    }
    
    header {
      background-color: #000;
      border-bottom: 4px solid #E41B17;
      padding: 2rem 0;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
    }
    
    header h1 {
      font-size: 4rem;
      margin: 0;
      color: #E41B17;
      text-shadow: 3px 3px 6px #000;
    }
    
    .container {
      max-width: 1200px;
      margin: 3rem auto;
      padding: 0 1rem;
    }
    
    /* Each player's section styled as an article with a flexible layout */
    article {
      display: flex;
      flex-direction: row;
      background-color: #222;
      margin-bottom: 2rem;
      border: 3px solid #E41B17;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 10px rgba(0,0,0,0.7);
    }
    
    /* Set a uniform size for images on desktop */
    article img {
      width: 40%;
      height: 300px;
      object-fit: cover;
      display: block;
    }
    
    .content {
      width: 60%;
      padding: 1.5rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    
    .content h2 {
      font-size: 3rem;
      margin: 0 0 1rem 0;
      color: #E41B17;
    }
    
    .details {
      font-size: 1.2rem;
      line-height: 1.5;
      margin-bottom: 1.5rem;
    }
    
    .stats {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
    }
    
    .stats div {
      background: #333;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      font-size: 1rem;
    }
    
    /* Responsive adjustments for smaller screens */
    @media (max-width: 768px) {
      article {
        flex-direction: column;
      }
      article img {
        width: 100%;
        height: 200px;
      }
      .content {
        width: 100%;
      }
      header h1 {
        font-size: 3rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>My Favourite Basketball Players</h1>
  </header>
  
  <div class="container">
    <?php
    // Define an array of players with detailed career achievements
    $players = [
      [
        'name' => 'Michael Jordan',
        'debut' => '1984',
        'info' => '6× NBA Champion, 5× Regular Season MVP',
        'desc' => 'Michael Jordan revolutionized basketball with his scoring prowess, fierce competitive spirit, and commitment to excellence. His legacy, immortalized in The Last Dance, continues to inspire generations.',
        'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhIW55I9-cehq5OZkEltDqV9uIRsmTxM7Uyv3DYqZ02HNGKGY7b-6kfjNN&s=10',
        'achievements' => [
          'Finals MVP'    => 6,
          'Regular MVP'   => 5,
          'Career Points' => '32,292',
          'Blocks'        => '893',
          'Steals'        => '2,514',
          'Assists'       => '5,633'
        ]
      ],
      [
        'name' => 'Kobe Bryant',
        'debut' => '1996',
        'info' => '5× NBA Champion, 2× Finals MVP',
        'desc' => 'Kobe Bryant, known worldwide as the “Black Mamba”, mesmerized fans with his masterful scoring, relentless work ethic, and will-to-win. His profound impact on the game remains undeniable.',
        'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnZfGaUvGSzHI7r7KIZkuMVvQsmqtVjLUVyjsWqj-9eoNIFM-2ewFt2-PQ&s=10',
        'achievements' => [
          'Finals MVP'    => 2,
          'Regular MVP'   => 0,
          'Career Points' => '33,643',
          'Blocks'        => '704',
          'Steals'        => '1,944',
          'Assists'       => '6,306'
        ]
      ],
      [
        'name' => 'Stephen Curry',
        'debut' => '2009',
        'info' => '4× NBA Champion, 2× Regular Season MVP',
        'desc' => 'Stephen Curry has redefined modern basketball with his unmatched shooting range and remarkable ball-handling. His deep 3-point shots have reshaped offensive strategies across the league.',
        'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1BGUYcX8BDwA5gU8eRrEYb10owDW2vN-BvTCaa2I8aQ&s',
        'achievements' => [
          'Finals MVP'    => 0,
          'Regular MVP'   => 2,
          'Career Points' => '21,712',
          'Blocks'        => '200',
          'Steals'        => '627',
          'Assists'       => '4,778'
        ]
      ]
    ];
    
    // Loop through each player's profile and display it in an article element
    foreach ($players as $player):
      // Convert the player's name to uppercase for display
      $displayName = strtoupper($player['name']);
    ?>
    <article>
      <img src="<?= $player['img']; ?>" alt="<?= $player['name']; ?>">
      <div class="content">
        <h2><?= $displayName; ?></h2>
        <div class="details">
          <strong>NBA Debut:</strong> <?= $player['debut']; ?> <br>
          <strong>Highlights:</strong> <?= $player['info']; ?> <br>
          <?= $player['desc']; ?>
        </div>
        <!-- Conditional message using if/else -->
        <?php if (isset($player['achievements']['Regular MVP']) && $player['achievements']['Regular MVP'] > 0): ?>
          <div style="color: #E41B17; font-size: 1.5rem;">Award-Winning Performer</div>
        <?php else: ?>
          <div style="color: #ccc; font-size: 1.5rem;">No Regular MVP Award</div>
        <?php endif; ?>
        <div class="stats">
          <?php foreach ($player['achievements'] as $statName => $statValue): ?>
            <div><strong><?= $statName; ?>:</strong> <?= $statValue; ?></div>
          <?php endforeach; ?>
        </div>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
</body>
</html>