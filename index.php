<?php 
header("Cache-Control: max-age=31536000");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Freedeck</title>
  <link rel="stylesheet" href="css/home.css">
  <meta name="description" content="Freedeck is a completely free, open source, and insanely extensible alternative to Elgato's Stream Deck.">
  <link rel="canonical" href="https://freedeck.app"/>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
  <div id="header" style="height: 85%;">
    <div class="navbar">
      <center class="flex-wrap-row">
        <img src="/img/logo.png" alt="Freedeck Logo" width="100" height="100">
        <h1>Freedeck</h1>
      </center>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="https://github.com/Freedeck/bootstrapper/releases/latest/download/Freedeck.Installer.exe">Download</a></li>
        <li><a href="https://discord.gg/7gWrgyt7Aa">Discord</a></li>
        <li><a href="https://github.com/freedeck/freedeck">GitHub</a></li>
      </ul>
    </div>
    <center class="image-comparison">
      <p>Companion</p>
      <p>Your Phone</p>
    </center>
    <div class="imgs">
      <img loading="lazy" width="765" height="430" src="/img/companion.png" alt="Companion Preview">
      <img loading="lazy" width="765" height="430" src="/img/app.png" alt="App Preview">
    </div>
    <center>
      <h2>More than just a soundboard; it's a Freedeck.</h2>
      <br>
      <a href="https://github.com/Freedeck/bootstrapper/releases/latest/download/Freedeck.Installer.exe" class="download-container">
        <h3>Get it? Get Freedeck.</h3>
        <p>Click to download Freedeck and join many users today!</p>
      </a>
      <p>You're one click away from a better streaming experience.</p>
    </center>
  </div>
  <div class="content">
    <div class="block what-is">
      <h2>What is Freedeck?</h2>
      <div class="text">
        <p>
          Freedeck is my free and open-source alternative to the Elgato Stream Deck.
        </p>
        <p>It's been my solo project for around 1.6 years now.</p>
        <p>I've worked passionately for months on end to make Freedeck the user-friendly app it is today.</p>
        <p>Freedeck is also <a href="https://github.com/freedeck/freedeck">open-source on GitHub.</a></p>
      </div>
    </div>
    <div class="block blue">
      <h2>What seperates Freedeck from the competition?</h2>
      <div class="text">
        <p>In addition to a completely free grid space, you can:</p>
        <ul>
          <li>Play sounds</li>
          <li>Install plugins that can control:
            <ul>
              <li><a href="https://github.com/freedeck/ytmd">YTMD (v1)</a></li>
              <li><a href="https://github.com/freedeck/wavelink">WaveLink</a></li>
              <li><a href="https://github.com/freedeck/obscontrol">OBS</a></li>
            </ul>
          </li>
          <li>Have as many Tiles as you want</li>
          <li>Customize the way those Tiles look</li> 
          <li>Personalize your Freedeck with a theme</li>
        </ul>
        And coming soon, you'll be able to:
        <ul>
          <li>Control system & application volume with a responsive slider</li>
          <li>Press any macro combination you want</li>
        </ul>
      </div>
    </div>
    <div class="block red">
      <h2>System Requirements</h2>
      <div class="text">
        <p><i>Freedeck Companion</i> is cross-platform (using Electron)</p>
        <p><strong>BUT, the installer is Windows-only!</strong></p>
        <p>Companion Requirements:</p>
        <ul>
          <li>More than 400MB of RAM</li>
          <li>Windows 10 or newer</li>
          <li>macOS 10.9 or newer</li>
          <li>Linux (most distros)</li>
        </ul>
      </div>
    </div>
    <div class="block what-is">
      <h2>Not sure yet?</h2>
      <div class="text">
        <p>
          I'd recommend at least trying Freedeck out. It's free, after all.
        </p>
        <p>And if you don't like it, you can always uninstall it!</p>
        <p>The installer conveniently places everything in the Documents folder.</p>
        <p>However, I'm sure you'll love it.</p>
      </div>
      <a href="https://github.com/Freedeck/bootstrapper/releases/latest/download/Freedeck.Installer.exe" class="download-container">
        <h3>Get it? Get Freedeck.</h3>
        <p>Click to download Freedeck.</p>
      </a>
    </div>
    <div class="block red">
      <h2>Donation</h2>
      <div class="text">
        <i>Donating is not required to use Freedeck, and will <strong>never</strong> be!</i>
        <p>If you'd like to support me for this effort of such a large project,</p>
        <p>you can donate to me on <a href="https://ko-fi.com/aidens#">Ko-fi</a>.</p>
        <p>Any amount is appreciated, and will go towards the development of Freedeck.</p>
      </div>
    </div>
  </div>
  <div id="footer">
    <center>
      <p>Freedeck is a project by <a href="https://github.com/ia74">ia74 / Aiden S.</a></p>
      <p>© 2024 Aiden S.</p>
      <img src="/img/logo.png" alt="Freedeck Logo" width="100" height="100">
    </center>
  </div>
</body>
</html>